@extends('layouts.publicapp')
@section('title')
Login | {{Config::get('app.name')}}
@endsection

@section('content')
<div class="page-header clear-filter">
  <div class="page-header-image" style="background-image: url('{{URL::to('/')}}/material-theme/img/sidebar-1.jpg');"></div>
  <div class="content-center">
    <div class="col-md-8 ml-auto mr-auto">

              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">lock_open</i>
                  </div>
                  <h2 class="card-title">Login</h2>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{ route('login') }}">
                      @csrf

                      <div class="form-group row">
                          <label for="email" class="col-sm-12 col-form-label text-md-center">{{ __('E-Mail Address') }}</label>

                          <div class="col-md-12">
                              <input style="margin:20px 0" id="email" type="email" class="text-md-center form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                              @if ($errors->has('email'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="password" class="col-md-12 col-form-label text-md-center">{{ __('Password') }}</label>

                          <div class="col-md-12">
                              <input style="margin:20px 0" id="password" type="password" class="text-md-center form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                              @if ($errors->has('password'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group row text-md-left">
                          <div class="col-md-12">

                              <div class="form-check">
                                <label class="form-check-label">

                                      {{ __('Remember Me') }}
                                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-12">

                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                  {{ __('Forgot Your Password?') }}
                              </a>

                              <button type="submit" class="btn btn-primary">
                                  {{ __('Login') }}
                              </button>

                          </div>
                      </div>
                  </form>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>

      </div>
    </div>
  </div>
@endsection
