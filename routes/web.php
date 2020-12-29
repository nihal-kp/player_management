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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','App\Http\Controllers\PlayerController@index');
Route::get('/add', function () {    return view('add');    });
Route::post('/add','App\Http\Controllers\PlayerController@add');
Route::get('/edit/{id}','App\Http\Controllers\PlayerController@edit');
Route::put('/update/{id}','App\Http\Controllers\PlayerController@update');
Route::get('/delete/{id}','App\Http\Controllers\PlayerController@destroy');
Route::get('/search','App\Http\Controllers\PlayerController@search');
Route::get('/ascending','App\Http\Controllers\PlayerController@ascending');
Route::get('/descending','App\Http\Controllers\PlayerController@descending');