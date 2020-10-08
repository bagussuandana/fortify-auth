@extends('layouts.auth', ['title'=> 'Forgot Password'])
@section('content')
    <div class="card">
        <div class="card-header"><h3>Forgot Password</h3></div>
        <div class="card-body">
            @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{session('status')}}
            </div>
            @endif
            <form action="/forgot-password" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required>
                @error('email')
                    <span class="invalid-feedback">{{$message}}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-block btn-primary">Reset</button>
            </form>
        </div>
    </div>
@endsection