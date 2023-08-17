<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\BusinessType;
use App\Models\User;
use App\Models\Country;
use Stripe\Stripe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Notification;
use App\Notifications\TrialRemainingDaysNotification;
use App\Notifications\NotCompleteRegisterNotification;

class RegisterController extends Controller
{
    public function store(Request $request)
    {

        $validated = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'unique:users', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'business_type_id' => ['required', 'array'],
            'phone' => ['required', 'unique:users'],
        ]);

        if ($validated->fails()) {
            return $validated->validate();
        }

        $data = $request->all();

        $businessTypeIds = $data['business_type_id'];
        $businessTypes = BusinessType::whereIn('id', $businessTypeIds)->pluck('name')->toArray();
        DB::beginTransaction();
        try {

            $user = User::create([
                'name' => $data['first_name'] . ' ' . $data['last_name'],
                'email' => $data['email'],
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'phone' => $data['phone'],
                'password' => Hash::make($data['password']),

            ]);

            if (count($data['business_type_id']) > 0) {
                $user->BusinessType()->attach($data['business_type_id']);
            }
            $metadata = [
                'user_id' => $user->id,
                'max_certificate' => 20,
                'business_type_id' => implode(',', $businessTypes),
            ];
            Stripe::setApiKey(config('services.stripe.Secret_key'));

            $currency = 'GBP';
            $stripeCustomer = $user->createAsStripeCustomer([
                'description' => 'any desc',
                'phone' => $data['phone'],
                'metadata' => $metadata,
                //'currency' => $currency,
            ]);

            event(new Registered($user));
            DB::commit();
            return responseJson(true, 'success created user', $user);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }


    /**
     *
     *complete  register
     *
     *
     * */
    public function completeRegister(Request $request)
    {
        $validated = Validator::make($request->all(), [

            /* 'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'business_type_id' => ['required', 'array'],
            'phone' => ['required'], */
            'gas_register_number' => ['nullable', 'unique:categories_users'],
            'license_number' => ['nullable', 'unique:categories_users'],
        ]);

        if ($validated->fails()) {
            return $validated->validate();
        }

        $data = $request->all();

        $user = User::find(authUser('sanctum')->id);
        DB::beginTransaction();
        try {
            $user->update([
                'trading_name' => $data['trading_name'],
                'company_name' => $data['company_name'],
                'registration_number' => $data['registration_number'],
                'registered_address' => $data['registered_address'],
                'number_street_name' => $data['number_street_name'],
                'city' => $data['city'],
                'postal_code' => $data['postal_code'],
                'state' => $data['state'],
                'country_id' => $data['country_id'],
                'vat_number' => $data['vat_number'],
                'has_vat' => $data['has_vat'],

            ]);
            $licenseNumber = $request->license_number;
            $gasRegisterNumber = $request->gas_register_number;
            $categoriesId = $request->categories_id;
            if (empty($licenseNumber) && empty($gasRegisterNumber)) {
                $user->categories()->attach($categoriesId, [
                    'electric_board_id' => json_encode([$request->electric_board_id]),
                ]);

                if ($request->hasFile('logo')) {
                    // Upload and update logo
                    $logo = uploadImage($request->logo, 'user_logo');
                    $user->logo()->delete();
                    $user->logo()->create($logo);
                }
                Notification::send($user, new NotCompleteRegisterNotification());
                DB::commit();
                return responseJson(true, 'Please enter both License Number and Gas Register Number to create the Certificate', $user->load(['logo', 'categories']));
            }
            //$planId = env('Free_Plan','price_1NZunvE2sCQWSLCAyF0wfTn4');
            $planId = config('services.stripe.Free_Plan');
            $trialDays = 7;
            $limitedCertificateCount = 20;
            if (!empty($licenseNumber) && !empty($gasRegisterNumber)) {

                $user->categories()->attach($categoriesId, [
                    'license_number' => $request->license_number,
                    'gas_register_number' => $request->gas_register_number,
                    'electric_board_id' => json_encode([$request->electric_board_id]),
                ]);
                $countryId = $data['country_id'];
                $countryName = Country::where('id', $countryId)->pluck('iso2')->first();
                $address = [
                    'line1' => $data['registered_address'],
                    'line2' => $data['number_street_name'],
                    'state' => $data['state'],
                    'postal_code' => $data['postal_code'],
                    'city' => $data['city'],
                    'country' => $countryName,
                ];
                $user->createOrGetStripeCustomer([
                    'address' => $address,
                ]);

                $subscription = $user->newSubscription('default', $planId)->trialDays($trialDays)
                    //->quantity($limitedCertificateCount)
                    ->create();
            } elseif (!empty($licenseNumber)) {

                // Apply subscription for Electrical categories
                $user->categories()->attach($categoriesId, [
                    'license_number' => $licenseNumber,
                    'electric_board_id' => json_encode([$request->electric_board_id]),
                ]);
                $subscription = $user->newSubscription('default', $planId)->trialDays($trialDays)
                    //->quantity($limitedCertificateCount)
                    ->create();

                $subscriptionItems = $subscription->items ?? [];
                foreach ($subscriptionItems as $item) {
                    if ($item->plan && $item->plan->type === 'Electric Certificate') {
                        $item->update([
                            'quantity' => 0,
                            'metadata' => [
                                'free_for_electric' => true,
                            ],
                        ]);
                    }
                }
            } elseif (!empty($gasRegisterNumber)) {

                // Apply subscription for Gas categories
                $user->categories()->attach($categoriesId, [
                    'gas_register_number' => $gasRegisterNumber,
                    'electric_board_id' => json_encode([$request->electric_board_id]),
                ]);

                $subscription = $user->newSubscription('default', $planId)->trialDays($trialDays)
                    //->quantity($limitedCertificateCount)
                    ->create();
                $subscriptionItems = $subscription->items ?? [];
                foreach ($subscriptionItems as $item) {
                    if ($item->plan && $item->plan->type === 'Gas') {
                        $item->update([
                            'quantity' => 0,
                            'metadata' => [
                                'free_for_gas' => true,
                            ],
                        ]);
                    }
                }
            }
            if ($request->hasFile('logo')) {
                $logo = uploadImage($request->logo, 'user_logo');
                $user->logo()->delete();
                $user->logo()->create($logo);
            }
            // $data->files()->create($image);
            $trialEndsAt = $subscription->trial_ends_at;
            $remainingDays = Carbon::now()->diffInDays($trialEndsAt->endOfDay(), false);
            Notification::send($user, new TrialRemainingDaysNotification($remainingDays));

            DB::commit();
            return responseJson(true, 'success created user', $user->load(['logo', 'categories']));
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }




    /**
     *
     *complete info register
     *
     *
     * */
    public function completeInfoRegister(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'license_number' => ['required_without_all:gas_register_number', 'nullable', 'unique:categories_users'], // License number is required if gas register number is not provided
            'gas_register_number' => ['required_without_all:license_number', 'nullable', 'unique:categories_users'], // Gas register number is required if license number is not provided

        ]);

        if ($validated->fails()) {
            return responseJson(false, $validated->errors()->first(), null);
        }

        $data = $request->all();
        //$planId = env('Free_Plan','price_1NZunvE2sCQWSLCAyF0wfTn4');
        $planId = config('services.stripe.Free_Plan');
        //$planId = 'price_1NZunvE2sCQWSLCAyF0wfTn4';
        $trialDays = 7;
        $limitedCertificateCount = 20;
        $user = User::find(authUser('sanctum')->id);
        $licenseNumber = $request->license_number;
        $gasRegisterNumber = $request->gas_register_number;
        $categories = $user->categories;
        if (!empty($licenseNumber) || !empty($gasRegisterNumber)) {
            $categories->each(function ($category) use ($licenseNumber, $gasRegisterNumber) {
                if (!empty($licenseNumber)) {
                    $category->pivot->license_number = $licenseNumber;
                }
                if (!empty($gasRegisterNumber)) {
                    $category->pivot->gas_register_number = $gasRegisterNumber;
                }
                $category->pivot->save();
            });
        }
        $user->save();
        //$user->refresh();
        if (!$user->subscribed('default')) {
            $free_plan_id = config('services.stripe.Free_Plan');
            if (!$user->subscribedToPrice($free_plan_id, 'default')) {
                $subscription = $user->newSubscription('default', $free_plan_id)->trialDays($trialDays)
                    //->quantity($limitedCertificateCount)
                    ->create();
                $user->refresh();
                $subscription = $user->subscription('default');
                $trialEndsAt = $subscription->trial_ends_at;
                $remainingDays = Carbon::now()->diffInDays($trialEndsAt->endOfDay(), false);
                $key = config('services.stripe.Secret_key');
                    \Stripe\Stripe::setApiKey($key);
                 $session = \Stripe\BillingPortal\Session::create([
                'customer' => $user->stripe_id,
            ]);
            $customer_portal_link =  $session->url;
                Notification::send($user, new TrialRemainingDaysNotification($remainingDays));
            }
        }
        return responseJson(true, 'success created user', $user->load('categories'));
    }
}
