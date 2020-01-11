<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use App\User;


class PostController extends Controller
{
    public function index()
    {
        if(request()->q) {
            $posts = Post::orderBy('id', 'desc')
                ->where('title', 'like', '%' . request()->q . '%')
                ->paginate(6);
        } else {
            // $posts = Post::all();
            $posts = Post::orderBy('id', 'desc')->paginate(6);
        }
        
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(PostRequest $request)
    {

        // $request->validate([
        //     'title' => 'required|min:3',
        //     'content' => 'required'
        // ],[
        //    'title.required' => 'ခေါင်းစဥ်ထည့်ရန်လိုအပ်သည်။'
        // ]);

        // $post = new Post();
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->user_id = auth()->id();
        // $post->save();

        // Post::create([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'user_id' => auth()->id(),
        // ]);

        $input = $request->all();
        $input['user_id'] = auth()->id();

        Post::create($input);
        
        return redirect('admin/post')->with('status', 'Post Created.');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.post.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.post.edit', compact('post'));
    }

    public function update(PostRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect('admin/post')->with('status','Post Updated.');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('admin/post')->with('status','Post Deleted.');
    }
}
