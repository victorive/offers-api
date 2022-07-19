<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VendorsResource extends JsonResource
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
            'vendor_id' => (string)$this->id,
                'attributes' => [
                    'vendor_name' => $this->vendor_name,
                    'offers' => $this->offers
            ]
        ];
    }
}
