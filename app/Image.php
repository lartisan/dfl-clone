<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use SoftDeletes;

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'product_id',
		'path',
	];

	/**
     * Get the product that owns the image.
     */
	public function product()
	{
		return $this->belongsTo(Product::class);
	}
	
}
