<?php

namespace App;

use App\Product;
use App\CategoryList;
use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
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
		'uuid',
		'status'
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
			$model->uuid = Uuid::uuid4()->toString();
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
	 * Get the statuses for the category.
	 */
	public static function statuses()
	{
		return [
			self::ACTIVE_STATUS => self::ACTIVE_STATUS,
			self::INACTIVE_STATUS => self::INACTIVE_STATUS
		];
	}

	/**
	 * Check if a category is available
	 *
	 * @return boolean
	 */
	public function isAvailable()
	{
		return $this->status === 'active';
	}

	/**
	 * Scope a query to only include available categories.
	 *
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	public function scopeAvailable($query)
	{
		return $query->whereStatus(self::ACTIVE_STATUS);
	}

	/**
	 * Get all the categoryLists for the category.
	 */
	public function allLists()
	{
		return $this->hasMany(CategoryList::class, 'category_id');
	}

	/**
	 * Get the available categoryLists for the category.
	 */
	public function availableLists()
	{
		return $this->hasMany(CategoryList::class, 'category_id')->available();
	}

	/**
	 * Get all the products for the category.
	 */
	public function allProducts()
	{
		return $this->hasManyThrough(Product::class, CategoryList::class);
	}

	/**
	 * Get the available products for the category.
	 */
	public function availableProducts()
	{
		return $this->hasManyThrough(Product::class, CategoryList::class)
			->where('category_lists.status', 'active')
			->join('categories', 'categories.id', '=', 'category_lists.category_id')
			->where('categories.status', 'active')
			->available();
	}
}
