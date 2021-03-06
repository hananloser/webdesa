<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', 'LandingController@index');

Auth::routes();
// Disable Register Page
Route::match(['get', 'post'], '/register', function () {
    return redirect('/login');
});

// Route For Admin

Route::group([ 'middleware' => ['auth'] ,'prefix' => 'admin'], function (Router $router) {
    $router->get('/home', 'HomeController@index')->name('home');
    $router->get('/layanan', 'LayananController@index')->name('layanan');
    $router->get('/layanan/create', 'LayananController@create')->name('layanan.create');
    $router->get('/layanan/{edit}/edit', 'LayananController@edit')->name('layanan.edit');
    $router->get('/layanan/{edit}/show', 'LayananController@show')->name('layanan.show');
    $router->post('/layanan/{edit}/show', 'SyratController@store')->name('syrat.store');
    $router->put('/layanan/{edit}', 'LayananController@update')->name('layanan.update');
    $router->delete('/layanan/{edit}', 'LayananController@destroy')->name('layanan.delete');
    $router->post('/layanan', 'LayananController@store')->name('layanan.store');
    // Berikut Na Pake Resouserce Saja
    $router->resource('pengaduan', 'PengaduanController');
    $router->resource('kelembagaan', 'KelembagaanController');
    $router->resource('bumdes', 'BumdesController');
});

// Route For Landing Page
Route::group(['prefix' => 'landing'], function (Router $router) {
    $router->get('/landing/layanan' , 'LandingController@layanan')->name('landing.layanan');
    $router->get('/landing/aparat' , 'LandingController@aparat')->name('landing.aparat');
    $router->get('/landing/pengaduan' , 'LandingController@pengaduan')->name('landing.pengaduan');
});


// Route::fallback(function(){
//    return redirect('/');
// });
