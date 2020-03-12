<?php

use Illuminate\Routing\Router;
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
    return view('landing');
});
Auth::routes();
Route::group(['prefix' => 'admin'], function (Router $router) {
    $router->get('/home', 'HomeController@index')->name('home');
    $router->get('/layanan', 'LayananController@index')->name('layanan');
    $router->get('/layanan/create', 'LayananController@create')->name('layanan.create');
    $router->get('/layanan/{edit}/edit', 'LayananController@edit')->name('layanan.edit');
    $router->get('/layanan/{edit}/show', 'LayananController@show')->name('layanan.show');
    $router->put('/layanan/{edit}', 'LayananController@update')->name('layanan.update');
    $router->delete('/layanan/{edit}', 'LayananController@destroy')->name('layanan.delete');
    $router->post('/layanan', 'LayananController@store')->name('layanan.store');

    Route::group(['prefix' => 'syarat'], function (Router $router) {
        $router->get('/', 'SyratController@index')->name('syrat.index');
        $router->get('/create', 'SyratController@create')->name('syrat.create');
        $router->post('/create/{layanan_id}', 'SyratController@store')->name('syrat.store');
    });

});


Route::group(['prefix' => 'landing'], function (Router $router) {
    $router->get('/aparat' , 'LandingController@aparat')->name('landing.aparat');
});
