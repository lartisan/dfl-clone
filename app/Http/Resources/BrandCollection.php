<?php

namespace App\Http\Resources;

use App\Http\Resources\BrandResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class BrandCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => BrandResource::collection($this->collection),
            'meta' => [
                'brands_count' => $this->collection->count(),
            ],
        ];
    }
}
