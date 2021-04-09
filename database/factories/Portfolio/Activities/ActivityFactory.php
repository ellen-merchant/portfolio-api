<?php

namespace Database\Factories\Portfolio\Activities;

use App\Portfolio\Activities\Activity;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
{
    protected $model = Activity::class;

    public function definition()
    {
        return [
            'id' => $this->faker->numberBetween(9999, 99999999),
            'title' => $this->faker->word,
            'description' => $this->faker->sentence,
            'start_date' => Carbon::now(),
            'title_link' => $this->faker->url,
            'display' => true,
            'external' => false,
        ];
    }
}
