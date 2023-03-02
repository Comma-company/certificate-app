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
        $user = User::select('id','first_name','last_name','email','phone','image')
        ->where('id',$user_id)
        ->with('userEmail')
        ->withCount('jobs')
        ->withCount('certificateForm')
        ->first();
        return responseJson(true,'user details',$user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $user = User::where('id',$user_id)->first();

        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>['required','email',Rule::unique('users')->ignore($user->id)],
            'phone'=>'required',
            'image' => ['file','mimes:jpeg,jpg,png','max:8192']
        ]);

        $prev_image = $user->image;
        if ($request->hasFile('image')) {
            $image = uploadImage($request->image);
            //file_url
        }
        $user->update([
        'name' => $request->first_name . ' ' . $request->last_name,
        'first_name'=>$request->first_name,
        'last_name'=>$request->last_name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'image' => $image['file_url'] ?? $prev_image
        ]);
        return responseJson(true,'user updated','');
    }

    public function updateImage(Request $request){
        $user_id = Auth::guard('sanctum')->user()->id;
        $user = User::where('id',$user_id)->first();

        $request->validate([
            'image' => ['file','mimes:jpeg,jpg,png']
        ]);

        $prev_image = $user->image;
        if ($request->hasFile('image')) {
            $image = uploadImage($request->image);
            //file_url
        }
        $user->update([
            'image' => $image['file_url'] ?? $prev_image
        ]);
        return responseJson(true,'success updated','');
    }

    public function updatePassword(Request $request){
        $request->validate([
            'current_password' => ['required',new MatchPassword],
            'password' => 'required|confirmed'
        ]);

        $user_id = Auth::guard('sanctum')->user()->id;
        $user = User::where('id',$user_id)->first();

        $user->update([
            'password' => Hash::make($request->password),
            ]);
            return responseJson(true,'password updated','');

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
        $user = User::where('id',authUser('sanctum')->id)->first();
        $user->delete();
        return responseJson(true,'success deleted account',$user);
    }
}
