<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/please/{n}/{a}', function (string $name,int $age) {
    if($name){
        echo "<br>Welcome $name";
        if($age){
            if($age < 20){
                echo "<br>Sorry we cannot serve you drinks";  
            }else{
                echo "<br>We have nice collection of drinks.";
            }
        }
    }else{
        echo "<br>Welcome guest!";
    }
        
})->whereAlpha('n')->whereNumber('a');

// Route::view("/please/{n?}","test");