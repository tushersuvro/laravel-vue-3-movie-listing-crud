<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Genre::factory(10)->create()->each( function($cl) {
            $cl->movies()->saveMany(
                \App\Models\Movie::factory(rand(1,5))->make()
            );
        });
    }
}
