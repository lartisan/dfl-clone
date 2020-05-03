<?php

use App\Image;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        // 'product_id' => $faker->randomElement(Product::pluck('id')->toArray()),
        'path' => $faker->imageUrl(300, 400, 'fashion'),
    ];
});
