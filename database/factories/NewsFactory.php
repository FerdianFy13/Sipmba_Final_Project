<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
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
            'title' => $this->faker->sentence(mt_rand(2, 8)),
            'author' => fake()->name(),
            'slug' => fake()->slug(1),
            'image' => fake()->image(
                null,
                360,
                360,
                'blood donor',
                true,
                true,
                'cats',
                true,
                'jpg'
            ),
            'body' =>
                '<p>' .
                implode('<p></p>', $this->faker->paragraphs(mt_rand(5, 10))) .
                '</p>',
        ];
    }
}
