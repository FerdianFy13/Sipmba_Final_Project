<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
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
            'name' => $this->faker->numerify('pmi-######'),
            'place' => $this->faker->word(),
            'date' => $this->faker->date('Y_m_d'),
            'time' => $this->faker->time(),
        ];
    }
}
