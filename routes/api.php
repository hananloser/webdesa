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
Route::get('/telegram' , 'API\TelegramController@testApi');
Route::get('/kirim' , 'API\TelegramController@kirimPesan');
Route::get('/perintah' , 'API\TelegramController@perintah');
Route::post('974298419:AAHlN53GnBjj9pIbsfOX8a9_fSoaaEwC3AI/webhook' , 'API\TelegramController@webhook');


