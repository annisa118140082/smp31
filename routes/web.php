<?php

use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
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
    return view('beranda');
});
Route::get('/fasilitas', function () {
    return view('profilsekolah.fasilitas');
});
Route::get('/logo', function () {
    return view('profilsekolah.logo');
});
Route::get('/mars', function () {
    return view('profilsekolah.mars');
});
Route::get('/sambutan', function () {
    return view('profilsekolah.sambutan');
});
Route::get('/sejarah', function () {
    return view('profilsekolah.sejarah');
});
Route::get('/struktur', function () {
    return view('profilsekolah.struktur');
});
Route::get('/tatib', function () {
    return view('profilsekolah.tatib');
});
Route::get('/visimisi', function () {
    return view('profilsekolah.visimisi');
});
Route::get('/admin',  function () {
    return view('');
});

Route::get('admin/login',       [LoginController::class, 'showLoginForm']);
Route::post('admin/login',      [LoginController::class, 'login'])->name('login');

Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::post('logout',       [LoginController::class, 'logout'])->name('logout');

    Route::get('dashboard',         [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('berita',       BeritaController::class);
});
