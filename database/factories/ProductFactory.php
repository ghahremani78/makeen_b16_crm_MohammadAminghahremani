<?php

namespace Database\Factories;

use App\Models\Brand;
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
    public function definition(): array
    {
        return [
            'productname'=>fake()->name(),
            'price'=>round(fake()->numberBetween(25000, 55000), -3),
            'memory'=>fake()->randomFloat(128,256,512),
            'operatingsystem'=>fake()->randomElement(['a','i']),
            'color'=>fake()->colorName(),
            'path_image' =>fake()->imageUrl(640, 480, 'animals', true),
            'brand_id'=>Brand::factory()
        ];
    }
}
