<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ProductResource;

class CategoryResource extends JsonResource
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
			// 'status' => $this->status,
			$this->mergeWhen($request->routeIs('categories.*'), [
			// $this->mergeWhen(!$request->route()->hasParameter('product'), [
				'children' => $this->when(
					$this->availableLists,
					CategoryListResource::collection($this->whenLoaded('availableLists'))
				),
			]),
			$this->mergeWhen($request->route()->hasParameter('category'), [
				'products' => ProductResource::collection($this->whenLoaded('availableProducts')),
			]),
			'last_updated' => (string) $this->updated_at,
			'_self' => url("/api/categories/{$this->slug}")
        ];
    }
}
