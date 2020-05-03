<?php

namespace App;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
	use SoftDeletes;

	const ACTIVE_STATUS = 'active';
	const INACTIVE_STATUS = 'inactive';
	const ARCHIVED_STATUS = 'archived';
	const COMING_SOON_STATUS = 'coming-soon';
	const SOLD_OUT_STATUS = 'sold-out';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'brand_id',
		'uuid',
		'category_list_id',
		'status',
		'slug',
		'title',
		'price',
		'discount',
		'description',
		'inventory',
	];

	/**
     * The number of models to return for pagination.
     *
     * @var  int
     */
	protected $perPage = 15;

	/**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
	protected $dates = ['deleted_at'];

	/**
     * The "booting" method of the model.
     *
     * @return void
     */
	protected static function boot()
	{
		parent::boot();

		static::creating(function($model)
		{
			$model->uuid = Uuid::uuid4()->toString();

			$slug = str_slug($model->title);

			// if(static::whereSlug($slug)->exists()) {
			// 	$slug = "{$slug}-" . self::id;
			// }

			$model->slug = $slug;
		});

		static::updating(function($model) {
			$model->slug = str_slug($model->title);
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
     * Get the product's price with 2 decimals.
     *
     * @return string
     */
    public function getPriceAttribute($price)
    {
        return number_format($price / 100, 2);
    }

    /**
     * Set the product's price.
     *
     * @param  string  $value
     * @return void
     */
    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = strtolower($value);
    }

	/**
     * Get all the statuses for the product.
     */
	public static function statuses()
	{
		return [
			self::ACTIVE_STATUS => self::ACTIVE_STATUS,
			self::INACTIVE_STATUS => self::INACTIVE_STATUS,
			self::ARCHIVED_STATUS => self::ARCHIVED_STATUS,
			self::COMING_SOON_STATUS => self::COMING_SOON_STATUS,
			self::SOLD_OUT_STATUS => self::SOLD_OUT_STATUS,
		];
	}

	/**
     * Check if a product is available
	 *
	 * @return boolean
     */
	public function isAvailable() {
		return $this->status === 'active';
	}

	/**
     * Get the available statuses for the product.
     */
	public static function availableStatuses()
	{
		return [
			self::ACTIVE_STATUS => self::ACTIVE_STATUS,
			self::COMING_SOON_STATUS => self::COMING_SOON_STATUS,
			self::SOLD_OUT_STATUS => self::SOLD_OUT_STATUS,
		];
	}

	/**
     * Scope a query to only include available products.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
	public function scopeAvailable($query)
	{
		return $query->whereIn('products.status', self::availableStatuses());
	}

	/**
	 * Get the categoryList that owns the product
	 */
	public function categoryList()
	{
		return $this->belongsTo(CategoryList::class, 'category_list_id');
	}

	/**
	 * Get the brand that owns the product
	 */
	public function brand()
	{
		return $this->belongsTo(Brand::class);
	}

	/**
	 * Get all the images for the product
	 */
	public function images()
	{
		return $this->hasMany(Image::class);
	}

	/**
	 * Get all the attributes for the product
	 */
	public function attributes()
	{
		return $this->hasMany(ProductAttributes::class, 'product_id');
	}

}
