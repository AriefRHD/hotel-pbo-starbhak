<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FHController;
use App\Http\Controllers\FKController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\ResepsionisController;

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

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/proses_login', [LoginController::class,'proses_login'])->name('proses_login');
Route::group(['middleware' => ['auth']],function(){
    Route::group(['middleware' => ['Cek_Login:admin']], function(){
        Route::get('admin',[TamuController::class,'tampil_dashboard'])->name('admin');
    });
    Route::group(['middleware' => ['Cek_Login:tamu']], function(){
        Route::get('tamu',[PemesananController::class,'index'])->name('tamu');
    });
    Route::group(['middleware' => ['Cek_Login:resepsionis']], function(){
        Route::get('resepsionis',[ResepsionisController::class,'index'])->name('resepsionis');
    });

Route::resource('kamar',KamarController::class);
Route::resource('fhotel',FHController::class);
Route::resource('pemesanan',PemesananController::class);
Route::resource('resepsionis',ResepsionisController::class);
Route::get('/tampil-kamar', [TamuController::class,'tampil_kamar'])->name('tampil_kamar');
Route::get('/tampil-fasilitas', [TamuController::class,'tampil_fasilitas'])->name('tampil_fasilitas');
});
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

// Route::get('/tampil-dashboard', [TamuController::class,'tampil_dashboard'])->name('tampil_dashboard');

