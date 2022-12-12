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
            'name' => $this->faker->words(2, true),
            'place' => $this->faker->words(3, true),
            'alamat' => $this->faker->words(4, true),
            'date' => $this->faker->dateTimeBetween('+0 days', '+2 months'),
            // 'date' => $this->faker->date('Y_m_d'),
            'time' => $this->faker->time(),
            'call' => $this->faker->numberBetween(6282330602071, 6285330602071),
            'qouta' => $this->faker->numberBetween(50, 150),
        ];
    }
}
