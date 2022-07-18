<?php

namespace Database\Factories;

use App\Models\TagNews;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagNewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = TagNews::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word
        ];
    }
}
