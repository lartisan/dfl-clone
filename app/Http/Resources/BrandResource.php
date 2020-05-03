<?php

namespace App\Http\Resources;

use App\Http\Resources\ProductResource;
use Illuminate\Http\Resources\Json\JsonResource;

class BrandResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
			'name' => $this->name,
			'slug' => $this->slug,
			'logo' => $this->logo,
			'products' => ProductResource::collection($this->whenLoaded('products')),
			// 'status' => $this->status,
			'_self' => url("/api/brands/{$this->slug}")
		];
    }
}
