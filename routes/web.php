<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

include 'test.php';

Route::get('admin', function() {
    return view('admin.layouts.master');
});

Route::get('admin/post', 'Admin\PostController@index');
Route::get('admin/post/create', 'Admin\PostController@create');
Route::post('admin/post', 'Admin\PostController@store');
Route::get('admin/post/{id}/delete', 'Admin\PostController@destroy');
Route::get('admin/post/{id}/edit', 'Admin\PostController@edit');
Route::post('admin/post/{id}/edit', 'Admin\PostController@update');