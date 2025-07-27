<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' =>fake()->jobTitle(),
            'salary' => rand(3000, 10000),
            'location' => fake()->randomElement(['remote', 'hybrid', 'on-site']),
            'schedule' => fake()->randomElement(['Full Time', 'Part Time']),
            'url' => fake()->imageUrl(),
            'featured' => fake()->boolean()
        ];
    }
}
