<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', 'MainPageController');

Route::get('/sale/{type}', 'ThingsController@index');

//Route::get('/{type}/delete/{id}', 'ThingsController@delete');

Route::group(['namespace' => 'Admin'], function() {
    Route::get('/admin','AdminController@panel')->middleware('admin');

    Route::get('/admin/update','AdminController@update')->middleware('admin');
    Route::get('/admin/actionUpdate','AdminController@actionUpdate')->middleware('admin');



    Route::get('/admin/insert','AdminController@insert')->middleware('admin');
    Route::get('/admin/actionInsert','AdminController@actionInsert')->middleware('admin');
    Route::get('/admin/delete','AdminController@delete')->middleware('admin');
    Route::get('/admin/delete/{id}','AdminController@actionDelete')->middleware('admin');
    Route::get('/admin/update','AdminController@update')->middleware('admin');

});


Auth::routes();
Route::get('/home', 'HomeController@index');


