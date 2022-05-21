<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AmsController;
use App\Http\Controllers\HospitalDetailsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [MyController::class,'home']);

// Route::get('/hospitalregistration', [MyController::class,'hospitalregistration']);

Route::get('/terms&conditions', [MyController::class,'terms']);

Route::resource('hospital_details', 'App\Http\Controllers\HospitalDetailsController');

Route::resource('book_hospital', 'App\Http\Controllers\UserController');

Route::resource('Ambu','App\Http\Controllers\AmsController');

Route::get('/search', 'App\Http\Controllers\HospitalDetailsController@search')->name('search');

Route::post('/fetch', 'App\Http\Controllers\UserController@fetch')->name('fetch');

Route::post('/doctor_details/{email}', 'App\Http\Controllers\UserController@doctor_details');

Route::post('/fetch1', 'App\Http\Controllers\AmsController@fetch')->name('fetch1');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin_dashboard', function () {
        return view('admin_dashboard');
    })->name('admin_dashboard');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/hospital_dashboard', function () {
        return view('hospital_dashboard');
    })->name('hospital_dashboard');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
