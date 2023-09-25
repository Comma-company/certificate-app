<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FormValid;
use Illuminate\Validation\Rule;
use App\Models\Form;

class FormValidController extends Controller
{
    public function createCertValid(Request $request){
      $request->validate([
        'years'=>'required',
    ]);
        $request->merge([
            "user_id" => Auth::guard('sanctum')->user()->id,
        ]);
      $form_valid = FormValid::updateOrCreate(['form_id' => $request->form_id],$request->all());
      $data = [
        'form_valid' =>$form_valid,
      ];
        return responseJson(true,'success created',$data);
    }
    public function getYears($id){
     $form = Form::where('id',$id)->first();
      $years = $form->valid;
      return responseJson(true,'success ',$years);

    }
    public function getAllForms(){
      $forms = Form::with('formValid')->get();
      return responseJson(true,'success ',$forms);
    }
  
}
