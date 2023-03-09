<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Rules\MatchPassword;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::guard('sanctum')->user()->id;
        $user = User::select('id', 'first_name', 'last_name', 'email', 'phone', 'image', 'registered_address')
            ->where('id', $user_id)
            ->with('userEmail')
            ->withCount('certificate')
            ->first();
        return responseJson(true, 'user details', $user);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function otherData()
    {
        $user_id = Auth::guard('sanctum')->user()->id;

        $user = User::select(
            'id',
            'first_name',
            'last_name',
            'email',
            'phone',
            'image',
            'registered_address',
            'trading_name',
            'company_name',
            'registration_number',
            'registered_address',
            'number_street_name',
            'city',
            'postal_code',
            'country_id',
            'vat_number',
            'has_vat',
        )
            ->where('id', $user_id)
            ->with('country')
            ->first();
        return responseJson(true, 'user details', $user);
    }

    /**
     * update user address.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateAddress(Request $request)
    {
        /*'registered_address','number_street_name','city',
        'postal_code','country_id',
        */

        $user = authUser('sanctum');

        $user->update([
            'registered_address' => $request->registered_address,
            'number_street_name' => $request->number_street_name,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'country_id' => $request->country_id,
        ]);

        return responseJson(true, 'success update address', $user);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user_id = Auth::guard('sanctum')->user()->id;
        $user = User::where('id', $user_id)->first();

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'phone' => 'required',
            'image' => ['file', 'mimes:jpeg,jpg,png', 'max:8192', 'nullable']
        ]);

        $prev_image = $user->image;
        if ($request->hasFile('image')) {
            $image = uploadImage($request->image);
            //file_url
        }
        $user->update([
            'name' => $request->first_name . ' ' . $request->last_name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            //'email'=>$request->email,
            'phone' => $request->phone,
            'image' => $image['file_url'] ?? $prev_image
        ]);
        $user->refresh;
        return responseJson(true, 'user updated', $user);
    }

    public function updateImage(Request $request)
    {
        $user_id = Auth::guard('sanctum')->user()->id;
        $user = User::where('id', $user_id)->first();

        $request->validate([
            'image' => ['file', 'mimes:jpeg,jpg,png']
        ]);

        $prev_image = $user->image;
        if ($request->hasFile('image')) {
            $image = uploadImage($request->image);
            //file_url
        }
        $user->update([
            'image' => $image['file_url'] ?? $prev_image
        ]);
        return responseJson(true, 'success updated', '');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchPassword],
            'password' => 'required|confirmed'
        ]);

        $user_id = Auth::guard('sanctum')->user()->id;
        $user = User::where('id', $user_id)->first();

        $user->update([
            'password' => Hash::make($request->password),
        ]);
        return responseJson(true, 'password updated', '');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $request->validate([
            'password' => ['required', new MatchPassword('sanctum')],
        ]);
        $user = User::where('id', authUser('sanctum')->id)->first();
        $user->delete();
        return responseJson(true, 'success deleted account', $user);
    }
}
