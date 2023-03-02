<?php

namespace App\Http\Controllers\Api;

use App\Models\Form;
use App\Models\User;
use App\Models\Certificate;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class CertificateController extends Controller
{
    public function index()
    {
        $data =  Certificate::where([
            'user_id' => authUser('sanctum')->id,

        ])
            ->select('id', 'customer_id', 'form_id', 'created_at', 'status_id')
            ->with(['status', 'customer', 'notes', 'form'])
            ->latest()
            ->get();

        return responseJson(true, 'list of all certificates', $data);
    }

    public function completeCertificate()
    {
        $data =  Certificate::where([
            'user_id' => authUser('sanctum')->id,
        ])
            ->select('id', 'customer_id', 'status_id', 'form_id', 'created_at')
            ->where('status_id', 4)
            ->with(['status', 'customer', 'notes', 'form'])
            ->latest()
            ->get();

        return responseJson(true, 'list of all certificates', $data);
    }


    public function uncompletedCertificate()
    {
        $data =  Certificate::where('user_id', authUser('sanctum')->id)
            ->select('id', 'customer_id', 'form_id', 'status_id', 'created_at')
            ->where('status_id', '!=', 4)
            ->with(['status', 'customer', 'form'])
            ->latest()
            ->get();

        return responseJson(true, 'list of all certificates', $data);
    }

    /* ************ */
    public function certificateCount()
    {

        $count_complete_cert = Certificate::where('user_id', authUser('sanctum')->id)
            ->select('id', 'customer_id', 'status_id', 'form_id', 'created_at')
            ->where('status_id', 4)
            ->count();

        $count_uncompleted_cert =  Certificate::where('user_id', authUser('sanctum')->id)
            ->select('id', 'customer_id', 'form_id', 'status_id', 'created_at')
            ->where('status_id', '!=', 4)
            ->count();

        $data = [
            'count_complete_cert' => $count_complete_cert,
            'count_uncompleted_cert' => $count_uncompleted_cert,
        ];
        return responseJson(true, 'Certificates Count', $data);
    }


    public function store(Request $request)
    {
        //return response()->json($request->job_id) ;
        $request->validate([
            'customer_id' => ['sometimes', 'required', 'exists:customers,id'],
            'form_id' => ['required', 'exists:forms,id'],
            'data' => ['required']
        ]);


        $data = new Certificate();
        $data->user_id = authUser('sanctum')->id;
        $data->form_id = $request->form_id;
        $data->customer_id = $request->customer_id;
        $data->status_id = $request->status_id;
        $data->data = $request->data;
        $data->save();

        if ($request->form_images) {
            $images = $request->form_images;
            foreach ($images as $key => $imageFile) {
                if (is_file($imageFile['image'])) {
                    $image = uploadImage($imageFile['image'], $imageFile['id']);
                    $data->files()->create($image);
                }
            }
        }
        if ($request->customer_signature) {
            $customer_signature = $request->customer_signature;
            $image = uploadImage($customer_signature, 'customer_signature');
            $data->files()->create($image);
        }

        $form = Form::findOrFail($request->form_id);

        $folder_name = '';
        if ($form->type == 'Domestic Electrical') {
            $folder_name = 'domestic_electrical';
        } else if ($form->type == 'Domestic Gas') {
            $folder_name = 'domestic_gas';
        } else if ($form->type == 'Commercial Gas') {
            $folder_name = 'commercial_gas';
        }
        // view page name
        $page_path = 'dashboard.form.template.' . $folder_name . '.' . $form->file_name . '.index';

        if (View::exists($page_path)) {

            $body = [
                "form_data" => $data,
                // 'html_content' => $html
            ];
            return responseJson(true, 'success created', $body);
        } else {
            return responseJson(false, 'page not found', '', 404);
        }
    }


    public function storeNote($id, Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'body' => ['required'],
        ]);
        $user = authUser('sanctum');
        $certificate =  Certificate::where('user_id', $user->id)->findOrFail($id);
        DB::beginTransaction();
        try {
            $note = $certificate->notes()->create([
                'user_id' => $user->id,
                'title' => $request->title,
                'body' => $request->body,
            ]);
            $files_name = [];
            if ($request->note_files) {
                foreach ($request->note_files as $key =>  $file) {
                    //dd($file);
                    $file_name = strtotime(now()) . '_' . Str::random(6).'.'.$file->extension();
                    $files_name[$key]['name'] = $file_name;

                    if ($file->extension() == 'jpeg' || $file->extension() == 'jpg' || $file->extension() == 'png') {
                        $image = uploadImageAs($file, $file_name, 'image');
                        $file = $note->files()->create($image);

                        $files_name[$key]['id'] = $file->id;
                        $files_name[$key]['url'] = $file->url;
                        $files_name[$key]['type'] = 'image';
                    } elseif ($file->extension() == 'mp4' || $file->extension() == 'vlc') {

                        $image = uploadImageAs($file, $file_name, 'video');
                        $file = $note->files()->create($image);
                        $files_name[$key]['id'] = $file->id;
                        $files_name[$key]['url'] = $file->url;
                        $files_name[$key]['type'] = 'video';
                    }
                }
            }

            $body = [
                "note" => $note,
                "files" => $files_name
            ];
            DB::commit();
            return responseJson(true, 'success created', $body);

        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function update($id, Request $request)
    {

        $request->validate([
            'status_id' => ['sometimes',  'exists:statuses,id'],
            'data' => ['required']
        ]);

        $user = authUser('sanctum');
        $data =  Certificate::where('user_id', $user->id)->findOrFail($id);
        $data->status_id = $request->status_id;
        $data->type = 'certificate';
        $data->data = $request->data;
        $data->save();

        if ($request->form_images) {
            $images = $request->form_images;
            foreach ($images as $key => $imageFile) {
                if (is_file($imageFile['image'])) {
                    $image = uploadImage($imageFile['image'], $imageFile['id']);
                    $data->files()->create($image);
                }
            }
        }

        if ($request->customer_signature) {
            $customer_signature = $request->customer_signature;
            $image = uploadImage($customer_signature, 'customer_signature');
            $data->files()->create($image);
        }


        return responseJson(true, 'success update', $data);
    }



    public function customerCertificate(Request $request)
    {
        $user_id = Auth::guard('sanctum')->user()->id;

        $data =  Certificate::where([
            'user_id' => $user_id,
            'customer_id' => $request->customer_id,
            'id' => $request->id,
        ])
            ->with(['status', 'notes.files', 'form', 'customer', 'customer.sites', 'customer.contacts', 'customer.country', 'customer.billing.paymentTerm'])
            ->first();

        if ($data) {

            $form = Form::findOrFail($data->form_id);

            $folder_name = '';
            if ($form->type == 'Domestic Electrical') {
                $folder_name = 'domestic_electrical';
            } else if ($form->type == 'Domestic Gas') {
                $folder_name = 'domestic_gas';
            } else if ($form->type == 'Commercial Gas') {
                $folder_name = 'commercial_gas';
            }

            // view page name
            $page_path = 'dashboard.form.template.' . $folder_name . '.' . $form->file_name . '.index';

            if (View::exists($page_path)) {


                $gaz_safety_data =  data_get($data->data, 'gaz_safety_data');
                $final_result = data_get($data->data, 'gaz_safety_data.*.final_result');

                /*    $final_result_no =   Arr::where($final_result, function ($value, $key) {
                    return strtoupper($value) == strtoupper('no');
                });

                $final_result_yes =   Arr::where($final_result, function ($value, $key) {
                    return strtoupper($value) == strtoupper('yes');
                }); */


                $user = User::where('id', $user_id)->first();
                 $html = View::make($page_path, [
                    'form_data' => $data,
                    'data' => $data->data,
                    'gaz_safety_data' => $gaz_safety_data,
                   /*  'final_result' => $final_result,
                    'final_result_no' => $final_result_no,
                    'final_result_yes' => $final_result_yes,*/
                    'user' => $user,
                ])->render();

                $form_data = collect($data);
                $form_data->all();
                $body = [
                    "form_data" => $form_data,
                    // 'html_content' => $html
                ];
                return responseJson(true, 'success selected', $body);
            } else {
                return responseJson(false, 'page not found', '', 404);
            }
        } else {
            return responseJson(false, 'certificate Not found ', null, 404);
        }
    }

    public function updateStatus($id, Request $request)
    {
        $request->validate([
            'status_id' => ['sometimes',  'exists:statuses,id']
        ]);
        $user = authUser('sanctum');
        $data =  Certificate::where('user_id', $user->id)->findOrFail($id);

        $data->update(['status_id' => $request->status_id]);

        return responseJson(true, 'success update status', $data);
    }
}
