<?php

namespace Database\Factories;

use App\Models\News;
use App\Models\CategoryNews;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = News::class;

    public function definition()
    {
        return [
        'name_news' => $this->faker->sentence(4),
        'discription' => $this->faker->text,
        'img' => $this->faker->imageUrl(),
        'category_news_id' => CategoryNews::get()->random()->id,
        ];
    }
}
