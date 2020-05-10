<?php

use App\Portfolio\Skills\Skill;
use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

/** @var Factory $factory */
$factory->define(Skill::class, function (Faker $faker) {
    return [
        'id' => $faker->numberBetween(9999, 99999999),
        'start_date' => Carbon::now(),
        'description' => $faker->sentence,
    ];
});
