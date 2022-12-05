<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RedirectController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\KuizionerController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\OfficerdataController;
use App\Http\Controllers\Frontend\ArticleController;
use App\Http\Controllers\Frontend\BlooddonorController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\RegistrationformController;
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

// @auth
Route::group(['middleware' => 'guest'], function () {
    // login Route
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/redirect', [RedirectController::class, 'cek']);
});

// Register Route
Route::group(['middleware' => 'guest'], function () {
    Route::get('/daftar', [RegisterController::class, 'index']);
    Route::post('/daftar', [RegisterController::class, 'register']);
});

// @Backend
Route::group(['middleware' => ['auth', 'checkrole:1']], function () {
    // dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // news
    Route::get('/berita/checkSlug', [NewsController::class, 'checkSlug']);

    // news
    Route::resource('/berita', NewsController::class);

    // kuizioner
    Route::resource('/kuisioner', KuizionerController::class);

    // officer data
    Route::resource('/data-petugas', OfficerdataController::class);
});

// @frontend
Route::group(['middleware' => ['auth', 'checkrole:2']], function () {
    // registration formulir
    Route::get('/home/form-pendaftaran', [
        RegistrationformController::class,
        'index',
    ]);
});

Route::group(['middleware' => 'guest'], function () {
    // home
    Route::get('/', [HomeController::class, 'index']);

    // article
    Route::get('/artikel', [ArticleController::class, 'index']);

    // blood donor
    Route::get('/procedure-syarat-donor', [
        BlooddonorController::class,
        'procedure',
    ]);
    Route::get('/informasi-stok-darah', [
        BlooddonorController::class,
        'information',
    ]);
    Route::get('/jadwal-mobilisasi-donor', [
        BlooddonorController::class,
        'schedule',
    ]);
    Route::get('/alur-permintaan-darah', [BlooddonorController::class, 'flow']);

    // profile
    Route::get('/profil', [ProfileController::class, 'index']);

    // contact
    Route::get('/kontak', [ContactController::class, 'index']);
});
