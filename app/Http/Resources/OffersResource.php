<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OffersResource extends JsonResource
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
            'offerId' => (string)$this->id,
            'attributes' => [
                'productTitle' => $this->product_title,
                'vendorId' => $this->vendor_id,
                'price' => $this->price
            ]
        ];
    }
}
