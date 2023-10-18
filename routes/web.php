<?php

use App\Models\Boat;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BoatController;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider and all of them will
  | be assigned to the "web" middleware group. Make something great!
  |
 */



//Views
Route::get('/', function () {
    $boats = Boat::all();
    return view('home/home', ['boats' => $boats]);
});
Route::get('/boats', function () {
    $boats = Boat::all();
    return view('boats/boats',['boats' => $boats]);
});
Route::get('/contact', function () {
    return view('contact/contact');
});



Route::get('/login', function () {
    return view('auth/login');
});
Route::post('/logUser', function() {
    return '<h3>Perfecto!</h3>';
});
Route::get('/register', function () {
    return view('auth/register');
});

Route::post('/regUser', [AuthController::class, 'register']);
Route::post('/logUser', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/createBoat', [BoatController::class, 'createBoat']);
Route::get('/details/{boat}',[BoatController::class,'showBoatDetails']);
