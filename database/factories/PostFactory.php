<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    return [
            'title' => $this->faker->sentence(),
            'slug' => Str::slug($this->faker->sentence()),
            'body' => $this->faker->paragraph(10),
            'photo' => null
    ];
});
