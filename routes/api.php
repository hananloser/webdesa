<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

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

Route::resource('mobile/layanan', 'API\LayananController')->only('index', 'show');
Route::resource('aparat', 'API\AparatdesaController')->only('index', 'show');
Route::resource('berita', 'API\BeritaContorller')->only('index');
Route::resource('pengaduan', 'API\PengaduanController');
Route::get('/getid' , 'API\TelegramController@getId')->name('bot.getId');
Route::get('/kirim' , 'API\TelegramController@kirim')->name('bot.kirim');




