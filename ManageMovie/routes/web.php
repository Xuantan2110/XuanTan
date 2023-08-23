<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FilmController;
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
    return view('Home.index');
});

Route::resources(
    [
        'country'=> CountryController::class
    ]
    );
Route::resources(
     [
         'category'=> CategoryController::class
     ]
     );
Route::resources(
    [
        'film'=> FilmController::class
    ]
    );