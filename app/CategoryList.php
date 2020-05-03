<?php

namespace App;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryList extends Model
{
	use SoftDeletes;

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
		'category_id',
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

		static::creating(function($model) {
			$model->uuid = Uuid::uuid4()->toString();
			$slug = str_slug($model->name);

			if(static::whereSlug($slug)->exists()) {
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
     * Get the statuses for the categoryList.
     */
	public static function statuses()
	{
		return [
			self::ACTIVE_STATUS => self::ACTIVE_STATUS,
			self::INACTIVE_STATUS => self::INACTIVE_STATUS
		];
	}

	public function isAvailable() {
		return $this->status === 'active';
	}

	public function scopeAvailable($query)
	{
		return $query->whereStatus(self::ACTIVE_STATUS);
	}

	/**
     * Get the category that owns the categoryList.
     */
	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	/**
     * Get the available products the categoryList.
     */
	public function availableProducts()
	{
		return $this->hasMany(Product::class)->available();
	}

	/**
     * Get all the products the categoryList.
     */
	public function allProducts()
	{
		return $this->hasMany(Product::class);
	}
}
