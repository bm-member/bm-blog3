@extends('admin.layouts.master')

@section('title', 'Create Post')
    
@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @include('alerts')
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <h3 class="card-header">Create Post</h3>
                <div class="card-body">
                    <form action="{{ url('admin/post') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Post Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Post Content</label>
                          <textarea name="content" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="{{ url('admin/post') }}" class="btn btn-secondary">Back</a>
                        {{-- <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection