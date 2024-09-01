<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence($nbWords = 3, $variableNbWords = true),
            'slug' => $this->faker->slug,
            'description' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'genre' => $this->faker->randomElement(['Drama', 'Comedy', 'Horror', 'Action', 'Thriller', 'Documentary']),
            'release_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'director' => $this->faker->name,
            'producer' => $this->faker->name,
            'cast' => $this->faker->name . ', ' . $this->faker->name . ', ' . $this->faker->name,
            'country' => $this->faker->country,
            'duration' => $this->faker->numberBetween(90, 180), // Duration in minutes
            'language' => $this->faker->randomElement(['English', 'Yoruba', 'Igbo']),
            'status' => $this->faker->randomElement(['In Production', 'Released', 'Archived']),
            'featured_in_site' => rand(0,1)
        ];
    }
}
