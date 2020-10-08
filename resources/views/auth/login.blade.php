@extends('layouts.auth', ['title'=> 'Login'])
@section('content')
    <div class="card">
        <div class="card-header"><h3>Login</h3></div>
        <div class="card-body">
            @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{session('status')}}
            </div>
            @endif
            <form action="/login" method="POST">
            @csrf
            {{-- <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required>
                @error('email')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div> --}}
            <div class="form-group">
                <label for="username">username</label>
                <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" required>
                @error('username')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required>
                @error('password')
                <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group d-flex justify-content-between">
                <div class="form-group-check">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember Me</label>
                </div>
                <div>
                    <a href="/forgot-password">Forgot Password</a>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-primary">Login</button>
            <div class="text-center mt-4">
                Don't have account <a href="/register">Register</a>
            </div>
            </form>
        </div>
    </div>
@endsection