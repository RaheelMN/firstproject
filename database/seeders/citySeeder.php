<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\city;
use Illuminate\Support\Facades\File;

class citySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        //Production data
        // $json = File::get(path:'database/json/cities.json');
        // $records = collect(json_decode($json,true));

        //each method is part of collect
        // $records->each(function($record){
        //     city::create([
        //         'ct_name'=>$record['ct_name']
        //     ]);
        // });

        //Development data using faker
        for($i=1;$i<10;$i++){
            city::create([
                'ct_name'=>fake()->city(),
            ]);
        }

    }
}
