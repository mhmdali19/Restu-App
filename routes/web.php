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

Route::get('/', 'App\Http\Controllers\pagecontroller@index');
Route::get('/about', 'App\Http\Controllers\pagecontroller@about');
Route::get('/menu', 'App\Http\Controllers\pagecontroller@menu');
Route::get('/feedback', 'App\Http\Controllers\pagecontroller@feedback');
Route::get('/reservation', 'App\Http\Controllers\pagecontroller@reservation');
