@extends('admin.layouts.master')

@section('title', $post->title)
    
@section('content')
    
<div class="container">
    <div class="col-md-12">
        <a href="{{ url('admin/post') }}" class="btn btn-secondary mb-3">Back</a>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                {{ $post->title }}
            </div>
            <div class="card-body">
                {{ $post->content }}
            </div>
            <div class="card-footer">
                Post by <b>{{ $post->user->name }}</b> on <i>{{ $post->created_at->diffForHumans() }}</i>
            </div>
        </div>
    </div>
</div>

@endsection