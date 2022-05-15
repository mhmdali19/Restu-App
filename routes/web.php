<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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
///Route::get('/feedback', 'App\Http\Controllers\pagecontroller@feedback');

Route::resource('feedback','App\Http\Controllers\feedbackController');
Route::post('/newfeedback', 'App\Http\Controllers\feedbackController@store');
Route::post('/newres', 'App\Http\Controllers\reservationController@store');

Route::get('/reservation', 'App\Http\Controllers\pagecontroller@reservation');

Route::resource('/product','App\Http\Controllers\ProductController');

// Route::resource('/product','App\Http\Controllers\ProductController');
Route::post('/newproduct', 'App\Http\Controllers\ProductController@store');
Route::get('delete/{id}','App\Http\Controllers\ProductController@destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

///Route::get('/feedbackview', 'App\Http\Controllers\pagecontroller@feedbackview');

Route::resource('/feedbackview','App\Http\Controllers\adminfeedbackController');
Route::resource('/reservationview','App\Http\Controllers\adminreservationController');
// >>>>>>> 1ded83af8f8c19123d5c729e569b71dc8a3011e5
