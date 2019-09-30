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

Route::get('/home', 'HomeController@index')->name('home');



Route::resources([
    'shops' => 'ShopController',
    'shoppingItems' => 'ShoppingItemController',
]);

Route::get('/shops/{shop}', 'ShopController@destroy')->name('shops.delete');
Route::get('/archive', 'ShoppingItemController@archiveIndex')->name('archive');
Route::get('/shoppingItems/shop/{shop}', 'ShopController@list')->name('shoppingItems.shop');
Route::get('/shoppingItems/buy/{item}', 'ShoppingItemController@buy')->name('items.buy');
Route::get('/shoppingItems/delete/{item}', 'ShoppingItemController@delete')->name('items.delete');




