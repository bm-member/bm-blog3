@extends('admin.layouts.master')

@section('title', 'All Posts')

@section('content')
<div class="container">

   @include('alerts')

    <div class="row my-4">
        <div class="col-md-6">
            <h3>All Posts</h3>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ url('admin/post/create') }}" class="btn btn-primary">
                <i class="fas fa-plus-circle"></i>
                Create
            </a>
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
                    {{ $post->content }}
                </div>
                <div class="card-footer text-right">
                    <a href="#" class="btn btn-info">
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
</div>
@endsection