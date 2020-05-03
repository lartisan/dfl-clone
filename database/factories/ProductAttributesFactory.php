<?php

use Faker\Generator as Faker;

$factory->define(App\ProductAttributes::class, function (Faker $faker) {
	$attributes = ['color', 'material', 'size'];

	return [
		'name' => $faker->randomElement($attributes),
		'description' => $faker->sentence()
    ];
});
