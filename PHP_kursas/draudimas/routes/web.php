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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/owners', 'OwnerController@index')->name('owners');
Route::get('/owners/new', 'OwnerController@createOwner')->name('owners.new');
Route::post('/owners/store', 'OwnerController@storeOwner')->name('owners.store');
Route::get('owners/details/{id}', 'OwnerController@showOwner')->name('owners.details');


Route::get('/cars', 'CarController@index')->name('cars');
