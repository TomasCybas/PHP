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


// Admin panel routes

Route::middleware('can:accessAdmin')->group(function(){
    //Course routes
    Route::get('admin/courses', 'CourseController@index')->name('courses');
    Route::get('admin/courses/create', 'CourseController@create')->name('courses.create');
    Route::post('admin/courses/store', 'CourseController@store')->name('courses.store');
    Route::get('admin/courses/edit/{course}', 'CourseController@edit')->name('courses.edit');
    Route::post('admin/courses/update/{course}', 'CourseController@update')->name('courses.update');
    Route::get('admin/courses/delete/{course}', 'CourseController@delete')->name('courses.delete');

    //Group routes
    Route::get('admin/groups/create', 'GroupController@create')->name('groups.create');
    Route::post('admin/groups/store', 'GroupController@store')->name('groups.store');
    Route::get('admin/groups/edit/{group}', 'GroupController@edit')->name('groups.edit');
    Route::post('admin/groups/store/{group}', 'GroupController@update')->name('groups.update');
});


//Student routes
Route::middleware('auth')->group(function(){
    Route::get('groups', 'GroupController@index')->name('groups');
    Route::get('groups/show/{group}', 'GroupController@show')->name('groups.show');
});



