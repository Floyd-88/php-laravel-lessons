<?php

namespace Database\Factories;

use App\Models\CategoryNews;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryNewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = CategoryNews::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word,
        ];
    }
}
