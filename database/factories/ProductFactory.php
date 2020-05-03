<?php

use App\Brand;
use App\Product;
use App\Category;
use App\CategoryList;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
	return [
        'brand_id' => $faker->randomElement(Brand::pluck('id')->toArray()),
		'category_list_id' => $faker->randomElement(CategoryList::pluck('id')->toArray()),
		'title' => $faker->sentence(3),
		'price' => $faker->numberBetween(1, 999)*100,
		'discount' => $faker->randomElement([10, 20, 30, 40]),
		'description' => $faker->paragraph(3),
		'inventory' => $faker->numberBetween(1, 10),
    ];
});

$factory->state(Product::class, 'active', [
    'status' => Product::ACTIVE_STATUS,
]);

$factory->state(Product::class, 'available', [
    'status' => array_rand(Product::availableStatuses()),
]);

