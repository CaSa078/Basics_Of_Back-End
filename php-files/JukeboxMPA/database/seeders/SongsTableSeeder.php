<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Song::create([
            'title' => 'Song Title 1',
            'artist' => 'Artist 1',
            'album' => 'Album 1',
            'release_year' => 2020
        ]);
        
    }
}
