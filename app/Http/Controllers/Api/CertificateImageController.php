<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CertificateImage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class CertificateImageController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $path = $request->file('image')->store('images', 'public');

        $certificateImage = new CertificateImage([
            'image' => $path,
        ]);

        $certificateImage->save();
        $data = $certificateImage;
        
       // $imageUrl = Storage::disk('public')->url($path);
        /*  $data = [
            'id' => $certificateImage,
            'url' => $imageUrl,
        ]; */

        return responseJson(true, 'Certificate Images ', $data);
    }
    public function deleteImage($id)
    {
        $certificateImage = CertificateImage::find($id);

        if (!$certificateImage) {
            return responseJson(false, 'Certificate image not found');
        }
        Storage::disk('public')->delete($certificateImage->image);

        $certificateImage->delete();

        return responseJson(true, 'Certificate image deleted successfully');
    }
}
