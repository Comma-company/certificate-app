<?php

namespace App\Http\Controllers\Api;

use App\Models\TaxSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TaxSettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }


    public function index(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        $tax_setting = TaxSetting::select('id','tax_name','tax_amount','user_id')
        ->where('user_id', $user->id)
        ->orWhere('user_id',null)
        ->with('status')
        ->when($request->search, function($query,$value){
            $query->where('tax_settings.tax_name','LIKE',"%$value%");
        })->get();

        return responseJson(true,'datd for job categories', $tax_setting);
    }
}
