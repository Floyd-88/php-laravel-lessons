<?php

namespace Database\Factories;

use App\Models\Language;
use App\Models\Work;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Work::class;

    public function definition()
    {
        return [
            'title_work' => $this->faker->sentence(4),
            'description_work' => $this->faker->text,
            'grade' => random_int(3, 5),
            'language_id' => Language::get()->random()->id,
        ];
    }
}
