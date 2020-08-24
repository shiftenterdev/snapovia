<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'name'            => $this->name,
            'url_key'         => $this->url_key,
            'url_path'        => $this->url_path,
            'product_count'   => $this->product_count,
            'include_in_menu' => (bool)$this->include_in_menu,
            'status'          => $this->status
        ];
    }
}
