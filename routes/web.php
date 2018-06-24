<?php

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


Route::get('/', 'UserController@index')->name('home');
Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/post', 'PostController@index')->name('posts');
//contact
Route::get('/contact','ContactController@create')->name('contacts');
Route::post('/contact/store','ContactController@store')->name('insert');


Route::get('/users/{id}/edit/', 'UserController@dashboard')->name('profils');
Route::post('/users/{id}/update','UserController@update')->name('modif');


Route::group(['prefix' => 'admin' , 'middleware' =>'can:access-admin'], function () {
    Route::get('/rcon', 'RconController@index')->name('Rcon');
    Route::post('/rcon/cmd','RconController@index')->name('RconCmd');

});







Auth::routes();
Route::post('/logout', 'UserController@logout')->name('logout');

