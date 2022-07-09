<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(mt_rand(2,8)),
        'category_id' => 3,
        'user_id' => 3,
        'slug' => $faker->slug(),
        'excerp' => $faker->sentence(),
        'body' => $faker->paragraph(mt_rand(5,10))
    ];
});
