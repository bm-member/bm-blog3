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

Route::get('admin/post', function() {
    return view('admin.post.index');
});