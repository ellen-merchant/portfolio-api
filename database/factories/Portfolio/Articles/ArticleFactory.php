<?php

namespace Database\Factories\Portfolio\Articles;

use App\Portfolio\Articles\Article;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        return [
            'id' => $this->faker->numberBetween(9999, 99999999),
            'title' => $this->faker->word,
            'section' => $this->faker->paragraph,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
