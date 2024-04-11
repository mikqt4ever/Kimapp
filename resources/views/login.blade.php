@extends('layout')
@section('title', 'Login')
@section('content')
<div class="container">
    <form action="{{route('login.post')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="gmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="gmail" name="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">Remember me</label>
        </div>
        <div class="mb-3 form-check">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>
@endsection