<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Production data
        // $json = File::get(path:'database/json/students.json');
        // $records = collect(json_decode($json,true));

        // //each method is part of collect
        // $records->each(function($record){
        //     student::create([
        //         'name'=>$record['name'],
        //         'email'=>$record['email'],
        //         'age'=>$record['age'],
        //         'city'=>$record['city'],
        //     ]);
        // }); 
        
        
        //Development data using faker in factory
        student::factory(20)->create();
     
    }
}
