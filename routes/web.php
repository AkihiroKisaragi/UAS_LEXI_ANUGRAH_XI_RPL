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

Route::get('/home','HomeController@index')->name('home');
Route::prefix('manage')->group(function(){
    Route::get('/inventory','Inventory@index')->name('inventory');
    Route::get('/items','Items@index')->name('items');
    Route::get('/users','Users@index')->name('users');
});

Route::prefix('add')->group(function(){
    Route::get('/inventory','inventory@Add')->name('add-inventory');
    Route::get('/items','items@Add')->name('add-items');
    Route::get('/users','users@Add')->name('add-users');
});

Route::prefix('/delete')->group(function(){
    Route::get('/items/{id}','items@remove');
    Route::get('/inventory/{id}','inventory@remove');
});

Route::prefix('/done')->group(function(){
    Route::prefix('edit')->group(function(){
        Route::get('/items','items@confirmedit');
        Route::get('/inventory','inventory@confirmedit');
    });
    Route::get('/items','items@confirm')->name('add-items');
    Route::get('/inventory','inventory@confirm')->name('add-inventory');
});

Route::prefix('/edit')->group(function(){
    Route::get('items/{item}/','items@edit');
    Route::get('inventory/{id}','inventory@edit');
});