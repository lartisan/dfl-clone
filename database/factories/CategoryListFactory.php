<?php

use App\CategoryList;
use Faker\Generator as Faker;

$factory->define(CategoryList::class, function (Faker $faker) {
    return [
		"name" => $faker->word(),
    ];
});

$factory->state(CategoryList::class, 'active', [
    'status' => CategoryList::ACTIVE_STATUS,
]);

$factory->state(CategoryList::class, 'inactive', [
    'status' => CategoryList::INACTIVE_STATUS,
]);

$factory->state(CategoryList::class, 'random', [
    'status' => array_rand(CategoryList::statuses()),
]);
