<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'            => $this->faker->sentence(),
            'descriptions'     => $this->faker->text(200),
            'image'            => $this->faker->imageUrl(480, 640, 'animals', true),
            'page'             => $this->faker->numberBetween(50, 200),             
            'year'             => $this->faker->date('Y')
        ];
    }
}
