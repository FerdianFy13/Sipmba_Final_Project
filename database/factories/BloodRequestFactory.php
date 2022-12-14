<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BloodRequest>
 */
class BloodRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'hospital' => fake()->word(),
            'name_request' => fake()->name(),
            'name_officer' => fake()->name(),
            'call_officer' => fake()->numberBetween(
                6282399074249,
                6286399074249
            ),
            'date' => fake()->dateTimeBetween('+0 days', '+2 months'),
            'time' => fake()->time(),
            'sum' => fake()->numberBetween(50, 100),
            'blooda1' => fake()->numberBetween(20, 50),
            'blooda2' => fake()->numberBetween(20, 50),
            'bloodb1' => fake()->numberBetween(20, 50),
            'bloodb2' => fake()->numberBetween(20, 50),
            'bloodc1' => fake()->numberBetween(20, 50),
            'bloodc2' => fake()->numberBetween(20, 50),
            'bloodd1' => fake()->numberBetween(20, 50),
            'bloodd2' => fake()->numberBetween(20, 50),
        ];
    }
}
