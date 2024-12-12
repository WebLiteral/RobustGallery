<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artwork>
 */
class ArtworkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $title = fake()->unique()->sentence(),
            'file_url' => 'https://picsum.photos/seed/'. strval(rand(1,1000)).'/300',
            'description' => fake()->unique()->sentence(),
            'creation_date' => fake()->date('Y-m-d'),
            'slug' => Str::slug($title)  

        ];
    }
}
