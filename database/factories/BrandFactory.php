<?php

use App\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    return [
		'name' => $faker->words(2, true),
		'logo' => $faker->imageUrl(64, 64, 'abstract'),
    ];
});

$factory->state(Brand::class, 'active', [
    'status' => Brand::ACTIVE_STATUS,
]);

$factory->state(Brand::class, 'inactive', [
    'status' => Brand::INACTIVE_STATUS,
]);