<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'article_id' => function () {
                return Article::factory()->create()->id;
            },
            'user_id' => function () {
                return User::factory()->create()->id;
            },
        ];
    }
}
