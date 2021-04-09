<?php

namespace Database\Factories\Portfolio\Skills;

use App\Portfolio\Skills\Skill;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class SkillFactory extends Factory
{
    protected $model = Skill::class;

    public function definition()
    {
        return [
            'id' => $this->faker->numberBetween(9999, 99999999),
            'start_date' => Carbon::now(),
            'description' => $this->faker->sentence,
        ];
    }
}
