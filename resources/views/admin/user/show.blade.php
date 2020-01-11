@extends('admin.layouts.master')

@section('title', 'Profile')

@section('content')
 
<style>
.profile {
    width: 100px;
    height: 100%;
    border-radius: 50%;
    border: 1px solid #333;
    padding: 5px;
}
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <div class="card">
                <div class="card-body">
                    <p>
                        @if (auth()->user()->image)
                        <img src="{{ asset('upload/profile/' . auth()->user()->image) }}" class="profile">
                        @else
                        <img src="{{ asset('image/profile/user.png') }}" class="profile">
                        @endif
                    </p>
                    <p>Name: {{ auth()->user()->name }} </p>
                    <p>Email: {{ auth()->user()->email }} </p>
                    <p>Email: {{ ucfirst(auth()->user()->role) }} </p>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ url('admin/profile/edit') }}" class="btn btn-success">Edit</a>
                </div>
           </div>
        </div>
    </div>
</div>

@endsection