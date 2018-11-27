@extends('layouts.publicapp')

@section('title')
Register | {{Config::get('app.name')}}
@endsection

@section('content')
<div class="page-header clear-filter">
  <div class="page-header-image" style="background-image: url('{{URL::to('/')}}/material-theme/img/sidebar-1.jpg');"></div>
  <div class="content-center">
    <div class="col-md-8 ml-auto mr-auto">
      <div class="card card-stats">

              <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">how_to_reg</i>
                </div>
                <h2 class="card-title">Register</h2>
              </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-sm-12 col-form-label text-md-center">{{ __('Name') }}</label>

                            <div class="col-md-12">
                                <input id="name" style="margin:20px 0" type="text" class="text-md-center col-sm-12 form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-12 col-form-label text-md-center">{{ __('E-Mail Address') }}</label>

                            <div class="col-sm-12">
                                <input id="email" style="margin:20px 0" type="email" class="text-md-center col-sm-12 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-12 col-form-label text-md-center">{{ __('Password') }}</label>

                            <div class="col-sm-12">
                                <input id="password" style="margin:20px 0" type="password" class="text-md-center col-sm-12 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-sm-12 col-form-label text-md-center">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" style="margin:20px 0" type="password" class="text-md-center col-sm-12 form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <hr />

                        <div class="form-group row">
                            <label for="date-hired" class="col-sm-12 col-form-label text-md-center">{{ __('Date Hired') }}</label>

                            <div class="col-md-12">
                                <input id="date-hired" type="date" style="margin:20px 0" class="text-md-center col-md-12 form-control" name="date_hired" required>
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="job-level" class="col-md-4 col-form-label text-md-right">{{ __('Job Level') }}</label>

                            <div class="col-md-6">
                                <input id="job-level" type="text" class="form-control" name="job_level" required>
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label for="contact-number" class="col-sm-12 col-form-label text-md-center">{{ __('Contact Number') }}</label>

                            <div class="col-md-12">
                                <input id="contact-number" style="margin:20px 0" type="text" class="col-sm-12 text-md-center form-control" name="contact_number" required>
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
