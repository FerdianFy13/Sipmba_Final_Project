<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BloodStok>
 */
class BloodStokFactory extends Factory
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
            'blood_group_id' => fake()->numberBetween(1, 8),
            'blood_component_id' => fake()->numberBetween(1, 7),
            'sum' => fake()->numberBetween(50, 150),
        ];
    }
}
