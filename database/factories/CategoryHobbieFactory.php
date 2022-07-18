<?php

namespace Database\Factories;

use App\Models\CategoryHobbie;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryHobbieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = CategoryHobbie::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word,
        ];
    }
}
