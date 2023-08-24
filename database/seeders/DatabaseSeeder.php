<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use App\Models\city;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Factory: Fake data 
        // student::factory()->count(20)->create();
        // city::factory()->count(20)->create();

        //Seeder: Production data
        $this->call([
            citySeeder::class,
            studentSeeder::class
        ]);
    }
}
