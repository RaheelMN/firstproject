<?php

use Illuminate\Support\Facades\Redirect;
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

//if URI is  /public/hidden/aboutus then open about page in view folder
//In html page in href we can use {{route('about')}} instead of URI
//If we make changes to URI then we will not make changes to href as it is pointing to route(about)
// Route::get('/aboutus', function () {
//     return view('about');
// })->name('about');

//In URI parameters/variables are represented by curly braces. 
//We can pass these parameters to anonymous functions and apply typehint
//We can restrict parameter values using functions at end of route using where methods
//If there are more than one parameter then we can use method chaining when calling where methods
//whereApha variable can have alphabets
//whereNumber variable can have numbers
//whereAphaNumber variable can have number and alphabets
//whereIn variable can have one of the values in array
//where variable should match regex expression 
// Route::get('/please/{n}/{a}', function (string $name,int $age) {
//     if($name){
//         echo "<br>Welcome $name";
//         if($age){
//             if($age < 20){
//                 echo "<br>Sorry we cannot serve you drinks";  
//             }else{
//                 echo "<br>We have nice collection of drinks.";
//             }
//         }
//     }else{
//         echo "<br>Welcome guest!";
//     }
        
// })->whereAlpha('n')->whereNumber('a');


//if URI is /please/{n?} then open test page in view folder
//where n? means variable can exist or not
// Route::view("/please/{n?}","test");

//If page name in URI has been changed then redirect host request to new URI
//Status code tell search engine that change is permanent and update its cache
//Where as 301 means redirect is temporary
// Route::redirect('/redirect','/testing',301);


//If folder in URI has multiple subfolders then we can use group route
//where instead of writing folder name for each uri we use prefex one and write
//subfolders within it
// Route::prefix('page')->group(function(){
//     Route::get('/about',function(){
//         return view('about');
//     });
//     Route::get('/testing',function(){
//         return view('test');
//     });
// });


//if uri has slash then open welcome page in view folder
Route::get('/', function () {
    return view('welcome');
});

//If URI is /AboutUs then open about page in view folder
Route::get('/AboutUs',function(){
    return view('about');
});

//If URI is /Testing then open test page in view folder
Route::get('/Testing',function(){
    return view('test');
});

Route::get('/blade_template',function(){
    return view('blade');
});

Route::get('/rough',function(){
    return view('rough');
});
