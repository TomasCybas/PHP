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
Route::get('owners/edit/{id}', 'OwnerController@editOwner')->name('owners.edit');
Route::post('owners.details/{id}', 'OwnerController@updateOwner')->name('owners.update');
Route::get('owners.delete/{id}', 'OwnerController@deleteOwner')->name('owners.delete');


Route::get('/cars', 'CarController@index')->name('cars');
Route::get('/cars/add/{owner_id}', 'CarController@addCar')->name('cars.add');
Route::post('/cars/store/{owner_id}', 'CarController@storeCar')->name('cars.store');
Route::get('/cars/edit/{id}', 'CarController@editCar')->name('cars.edit');
Route::post('/cars/update/{id}', 'CarController@updateCar')->name('cars.update');
Route::get('/cars/delete/{id}{owner_id}', 'CarController@deleteCar')->name('cars.delete');
