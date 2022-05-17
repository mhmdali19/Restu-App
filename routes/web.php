<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
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

// Home Index
Route::resource('/', 'App\Http\Controllers\indexcontroller');

// About
Route::resource('/about', 'App\Http\Controllers\aboutcontroller');

// Menu
Route::resource('/menu', 'App\Http\Controllers\MenuController');

// Reservation
Route::resource('/reservation', 'App\Http\Controllers\reservationcontroller');
Route::post('/newres', 'App\Http\Controllers\reservationController@store');

// Feedback
Route::resource('feedback', 'App\Http\Controllers\feedbackController');
Route::post('/newfeedback', 'App\Http\Controllers\feedbackController@store');
//
//
//
//
//
//
//
//
//
//
//
//
//
// Admin  ///////////////////////
//////////
// Admin Feedback

Auth::routes(['register' => false]);

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register')->middleware('isAdmin');

Route::group(['middleware' => ['isAdmin']], function () {
    Route::post('register', [RegisterController::class, 'register']);
    Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('adminHome', 'App\Http\Controllers\HomeController@adminView')->name('admin.view');

    Route::resource('/feedbackview', 'App\Http\Controllers\adminfeedbackController');

// Admin Reservation
    Route::resource('/reservationview', 'App\Http\Controllers\adminreservationController');

// Admin Product
    Route::resource('/product', 'App\Http\Controllers\ProductController');
    Route::post('/newproduct', 'App\Http\Controllers\ProductController@store');
    Route::get('deletep/{id}', 'App\Http\Controllers\ProductController@destroy');

//Admin offers
    Route::resource('/offers', 'App\Http\Controllers\offersController');
    Route::post('/newoffer', 'App\Http\Controllers\offersController@store');
    Route::get('delete1/{id}', 'App\Http\Controllers\offersController@destroy');

//Admin events
    Route::resource('/events', 'App\Http\Controllers\eventsController');
    Route::post('/newevent', 'App\Http\Controllers\eventsController@store');
    Route::get('delete/{id}', 'App\Http\Controllers\eventsController@destroy');
});


// Route::group(['middleware' => ['forAdmins']], function () {



// }
