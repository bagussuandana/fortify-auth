@extends('layouts.base')

@section('body')
<div class="row justify-content-center vh-100 align-items-center">
    <div class="col-md-5">
        <div class="text-center mb-3">
            <x-logo/>
        </div>
        @yield('content')
    </div>
</div>
@endsection