<?php

use Illuminate\Support\Facades\Route;
use App\Layanan;
use App\Syrat;
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
