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


Route::get('/','App\Http\Controllers\ClientController@home');
Route::get('/loogin','App\Http\Controllers\ClientController@loogin');
Route::get('/signup','App\Http\Controllers\ClientController@signup');
Route::post('/creer_compte','App\Http\Controllers\ClientController@creer_compte');
Route::post('/acceder_compte','App\Http\Controllers\ClientController@acceder_compte');
Route::get('/logout','App\Http\Controllers\ClientController@logout');

Route::get('/admin','App\Http\Controllers\AdminController@dashboard');
Route::get('/commandes','App\Http\Controllers\AdminController@commandes');

Route::get('/ajoutercategorie','App\Http\Controllers\CategoryController@ajoutercategorie');
Route::post('/sauvercategorie','App\Http\Controllers\CategoryController@sauvercategorie');
Route::get('/categories','App\Http\Controllers\CategoryController@categories');
//une route dynamique//
Route::get('/edit_categorie/{id}','App\Http\Controllers\CategoryController@edit_categorie');
Route::post('/modifiercategorie','App\Http\Controllers\CategoryController@modifiercategorie');
Route::get('/deletecategorie/{id}','App\Http\Controllers\CategoryController@deletecategorie');

Route::get('/products','App\Http\Controllers\PoductController@products');
Route::get('/ajouterproduit','App\Http\Controllers\PoductController@ajouterproduit');
Route::post('/sauverproduit','App\Http\Controllers\PoductController@sauverproduit');
Route::get('/editproduit/{id}','App\Http\Controllers\PoductController@editproduit');
Route::post('/modifierproduit','App\Http\Controllers\PoductController@modifierproduit');
Route::get('/deleteproduit/{id}','App\Http\Controllers\PoductController@deleteproduit');
Route::get('/desactiver_produit/{id}','App\Http\Controllers\PoductController@desactiver_produit');
Route::get('/activer_produit/{id}','App\Http\Controllers\PoductController@activer_produit');


// Route::get('/', function () {
//     return view('home');
// });
