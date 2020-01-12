<?php

namespace App\Http\Controllers\API;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return PostResource::collection($posts);
    }

    public function store(Request $request)
    {
        // $request->merge(['user_id' => 2]);
        // return Post::create($request->all());

        // Or

        $input = $request->all();
        $input['user_id'] = 1;
        return Post::create($input);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return new PostResource($post) ?? 'No Post';
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if($post) {
            $post->update($request->all());
        }
        return $post ?? 'No Post';
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        if($post) {
            $post->delete();
        }
        return $post ?? 'No Post';
    }
}
