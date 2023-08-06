<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CertificateImage;
use Illuminate\Support\Facades\Validator;

class CertificateImageController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'type' => 'required|in:note,form,user',
            'type_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $path = $request->file('image')->store('images', 'public');

        $certificateImage = new CertificateImage([
            'image' => $path,
            'type' => $request->input('type'),
            'type_id' => $request->input('type_id'),
        ]);

         $certificateImage->save();
        return responseJson(true,'Certificate Images ',$certificateImage);
    }

   
}
