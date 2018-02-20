@extends('layouts.default')

@section('content')
<div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
        This is Helena's Test Website
    </p>
    <p>
        <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">Sign Up</a>
    </p>
</div>
@stop