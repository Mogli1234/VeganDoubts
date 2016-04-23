@extends('layouts.app')

@section('content')
<div class="reg">
  <div class="container register">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Login
            <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label class="col-md-4 control-label">E-Mail Address</label>
                  <div class="col-md-6">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                    <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label class="col-md-4 control-label">Password</label>
                  <div class="col-md-6">
                    <input type="password" class="form-control" name="password">
                    @if ($errors->has('password'))
                    <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                    <div class="checkbox">
                      <div class="switch">
                        <label class="rem">Remember me</label>
                        <label class="rem_on_off">
                          Off
                          <input type="checkbox" name="remember">
                          <span class="lever"></span>
                          On
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                      <i class="fa fa-btn fa-sign-in"></i>Login
                    </button>
                    <a class="btn btn-link" href="{{ url('/register') }}">Register</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
