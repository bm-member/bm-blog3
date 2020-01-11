<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

include 'test.php';

Route::group([
    'prefix'=>'admin', 
    'namespace' => 'Admin', 
    'middleware' => ['authware', 'can:isAdminOrAuthor']
], function() {
    Route::get('/', function() {
        return view('admin.layouts.master');
    });

    // Post Routes
    Route::get('post', 'PostController@index');
    Route::get('post/create', 'PostController@create');
    Route::post('post', 'PostController@store');
    Route::get('post/{id}/delete', 'PostController@destroy');
    Route::get('post/{id}/edit', 'PostController@edit');
    Route::post('post/{id}/edit', 'PostController@update');
    Route::get('post/{id}', 'PostController@show');

    // Category Routes
    Route::view('category', 'admin.category.index')->middleware('can:isAdmin');

    // User Routes
    Route::get('profile', 'UserController@show');
    Route::get('profile/edit', 'UserController@edit');
    Route::post('profile/edit', 'UserController@update');
});



