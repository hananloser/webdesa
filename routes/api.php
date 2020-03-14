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


Route::get('layanan', function () {
    $layanan = Layanan::with(['syrats'])->whereHas('syrats')->get();
    return $layanan;
});

Route::get('layanan/empty', function () {
    $layanan = Layanan::with(['syrats'])->whereDoesntHave('syrats')->get();
    return $layanan;
});

Route::get('syrat', function () {
    $syrat = Syrat::orderBy('created_at', 'DESC')
        ->with('layanan')
        ->get();
    return $syrat;
});

Route::get('pengaduan', function () {
    $pengaduan = Pengaduan::orderBy('created_at', 'DESC')->get();
    return $pengaduan ;

});

Route::get('kelembagaan/aparatdesa' , function () {
    $lembaga = Kelembagaan::where('kelembagaan' , 'like' , '%Aparat%')->get() ;
    return response()->json($lembaga, 200,[
        'Content-Type' => 'application/json'
    ]);

});

Route::get('kelembagaan/bpd' , function () {
    $lembaga = Kelembagaan::where('kelembagaan' , 'like' , '%bpd%')->get() ;
    return response()->json($lembaga, 200,[
        'Content-Type' => 'application/json'
    ]);
});
