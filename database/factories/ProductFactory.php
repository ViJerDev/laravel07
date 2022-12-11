<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake('ru')->unique()->company(),
            'category_id' => fake()->numberBetween(1, 41),
            'description' => fake('ru') -> text(),
            'price' => fake()->randomDigit(),
            'status' => fake()->boolean(90),
            'img' => fake()->imageUrl(400, 400)
        ];
    }
}
