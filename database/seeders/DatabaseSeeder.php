<?php

namespace Database\Seeders;

use App\Models\Artwork;
use App\Models\Fanart;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(MusicSeeder::class);
        Artwork::factory(100)->create();
        User::factory(1)->create();
        Fanart::factory(100)->create();
    }
}
