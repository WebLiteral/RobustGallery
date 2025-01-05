<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FanartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'artist_name' => 'John Doe',
            'creation_year' => fake()->year,
            'slug' => fake()->unique()->numberBetween(10000000, 99999999) . '-john-doe'
        ];
    }
}
