@extends('auth.layouts.auth-master')

@section('content')


<div class="col-md-4 mx-auto">
<h3>Welcome to <span class="text-primary">BukaToko</span></h3>
<p class="text-secondary">Dont have any account? <a href="/register">Register</a></p>
<form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" placeholder="Username" name="username" id="username" class="form-control bg-light" value="{{ old('username') ?? '' }}">
        @error('username')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password" id="password" class="form-control bg-light">
        @error('password')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <a href="#" class="btn btn-link mb-3 p-0">Forgot password?</a>
    <button type="submit" class="btn btn-primary btn-block">Login</button>
    <hr>
    <div class="row">
        <div class="col-6 p-0 pl-3 pr-1">
            <a href="#" class="btn btn-block text-white" style="background-color: #D0211C"><i class="fa fa-google"></i> Google</a>
        </div>
        <div class="col-6 p-0 pr-3 pl-1">
            <a href="#" class="btn btn-block text-white" style="background-color: #0053c0;"><i class="fa fa-facebook"></i> Facebook</a>
        </div>
    </div>
</form>
</div>

@endsection
