<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FormValid;
use Illuminate\Validation\Rule;

class FormValidController extends Controller
{
    public function createCertValid(Request $request){
      $request->validate([
        'years' => [
            'required',
            Rule::when($request->form_id === '5', ['in:3,5']),
            Rule::when(
                in_array($request->form_id, ['9', '10', '11', '12', '13', '14', '15', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31']),
                ['in:1']
            ),
        ],
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
}
