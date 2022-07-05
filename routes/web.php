<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AmsController;
use App\Http\Controllers\HospitalDetailsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AddFacilities;
use App\Http\Controllers\Doctor;


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

Route::get('/terms&conditions', [MyController::class,'terms']);

Route::resource('hospital_details', 'App\Http\Controllers\HospitalDetailsController');

Route::resource('book_hospital', 'App\Http\Controllers\UserController');

Route::resource('Ambu','App\Http\Controllers\AmsController');

Route::resource('Facilities','App\Http\Controllers\AddFacilities');

Route::get('/search', 'App\Http\Controllers\HospitalDetailsController@search')->name('search');

Route::post('/fetch', 'App\Http\Controllers\UserController@fetch')->name('fetch');

Route::post('/doctor_details/{email}', 'App\Http\Controllers\UserController@doctor_details');

Route::get('book_hospital/create/{email}', 'App\Http\Controllers\UserController@create')->name('create');

Route::get('book_hospital/{email}/{useremail}', 'App\Http\Controllers\UserController@store')->name('store');

Route::post('/fetch1', 'App\Http\Controllers\AmsController@fetch')->name('fetch1');

Route::resource('feedback', 'App\Http\Controllers\FeedbackController');

Route::get('Facilities/create/{email}', 'App\Http\Controllers\AddFacilities@create')->name('create');

Route::get('Facilities/{email}', 'App\Http\Controllers\AddFacilities@store')->name('store');

Route::get('/booking_members/{email}', 'App\Http\Controllers\HospitalDetailsController@fetch')->name('fetch');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
       return view('hospify.user.dashboard');
    })->name('dashboard');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin_dashboard', function () {
        return view('hospify.admin.admin_dashboard');
    })->name('admin_dashboard');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/hospital_dashboard', function () {
        return view('hospify.hospital.hospital_dashboard');
    })->name('hospital_dashboard');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin_dashboard',[AdminController::class,'show'])->name('show');

Route::get('/hospital_edit/{email}','App\Http\Controllers\HospitalDetailsController@edit')->name('hospital_edit');

Route::POST('/hospital_update',[HospitalDetailsController::class,'update']);

Route::resource('specialist','App\Http\Controllers\Doctor');

Route::get('specialist/{email}/{hname}','App\Http\Controllers\Doctor@create')->name('specialist');

Route::get('specialist/{email}/{hname}', 'App\Http\Controllers\Doctor@store')->name('store');

Route::get('/Doctor_view/{email}','App\Http\Controllers\Doctor@show')->name('Doctor_view');

Route::get('destroy_specialist/{id}', [App\Http\Controllers\Doctor::class,'destroy'])->name('destroy_specialist');

Route::get('/specialist_edit/{id}','App\Http\Controllers\Doctor@edit')->name('specialist_edit');

Route::post('specialist_update',[App\Http\Controllers\Doctor::class,'update']);

Route::resource('Admin','App\Http\Controllers\AdminController');

Route::get('show','App\Http\Controllers\AdminController@show');


