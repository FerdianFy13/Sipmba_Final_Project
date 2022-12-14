<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OfficerData>
 */
class OfficerDataFactory extends Factory
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
            'category_id' => fake()->numberBetween(1, 2),
            'slug' => fake()->slug(2),
            'pmi_id' => fake()->numerify('PMI-######'),
            'nik' => fake()->numberBetween(3326160108060009, 3926160108060009),
            'name' => fake()->name(),
            'born' => fake()->words(2, true),
            'date' => fake()->dateTimeBetween('-37 years', '-27 years'),
            'alamat' => fake()->words(3, true),
            'email' => fake()
                ->unique()
                ->freeEmail(),
            'telepon' => fake()->numberBetween(6281286616893, 6287286616893),
            'job' => fake()->randomElement([
                'Ketua',
                'Wakil Ketua',
                'Sekretaris',
                'Bendahara',
                'Anggota',
            ]),
            'image' => fake()->image(
                null,
                360,
                360,
                'Male Female',
                true,
                true,
                'human',
                true,
                'jpg'
            ),
        ];
    }
}
