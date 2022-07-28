<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FHController;
use App\Http\Controllers\FKController;
use App\Http\Controllers\KamarController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('kamar',KamarController::class);
Route::resource('fhotel',FHController::class);
Route::resource('pemesanan',PemesananController::class);
Route::resource('resepsionis',ResepsionisController::class);
