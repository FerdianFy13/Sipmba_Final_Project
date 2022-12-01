<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\KuizionerController;
use App\Http\Controllers\Backend\NewsController;
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
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Register Route
Route::get('/daftar', [RegisterController::class, 'index'])->middleware(
    'guest'
);
Route::post('/daftar', [RegisterController::class, 'register']);

// @Backend
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(
    'auth'
);
Route::get('/berita/checkSlug', [
    NewsController::class,
    'checkSlug',
])->middleware('auth');

Route::resource('/berita', NewsController::class)->middleware('auth');
Route::get('/kuisioner', [KuizionerController::class, 'index'])->middleware(
    'auth'
);
