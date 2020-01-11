<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->text(10),
        'content' => $faker->text(10),
        'user_id' => rand(1, 3)
    ];
});
