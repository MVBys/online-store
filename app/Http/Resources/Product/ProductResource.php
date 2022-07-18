<?php

namespace App\Http\Resources\Product;

use App\Http\Resources\Gallery\ProductGalleryResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'created_at' => $this->created_at,
            'gallery' => ProductGalleryResource::collection($this->gallery),

        ];

    }
}
