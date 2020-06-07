<?php

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
Route::get('/beton/{slug}', 'BetonController@beton')->name('beton');

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware' => ['auth']], function (){
    Route::get('/', 'DashboardController@dashboard')->name('admin.dashboard');
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);

    Route::resource('/beton', 'BetonController', ['as'=>'admin']);

    Route::resource('/article', 'ArticleController', ['as'=>'admin']);

});

Route::get('/', function () {
    return view('index');
});

Route::get('/beton', function () {
    return view('beton');
});
Route::get('/rastvor', function () {
    return view('rastvor');
});

Route::get('/trotuarnaya-plitka', function () {
    return view('trotuarnaya-plitka');
});

Route::get('/calc', function () {
    return view('calc');
});

Route::get('/dostavka', function () {
    return view('dostavka');
});

Route::get('/contacts', function () {
    return view('contacts');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
