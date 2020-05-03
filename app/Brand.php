<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
	use SoftDeletes;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name',
		'slug',
		'logo',
		'status',
	];

	/**
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */
	protected $dates = ['deleted_at'];

	const ACTIVE_STATUS = 'active';
	const INACTIVE_STATUS = 'inactive';

	/**
	 * The "booting" method of the model.
	 *
	 * @return void
	 */
	protected static function boot()
	{
		parent::boot();

		static::creating(function ($model) {
			// $model->uuid = Uuid::uuid4()->toString();
			$slug = Str::slug($model->name);

			if (static::whereSlug($slug)->exists()) {
				$slug = "{$slug}-" . $model->id;
			}

			$model->slug = $slug;
		});
	}

	/**
	 * Get the route key for the model.
	 *
	 * @return string
	 */
	public function getRouteKeyName()
	{
		return 'slug';
	}

	/**
	 * Get the products for the brand.
	 */
	public function products()
	{
		return $this->hasMany(Product::class);
	}
}
