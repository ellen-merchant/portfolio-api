<?php

use App\Portfolio\Activities\Activity;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/** @var Factory $factory */
$factory->define(Activity::class, function (Faker $faker) {
    return [
        'id' => $faker->numberBetween(9999, 99999999),
        'title' => $faker->word,
        'description' => $faker->sentence,
        'start_date' => Carbon::now(),
        'title_link' => $faker->url,
        'display' => true,
        'external' => false,
    ];
});
