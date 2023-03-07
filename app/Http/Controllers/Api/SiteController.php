<?php

namespace App\Http\Controllers\Api;

use App\Models\Site;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SiteResource;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        $sites = Site::where('user_id', $user->id)->when($request->name, function ($query, $value) {
            $query->where('sites.name', 'LIKE', "%$value%");
        })
            ->latest()
            ->get();

        return response()->json(['code' => 200, 'status' => true, 'data' => $sites,]);
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => ['required'],
            'f_name' =>  ['required'],
            'l_name' =>  ['required'],
            'phone' =>  ['required'],
            'email' =>  ['required'],
        ]);
        $site = Site::where('user_id', authUser('sanctum')->id)->findOrFail();
        $site->update(['name' => $request->name]);
        $site->siteContact()->update([
            'type' => $request->type,
            'f_name' => $request->first_name,
            'l_name' => $request->list_name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);
        $data = new SiteResource($site);
        return responseJson(true, 'success update', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
