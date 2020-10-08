@extends('layouts.app', ['title'=> 'Verify'])
@section('content')
    <div class="card">
        <div class="card-header"><h3>Email Verification</h3></div>
        <div class="card-body">
            @if(session('status'))
            <div class="alert alert-success" role="alert">
                Email allready sent.
            </div>
            @endif
            To access this page, you must verified your email. If not, click this button. 
            <form action="/email/verification-notification" method="POST" class="mt-4">
            @csrf
            <button type="submit" class="btn btn-primary">Resend</button>
            </form>
        </div>
    </div>
@endsection