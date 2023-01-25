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
    return view('home');
});

Route::get('/achat', function () {
    return view('achat');
});

Route::get('/presentation', function () {
    return view('presentation');
});

Route::get('/agences', function () {
    return view('agences');
});

Route::get('/location', function () {
    return view('location');
});

// Route::get('/', function () {
//     return view('home');
// });