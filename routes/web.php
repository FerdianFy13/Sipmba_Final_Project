<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
});

// @auth
// login Route
Route::get('/masuk', [LoginController::class, 'index'])->middleware('guest');
Route::post('/masuk', [LoginController::class, 'login']);
Route::post('/masuk/logout', [LoginController::class, 'logout']);

// Register Route
Route::get('/daftar', [RegisterController::class, 'index'])->middleware(
    'guest'
);
Route::post('/daftar', [RegisterController::class, 'register']);
