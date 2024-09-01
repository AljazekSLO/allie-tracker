<?php

namespace Database\Factories;

use App\Models\Country;
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
            'country_id' => Country::inRandomOrder()->first()->id,
            'start_date' => fake()->date,
            'end_date' => fake()->date,
            'note' => fake()->paragraph,
            'rating' => fake()->numberBetween(1,5)
        ];
    }
}
