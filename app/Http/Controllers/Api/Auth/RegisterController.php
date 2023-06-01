<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function store(Request $request)
    {

        $validated = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'business_type_id' => ['required', 'array'],
            'phone' => ['required'],
        ]);

        if ($validated->fails()) {
            return $validated->validate();
        }

        $data = $request->all();
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
            event(new Registered($user));
            DB::commit();
            return responseJson(true, 'success created user', $user);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function completeRegister(Request $request)
    {
        $validated = Validator::make($request->all(), [

            /* 'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'business_type_id' => ['required', 'array'],
            'phone' => ['required'], */]);

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
                'country_id' => $data['country_id'],
                'vat_number' => $data['vat_number'],
                'has_vat' => $data['has_vat'],
            ]);

            $user->forms()->attach($request->forms_id);
            if ($request->hasFile('logo')) {
                $logo = uploadImage($request->logo, 'user_logo');
                $user->logo()->delete();
                $user->logo()->create($logo);
            }

            // $data->files()->create($image);
            DB::commit();

            return responseJson(true, 'success created user', $user->load(['logo','forms']));
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
