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
            'title' => $this->faker->sentence(random_int(1, 6), true),
            'description' => $this->faker->paragraph(random_int(1, 4), true),
            'thumbnail' => "https://picsum.photos/640/480?random=" . random_int(1, 200),
            'price' => $this->faker->randomFloat(null, 255, 10000),
            'quantity' => random_int(0, 300),
            'created_at' => $this->faker->dateTime('now', null),
            'updated_at' => $this->faker->dateTime('now', null),
        ];
    }
}
