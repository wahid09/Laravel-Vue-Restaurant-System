<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
  $name = $faker->word;
  $slug = str_slug($name);
    return [
        'restaurant_id' => 1,
        'name' => $name,
        'slug' => $slug,
    ];
});
