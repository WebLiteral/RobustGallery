<?php

namespace Database\Seeders;

use App\Models\Music;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Music::factory()->create([
            'title' => 'Placeholder1',
            'description' => 'This is a placeholder song.',
            'album' => 'Baby Bird!',
            'lyrics' => 'Baby you\'re a haunted house',
            'slug' => 'placeholder1',
            'creation_date' => '2025-01-06'
        ]);
    
        Music::factory()->create([
            'title' => 'Placeholder2',
            'description' => 'Another placeholder song.',
            'album' => 'Sky Fire',
            'lyrics' => 'You light up the night sky',
            'slug' => 'placeholder2',
            'creation_date' => '2020-01-06'
        ]);
    }
}
