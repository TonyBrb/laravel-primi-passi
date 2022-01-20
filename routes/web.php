<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'name' => 'Leonardo Di Caprio',
        'films' => [
            "Inception",
            "Shutter island",
            "Titanic",
            "The walf of wall street"
        ]
    ];
    return view('home', $data);
})->name('home');

Route::get('/contacts', function (){
    return view('contacts');
})->name('contacts');

Route::get('/about', function () {
    return view('about');
})->name('about');
