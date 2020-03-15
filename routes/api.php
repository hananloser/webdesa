<?php

use Illuminate\Support\Facades\Route;
use App\Layanan;
use App\Pengaduan;
use App\Syrat;
use App\Kelembagaan ;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// ! Comment Ini jangan Di Hapus Soal nya Nanti mau Di pake Request APi middle Ware
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('layanan', 'API\LayananController')->only('index' , 'show');
Route::resource('aparat', 'API\AparatdesaController')->only('index' , 'show');
Route::resource('pengaduan', 'API\PengaduanController')->only('store');
