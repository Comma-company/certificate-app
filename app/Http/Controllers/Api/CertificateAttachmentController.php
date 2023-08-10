<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\CertificateAttachment;
use App\Models\CertificateImage;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class CertificateAttachmentController extends Controller
{

    public function get($id)
    {
        $user_id = Auth::guard('sanctum')->user()->id;
        $image_urls = [];
        $cert_attachments = CertificateAttachment::where([
            'certificate_id' => $id,
        ])->with('image:image,id')->get();

        // foreach ($cert_attachments as $attachment) {
        //     $image =CertificateImage::find($attachment->image_id);

        //     if ($image) {
        //         $image_url = Storage::disk('public')->url($image->image);
        //         $attachment->image_url = $image_url;
        //         $image_urls[] = $image_url;
        //     }
        // }
        // $data = [
        //     'cert_attachments' => $cert_attachments,


        // ];

        return responseJson(true, 'list of attachments', $cert_attachments);
    }
    /**
     * Store a new CertificateAttachment.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'certificate_id' => 'required|integer',
            'image_id' => 'required_if:attachment_type_id,==,1|integer',
            'exclude' => 'nullable|string',
            'note_title' => 'required_if:attachment_type_id,==,3|string',
            'note_body' => 'required_if:attachment_type_id,==,2|required_if:attachment_type_id,==,3|string',
            'attachment_type_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 'Validation failed', 'messages' => $validator->errors()], 422);
        }
        $attachment = CertificateAttachment::create($request->all());
        $data = [
            'attachment' => $attachment,
        ];

        return responseJson(true, 'Attachment is created', $data);
    }
    public function update(Request $request, $id)
    {
        $attachment = CertificateAttachment::find($id);

        if (!$attachment) {
            return responseJson(false, 'No query result', [], 404);
        }

        $validator = Validator::make($request->all(), [
            'certificate_id' => 'integer',
            'image_id' => 'integer',
            'exclude' => 'nullable|string',
            'note_title' => 'nullable|string',
            'note_body' => 'nullable|string',
            'attachment_type_id' => 'integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => 'Validation failed', 'messages' => $validator->errors()], 422);
        }

        $attachment->update($request->all());
        $data = [
            'attachment' => $attachment,
        ];
        
        return responseJson(true, 'updated attachment successfuly', $data);
    }
    public function destroy($id)
    {
        $attachment = CertificateAttachment::find($id);
        if (!$attachment) {
            return responseJson(false, 'Attachment not found', null, 404);
        }
        $attachment->delete();

        return responseJson(true, 'Attachment deleted successfully', null);
    }
}
