<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visit>
 */
class VisitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->uuid(),
            'user_id' => User::factory(),
            'country_id' => 1,
            'start_date' => fake()->date,
            'end_date' => fake()->date,
            'note' => fake()->paragraph,
            'rating' => fake()->numberBetween(1,10)
        ];
    }
}
