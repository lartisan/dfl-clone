<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryListResource extends JsonResource
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
			'category' => new CategoryResource($this->whenLoaded('category')),
			$this->mergeWhen(request()->route()->hasParameter('categoryList'), [
				'products' => ProductResource::collection($this->whenLoaded('availableProducts')),
			]),
			'last_updated' => (string) $this->updated_at,
			'_self' => url("/api/categories/{$this->category->slug}/{$this->slug}")
        ];
    }
}
