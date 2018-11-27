@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- <div class="card">
                <div class="card-header">
                  Job Levels
                  <a href="{{ url('/admin/jobs/create') }}" class="btn btn-primary pull-right">New</a>
                </div> -->

                <!-- <div class="card-body"> -->

                    <h2>
                      Create Job Levels
                      <a href="{{ route('jobs.index') }}" style="float:right" class="btn btn-outline-warning">Back</a>
                    </h2>
                    <div class="col-md-8">
                      <form action="{{ route('jobs.store') }}" method="post">
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" name="name" class="form-control  {{ $errors->has('name') ? 'is-invalid' : ''}}">
                          <span class="help-block text-danger">
                            @if( $errors->has('name') )
                              {{ $errors->first('name') }}
                            @endif
                          </span>
                        </div>
                        <div class="form-group">
                          <label for="name">Shortname</label>
                          <input type="text" name="shortname" class="form-control  {{ $errors->has('shortname') ? 'is-invalid' : '' }}">
                          <span class="help-block text-danger">
                            @if( $errors->has('shortname') )
                              {{ $errors->first('shortname') }}
                            @endif
                          </span>
                        </div>
                        <div class="form-group">
                          <label for="name">Description</label>
                          <textarea name="description" class="form-control  {{ $errors->has('description') ? 'is-invalid' : '' }}"></textarea>
                          <span class="help-block text-danger">
                            @if( $errors->has('description') )
                              {{ $errors->first('description') }}
                            @endif
                          </span>
                        </div>
                        <div class="form-group">
                          <button type="submit" name="button" name="submit" class="btn btn-outline-success">Submit</button>
                        </div>
                        @csrf
                      </form>
                    </div>
                <!-- </div>
            </div> -->
        </div>
    </div>
</div>
@endsection
