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
Route::group(['prefix' => 'post', 'middleware' => 'auth'], function () {
    Route::get('index', 'PostFormController@index')->name('post.index');
    Route::get('create', 'PostFormController@create')->name('post.create');
    Route::post('store', 'PostFormController@store')->name('post.store');
    Route::post('destroy/{id}', 'PostFormController@destroy')->name('post.destroy');
    Route::get('/post/like/{id}', 'PostFormController@like')->name('post.like');
    Route::get('/post/unlike/{id}', 'PostFormController@unlike')->name('post.unlike');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
