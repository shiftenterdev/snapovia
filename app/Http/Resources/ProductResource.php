<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'sku'               => $this->sku,
            'name'              => $this->name,
            'price'             => $this->price,
            'image'             => $this->base_image,
            'short_description' => $this->short_description,
            'url'               => route('welcome') . '/api/products/' . $this->url_key,
        ];
    }
}
