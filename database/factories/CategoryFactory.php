<?php

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
		"name" => $faker->word(),
		'status' => Category::INACTIVE_STATUS,
    ];
});

$factory->state(Category::class, 'active', [
    'status' => Category::ACTIVE_STATUS,
]);

$factory->state(Category::class, 'inactive', [
    'status' => Category::INACTIVE_STATUS,
]);

$factory->state(Category::class, 'random', [
    'status' => array_rand(Category::statuses()),
]);
