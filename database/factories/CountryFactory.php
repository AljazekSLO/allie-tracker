<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->country,
            'iso2' => fake()->countryCode,
            'population' => fake()->numberBetween(200000,200000000),
            'continent' => fake()->randomElement(['Europe', 'Asia', 'Africa','America']),
            'latitude' => fake()->latitude,
            'longitude' => fake()->longitude
        ];
    }
}
