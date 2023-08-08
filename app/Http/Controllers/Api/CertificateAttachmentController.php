<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\CertificateAttachment;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class CertificateAttachmentController extends Controller
{
    
        public function get ($id){
            $user_id = Auth::guard('sanctum')->user()->id;
            $cert_attachments = CertificateAttachment::where([
                'user_id' => $user_id,
                'certificate_id' => $id
            ]);
            $data =[
                'cert_attachments' => $cert_attachments,
            ];
            return responseJson(true,'list of attachments',$data);
    
        }
        /**
         * Store a new CertificateAttachment.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
    
        public function store(Request $request){
            $validator = Validator::make($request->all(), [
                'certificate_id' => 'required|integer',
                'image_id' => 'required|integer',
                'exclude' => 'nullable|string',
                'note_title' => 'nullable|string',
                'note_body' => 'nullable|string',
                'attachment_type_id' => 'required|integer',
            ]);
    
            if ($validator->fails()) {
                return response()->json(['error' => 'Validation failed', 'messages' => $validator->errors()], 422);
            }
    
            $attachment = CertificateAttachment::create($request->all());
            $data = [
                'attachment' => $attachment,
            ];
    
            return responseJson(true,'Attachment is created',$data);
        }
        public function update(Request $request, $id)
        {
            $attachment = CertificateAttachment::findOrFail($id);
    
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
                'attachment'=> $attachment,
            ];
            return responseJson(true,'updated attachment successfuly',$data);
        }
    
    
    
    }
    
    

