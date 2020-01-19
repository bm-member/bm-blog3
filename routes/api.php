<?php

use App\Post;
use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('post', function() {
    $posts = Post::orderBy('id', 'desc')->get();
    return response()->json(compact('posts'));
});

Route::post('post', function(Request $request) {
    Post::create([
        'title' => $request->title,
        'content' => $request->content,
        'user_id' => 1,
    ]);
    return response()->json([
        'message' => 'A post was created successfully.'
    ], 201);
});

Route::get('post/{id}', function($id){
    $post = Post::find($id);

    return $post ?? response([ 'message' => 'No post' ], 404);

    // if($post) {
    //     return $post;
    // }

    // return response()->json([
    //     'message' => 'No post'
    // ], 404);
    
});

Route::put('post/{id}', function($id) {
    $post = Post::find($id);

    if($post) {
       $post->update(request()->all());
       return $post;
    }

    return response([ 'message' => 'No post' ], 404);

});

Route::delete('post/{id}', function($id) {
    $post = Post::find($id);

    if($post) {
        $post->delete();
        return response([ 'message' => 'Deleted Success.' ]);
    }

    return response([ 'message' => 'No post' ], 404);

});

Route::get('admin/post', 'API\PostController@index')->middleware('auth:api');
Route::post('admin/post', 'API\PostController@store');
Route::get('admin/post/{id}', 'API\PostController@show');
Route::put('admin/post/{id}', 'API\PostController@update');
Route::delete('admin/post/{id}', 'API\PostController@destroy');

// Route::apiResource('admin/post', 'API\PostController');

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::get('admin/post', 'API\PostController@index');
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});
