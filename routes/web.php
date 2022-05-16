<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisterController;


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

Route::resource('/', 'App\Http\Controllers\indexcontroller');
Route::get('/about', 'App\Http\Controllers\pagecontroller@about');
// Route::get('/menu', 'App\Http\Controllers\pagecontroller@menu');


Route::resource('feedback','App\Http\Controllers\feedbackController');

Route::post('/newfeedback', 'App\Http\Controllers\feedbackController@store');
Route::post('/newres', 'App\Http\Controllers\reservationController@store');

Route::get('/reservation', 'App\Http\Controllers\pagecontroller@reservation');




Route::post('/newproduct', 'App\Http\Controllers\ProductController@store');
Route::get('delete/{id}','App\Http\Controllers\ProductController@destroy');
//
//
//
//
// Admin
Route::resource('/feedbackview','App\Http\Controllers\adminfeedbackController');
Route::resource('/reservationview','App\Http\Controllers\adminreservationController');


// Menu
Route::resource('menu','App\Http\Controllers\MenuController');


// offers
Route::resource('/offers','App\Http\Controllers\offersController');
Route::post('/newoffer', 'App\Http\Controllers\offersController@store');
Route::get('delete/{id}','App\Http\Controllers\offersController@destroy');
// events
Route::resource('/events','App\Http\Controllers\eventsController');
Route::post('/newevent', 'App\Http\Controllers\eventsController@store');
Route::get('delete/{id}','App\Http\Controllers\eventsController@destroy');



Auth::routes(['register'=> false]);


    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register')->middleware('isAdmin');


Route::group(['middleware' => ['isAdmin']], function () {
    Route::post('register', [RegisterController::class, 'register']);
    Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('adminHome', 'App\Http\Controllers\HomeController@adminView')->name('admin.view');
    Route::resource('/product','App\Http\Controllers\ProductController');
});







