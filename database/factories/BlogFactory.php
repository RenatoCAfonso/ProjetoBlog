<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo'=> $this->faker->word,
            'created_at'=> $this->faker->dateTimeBetween($startDate = '-02 years', $endDate = 'now', $timezone = null),
            'texto'=> $this->faker->text($maxNbChars = 599),
            
        ];
    }
}
