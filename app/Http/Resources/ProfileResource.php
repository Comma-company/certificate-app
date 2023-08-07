<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' =>  $this->email,
            'phone' => $this->phone,
            'image' => $this->image,
            'registered_address' => $this->registered_address,
            'trading_name' => $this->trading_name,
            'company_name' => $this->company_name,
            'registration_number'  => $this->registration_number,
            'registered_address' => $this->registered_address,
            'number_street_name' => $this->number_street_name,
            'city' => $this->city,
            'postal_code' => $this->postal_code,
            'country_id'  => $this->country_id,
            'vat_number'  => $this->vat_number,
            'has_vat'   => $this->has_vat,
            'stripe_id'  => $this->stripe_id,
            'country' =>  $this->country,
            'subscriptions' => SubscriptionResource::collection($this->subscriptions),
            //'plan_name' =>  $this->subscriptions,
            'categories' =>   $this->categories,
            'logo'  =>   $this->logo


        ];
    }
}
