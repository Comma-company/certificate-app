<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SubscriptionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        $stripe = new \Stripe\StripeClient(config('services.stripe.Secret_key'));
        $productId = $this->items->first()->stripe_product;

        // Fetch the product from Stripe
        $product = $stripe->products->retrieve($productId);

        return [
            "id" => $this->name,
            "user_id" => $this->user_id,
            "name" => $this->name,
            "product_name" =>  $product->name,
            "stripe_id" =>   $this->stripe_id,
            "stripe_status" => $this->stripe_status,
            "stripe_price" =>  $this->stripe_price,
            "quantity" =>  $this->quantity,
            "trial_ends_at" => $this->trial_ends_at,
            "ends_at" => $this->ends_at,
            "created_at" =>  $this->created_at,
            "updated_at" =>  $this->updated_at,
            "items" => $this->items
        ];
    }
}
