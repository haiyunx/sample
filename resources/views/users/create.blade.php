@extends('layouts.default')
@section('title', 'Sign up')

@section('content')
<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>Sign up</h5>
    </div>
    <div class="panel-body">
        @include('shared._errors')
      <form method="POST" action="{{ route('users.store') }}">
        {{ csrf_field() }}

          <div class="form-group">
            <label for="name">Name：</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
          </div>

          <div class="form-group">
            <label for="email">Email：</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
          </div>

          <div class="form-group">
            <label for="password">Password：</label>
            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
          </div>

          <div class="form-group">
            <label for="password_confirmation">Confirm password：</label>
            <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
          </div>

          <div class="checkbox">
            <label><input type="checkbox" name="remember">Remeber me?</label>
          </div>

          <button type="submit" class="btn btn-primary">Signup</button>
      </form>

      <hr>

      <p>Do not have an account？<a href="{{ ('signup') }}"> signup now！</a></p>

    </div>
  </div>
</div>
@stop
