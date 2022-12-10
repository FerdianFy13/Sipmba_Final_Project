<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RedirectController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Backend\BlooddonorinputController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\FeedbackController;
use App\Http\Controllers\Backend\KuizionerController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\OfficerdataController;
use App\Http\Controllers\Backend\QuizoneController;
use App\Http\Controllers\Backend\QuiztwoController;
use App\Http\Controllers\Frontend\ArticleController;
use App\Http\Controllers\Frontend\BlooddonorController;
use App\Http\Controllers\Frontend\ConfirmationController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\FormregisController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\KuisoneController;
use App\Http\Controllers\Frontend\KuiztwoController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\QueueController;
use App\Http\Controllers\Frontend\QuizioneroneController;
use App\Http\Controllers\Frontend\RegistrationformController;
use App\Models\BloodDonorInput;
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

    // event
    Route::resource('/event', EventController::class);

    // data donor
    Route::resource('/data-pendonor', BlooddonorinputController::class);

    // kuizioner one
    Route::resource('/one-kuisioner', QuizoneController::class);

    // kuizioner two
    Route::resource('/two-kuisioner', QuiztwoController::class);

    // feedback
    Route::resource('/feedback', FeedbackController::class);
});

// @frontend
Route::group(['middleware' => ['auth', 'checkrole:2']], function () {
    // registration formulir
    // Route::get('form-pendaftaran/kuisioner-1', [
    //     RegistrationformController::class,
    //     'index',
    // ]);
    // form registration
    Route::get('/form-pendaftaran', [FormregisController::class, 'index']);
    Route::post('/form-pendaftaran', [FormregisController::class, 'form']);

    // kuizioner one
    Route::get('/kuisioner1', [KuisoneController::class, 'index']);
    Route::post('/kuisioner1', [KuisoneController::class, 'create']);

    // kuizioner two
    Route::get('/kuisioner2', [KuiztwoController::class, 'index']);
    Route::post('/kuisioner2', [KuiztwoController::class, 'create']);

    // confirmation
    Route::get('/konfirmasi', [ConfirmationController::class, 'index']);
    Route::post('/konfirmasi', [ConfirmationController::class, 'create']);

    // queue
    Route::get('/antrian', [QueueController::class, 'index']);
    Route::post('/antrian', [QueueController::class, 'create']);

    // Route::get('/kuiz', [QuizioneroneController::class, 'index']);
    // Route::resource('form-pendaftaran', RegistrationformController::class);
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
    Route::post('/kontak', [ContactController::class, 'create']);
});
