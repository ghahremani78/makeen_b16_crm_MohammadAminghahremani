<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => fake()->randomElement(['pay','no pay']),
            'totalAmount' => fake()->numberBetween(12,14),
            'paymenttype' =>fake()->randomElement(['online','inhome']),
            'location' => fake()->address(),
            'codeposti' => fake()->randomNumber(),
            'transferee' =>fake()->name(),
            'description' =>fake()->paragraph(1),
            'user_id' => User::factory()
        ];
    }
}
