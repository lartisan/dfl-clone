<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
			'full_name' => $this->name,
			'slug' => $this->slug,
			'email' => $this->email,
			'last_updated' => (string) $this->updated_at,
			'is_admin' => $this->isAdmin,
			'_self' => url("/api/users/{$this->slug}")
		];
    }
}
