<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author_name' => $this->faker->name,
            'author_position' => $this->faker->jobTitle,
            'author_company' => $this->faker->company,
            'content' => $this->faker->paragraphs(asText: true), // Generates a single string containing multiple paragraphs
            'status' => $this->faker->boolean(80) // 80% chance of being true
        ];
    }
}
