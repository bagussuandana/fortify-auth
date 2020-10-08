@extends('layouts.auth', ['title'=> 'Reset'])
@section('content')
    <div class="card">
        <div class="card-header"><h3>Reset</h3></div>
        <div class="card-body">
            <form action="/reset-password" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{request()->route('token')}}">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required>
                @error('email')
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

            <div class="form-group">
                <label for="password_confirmation">Password Confirmation</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
            </div>

            <button type="submit" class="btn btn-block btn-primary">Reset Password</button>

            </form>
        </div>
    </div>
@endsection