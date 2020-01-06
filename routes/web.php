<?php

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

include 'test.php';

Route::get('admin', function() {
    return view('admin.layouts.master');
});

Route::group(['prefix'=>'admin', 'namespace' => 'Admin'], function() {
    Route::get('post', 'PostController@index');
    Route::get('post/create', 'PostController@create');
    Route::post('post', 'PostController@store');
    Route::get('post/{id}/delete', 'PostController@destroy');
    Route::get('post/{id}/edit', 'PostController@edit');
    Route::post('post/{id}/edit', 'PostController@update');
});


