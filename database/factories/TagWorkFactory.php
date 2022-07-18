<?php

namespace Database\Factories;

use App\Models\TagWork;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagWorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = TagWork::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word
        ];
    }
}
