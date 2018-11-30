@extends('layouts.publicapp')

@section('title')
Register | {{Config::get('app.name')}}
@endsection

@section('content')
<div class="page-header clear-filter">
  <div class="page-header-image" style="background-image: url('{{URL::to('/')}}/material-theme/img/sidebar-1.jpg');"></div>
  <div class="content-center">

    <div class="col-md-8 ml-auto mr-auto">
      <div class="card card-stats" style="text-align:left">
        <div class="card-header card-header-info">
          <div class="card-icon">
            <i class="material-icons">how_to_reg</i>
          </div>
          <h3 class="card-title">Register</h3>
          <p class="card-category text-md-right">Create your account</p>
        </div>

                <div class="card-body">
                    <form autocomplete="off" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="text-md-left col-sm-12 col-form-label bmd-label-floating">{{ __('E-Mail Address') }}</label>

                            <div class="col-sm-12">
                                <input id="email" style="margin:20px 0" type="email" class="col-sm-12 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="text-md-left col-sm-12 col-form-label bmd-label-floating">{{ __('Password') }}</label>

                            <div class="col-sm-12">
                                <input id="password" style="margin:20px 0" type="password" class="col-sm-12 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="text-md-left col-sm-12 col-form-label bmd-label-floating">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" style="margin:20px 0" type="password" class="text-md-left col-sm-12 form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
