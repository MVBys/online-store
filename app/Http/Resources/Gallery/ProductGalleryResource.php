<?php

namespace App\Http\Resources\Gallery;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductGalleryResource extends JsonResource
{
    // public static $wrap = 'user';
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'image' => $this->image,
        ];
    }
}
