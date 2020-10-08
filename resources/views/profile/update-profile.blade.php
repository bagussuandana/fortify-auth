@extends('layouts.app', ['title' => 'Home'])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}
                </div>
                @endif
                <div class="card">
                    <div class="card-header">Update your profile</div>
                    <div class="card-body">
                        <form action="{{route('profile.edit')}}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" value="{{old('name') ?? Auth::user()->name}}" class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" value="{{old('email') ?? Auth::user()->email}}" class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    <span class="invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-block btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection