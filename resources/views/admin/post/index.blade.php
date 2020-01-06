@extends('admin.layouts.master')

@section('title', 'All Posts')

@section('content')
<div class="container">

   @include('alerts')

    <div class="row my-4">
        <div class="col-md-6">
            <h3>All Posts</h3>
        </div>
        <div class="col-md-2 text-right">
            <a href="{{ url('admin/post/create') }}" class="btn btn-primary">
                <i class="fas fa-plus-circle"></i>
                Create
            </a>
        </div>
        <div class="col-md-4">
            <form action="{{ url('admin/post') }}" method="get">
                <div class="input-group input-group">
                    <input type="text" name="q" class="form-control float-right" 
                    placeholder="Search">
    
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    {{ $post->title }}
                </div>
                <div class="card-body">
                    {{ substr($post->content, 0, 100) }}
                </div>
                <div class="card-footer text-right">
                    <a href="{{ url("admin/post/$post->id") }}" class="btn btn-info">
                        <i class="fas fa-eye"></i>
                        View
                    </a>
                    <a href="{{ url("admin/post/$post->id/edit") }}" class="btn btn-success">
                        <i class="fas fa-edit"></i>
                        Edit
                    </a>
                    <a href="{{ url("admin/post/$post->id/delete") }}" class="btn btn-danger">
                        <i class="fas fa-trash-alt"></i>
                        Delete
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row justify-content-center">
        {{ $posts->links() }}
    </div>
</div>
@endsection
