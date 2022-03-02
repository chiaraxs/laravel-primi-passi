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


Route::get('/about-me', function () {
    $data = [
        'name' => 'Chiara',
        'surname' => 'Cardinale',
        'mail' => 'chiara@gmail.it',
        'address' => 'via Lamponi, 4',
        'front_end' => 'Bootstrap',
        'back_end' => 'Laravel',
    ];
    return view("home.aboutme", $data);
});

// http://127.0.0.1:8000/about-me


Route::get('/curiosity', function () {
    $data = [
        'my_secret_loves' => [
            'Books',
            'Puzzles',
            'Rubik\'s cube',
            'Sudoku',
            'Tv series about serial killers'
        ]
    ];
    return view("home.curiosity", $data);
});

// http: //127.0.0.1:8000/curiosity

Route::get('/my-home', function () {
    $data = [
        'welcome' => 'welcome',
    ];
    return view("home.myhome", $data);
});

// http://127.0.0.1:8000/my-home