<?php

use App\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\User ;
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


Route::get('layanan' , function (Request $request){

    $layanan = Layanan::paginate(4); 
    return $layanan ;

});