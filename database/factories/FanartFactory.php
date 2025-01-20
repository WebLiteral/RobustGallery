<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fanart>
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
        $artistName = fake()->unique()->name();
        $creationDate = fake()->date();
        $randomDigits = fake()->numberBetween(1000, 9999);
    
        return [
            'artist_name' => $artistName,
            'creation_date' => $creationDate,
            'slug' => $artistName . '_' . $creationDate . '_' . $randomDigits,
        ];
    }
    
}
