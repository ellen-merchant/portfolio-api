<?php

use App\Portfolio\Articles\Article;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/** @var Factory $factory */
$factory->define(Article::class, function (Faker $faker) {
    return [
        'id' => $faker->numberBetween(9999, 99999999),
        'title' => $faker->word,
        'section' => $faker->paragraph,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ];
});
