<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerContactResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "user_id" => $this->user_id,
            "id" => $this->id,
            "customer_id" => $this->customer_id,
            "f_name" => $this->f_name,
            "phone" => $this->phone,
            "type" => $this->type,
            "email" => $this->email,
            "created_at" => $this->created_at,
            "customer" => $this->customer,
        ];
    }
}
