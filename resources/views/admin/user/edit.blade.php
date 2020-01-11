@extends('admin.layouts.master')

@section('title', 'Edit Profile')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Edit Profile
                </div>
                <div class="card-body">
                    <form 
                    action="{{ url('admin/profile/edit') }}" 
                    method="POST"
                    enctype="multipart/form-data"
                    >
                        @csrf
                        <div class="form-group">
                            <label>Username</label>
                            <input 
                                type="text" 
                                name="name" 
                                class="form-control" 
                                value="{{ auth()->user()->name }}"
                            >
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" 
                            value="{{ auth()->user()->email }}">
                        </div>
                        <div class="form-group">
                            <label>Profile Image</label>
                            <input type="file" name="image" class="form-control-file" 
                            >
                        </div>
                        <button class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection