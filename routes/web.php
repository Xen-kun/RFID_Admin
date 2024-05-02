<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\Auth\LoginController;

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
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get ('/form', [NameController::class, 'form']);

Route::get('/names', [systemController::class, 'getNames']);

Route::get('/rooms/{id?}', [RoomController::class, 'rooms']);
Route::post('/room/saveForm', [RoomController::class, 'saveForm']);
Route::get('/rooms/form/{id?}/{college_id?}', [RoomController::class, 'roomsForm']);
// Route::get('/rooms/attendance/{id?}/{college_id?}', [RoomController::class, 'roomsForm']);
// Route::get('/names', [NameController::class, 'getNames']);

//ADDING COLLEGE
Route::post('/submitName',[CollegeController::class, 'formSubmit']);
// Route::get('/name-form', [NameController::class, 'form']);

Route::get('/attendance/{token}/{in_out}', [RoomController::class, 'attendance']);

Route::post('/delete-name',[RoomController::class, 'deleteName']);

// Route::get('/rooms', function () {
//     return view('layouts/rooms');
// });


