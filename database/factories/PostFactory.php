<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => 'post title',
        'body' => $faker->text,
        'descrption' => $faker->sentence,
        'author' => factory(User::class)->create(),
    ];
});
