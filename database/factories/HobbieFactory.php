<?php

namespace Database\Factories;

use App\Models\Hobbie;
use App\Models\CategoryHobbie;
use Illuminate\Database\Eloquent\Factories\Factory;

class HobbieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Hobbie::class;

    public function definition()
    {
        return [
            'name_hobbie' => $this->faker->word,
            'category_hobbie_id' => CategoryHobbie::get()->random()->id,
        ];
    }
}
