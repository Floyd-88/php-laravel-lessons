<?php

namespace Database\Factories;

use App\Models\TagHobbie;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagHobbieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = TagHobbie::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word
        ];
    }
}
