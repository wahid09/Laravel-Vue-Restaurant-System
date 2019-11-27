<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Menu::class, function (Faker $faker) {
	$name = $faker->word;
    $slug = str_slug($name);
    return [
        'name' => $name,
        'slug' => $slug,
        'description' => $faker->paragraph($nbSentences = 2, $variableNbSentences = true),
        'price' => $faker->numberBetween($min = 99, $max = 999),
        'image' => $faker->imageUrl($width = 400, $height = 480),
				'restaurant_id' => 1,
				'category_id'   => 1,
    ];
});
