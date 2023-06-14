<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(3),
            'slug' => $this->faker->slug(),
            'subtitle' => $this->faker->sentence(7),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->numberBetween(500,100000),
            'image' => 'https://via.placeholder.com/200x250'
        ];
    }
}
