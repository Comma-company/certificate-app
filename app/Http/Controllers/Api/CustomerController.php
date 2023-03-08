<?php

namespace App\Http\Controllers\Api;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\CustomerResource;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index(Request $request)
    {
        $user = Auth::guard('sanctum')->user();

        $customers = Customer::where('user_id', $user->id)
            ->when($request->search, function ($query, $value) {
                $query->where('customers.name', 'LIKE', "%$value%");
            })
            ->when($request->type, function ($query, $value) {
                $query->where('type', 'LIKE', "%$value%");
            })
            ->with('customerType')
            ->latest()
            ->get();
          //  $data = new CustomerResource($customers);
        return responseJson(true, 'successfully', $customers);
    }

    public function show($id)
    {
        $customer = Customer::where('id', $id)->first();
        $data = new CustomerResource($customer);
        return responseJson(true, 'successfully', $data);
    }

    public function validation(Request $request)
    {
        return  $request->validate([
            'name' => 'required',
            'address' => 'required',
            'street_num' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
            'country_id' => 'required',
            'type_id' => ['required', 'exists:customer_types,id'],
            'tax_id' => ['required', 'exists:tax_settings,id'],
        ]);
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            //'address' => 'required',
            'street_num' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
            'country_id' => 'required',
            'type_id' => ['required',],
        ]);
        $request->merge([
            'user_id' => Auth::guard('sanctum')->user()->id,
        ]);

        try {

            //start the transaction

            DB::beginTransaction();
            //create customer
            $customer = Customer::create($request->all());

            // create billing details
            if ($request->billing_details == 'no') {
                $customer->billing()->create(
                    [
                        'address' => $request->billing_address,
                        'street_num' => $request->billing_street_num,
                        'country_id' => $request->billing_country_id,
                        'city' => $request->billing_city,
                        'postal_code' => $request->billing_postal_code,
                        'credit_limit' => $request->credit_limit,
                        'payment_term_id' => $request->payment_term_id,
                        'send_statement' => $request->send_statement,
                    ]
                );
            } else {
                $customer->billing()->create([
                    'address' => $request->address,
                    'street_num' => $request->street_num,
                    'country_id' => $request->country_id,
                    'city' => $request->city,
                    'postal_code' => $request->postal_code,
                    'credit_limit' => $request->credit_limit,
                    'payment_term_id' => $request->payment_term_id,
                    'send_statement' => $request->send_statement,
                ]);
            }
            //create client contact
            $customer->contacts()->create([
                "f_name" => $request->client_f_name,
                "l_name" => $request->client_l_name,
                "phone" => $request->client_phone,
                "email" => $request->client_email,
                "type" => $request->client_type,
                "user_id" => $request->user_id,
            ]);

            // create site
            if ($request->has('site_name')) {
                if ($request->copy_site_address == 'yes') {
                    $site = $customer->sites()->create([
                        "name" => $request->site_name,
                        "address" => $request->address,
                        "street_num" => $request->street_num,
                        "city" => $request->city,
                        "postal_code" => $request->postal_code,
                        "country_id" => $request->country_id,
                        "user_id" => $request->user_id,
                    ]);
                } else {
                    $site = $customer->sites()->create([
                        "name" => $request->site_name,
                        "address" => $request->site_address,
                        "street_num" => $request->site_street_num,
                        "city" => $request->site_city,
                        "postal_code" => $request->site_postal_code,
                        "country_id" => $request->site_country_id,
                        "user_id" => $request->user_id,
                    ]);
                }
            }
            // create site contact
            if ($request->has('site_contact_type')) {
                if ($request->copy_contact == 'yes') {
                    $sitecontact = $customer->siteContact()->create([
                        'site_id' =>  $site->id,
                        'type' => $request->site_contact_type,
                        'f_name' => $request->client_f_name,
                        'l_name' => $request->client_l_name,
                        'phone' => $request->client_phone,
                        'email' => $request->client_email,
                        'user_id' => $request->user_id
                    ]);
                } else {
                    $sitecontact = $customer->siteContact()->create([
                        'site_id' =>  $site->id,
                        'type' => $request->site_contact_type,
                        'f_name' => $request->site_contact_f_name,
                        'l_name' => $request->site_contact_l_name,
                        'phone' => $request->site_contact_phone,
                        'email' => $request->site_contact_email,
                        'user_id' => $request->user_id
                    ]);
                }
            }
            $data = new CustomerResource($customer);
            //commit the transaction
            DB::commit();
            return responseJson(true, 'created successfuly',  $data);
        } catch (\Exception $e) {
            DB::rollBack();
            return $e;
        }
    }
}
