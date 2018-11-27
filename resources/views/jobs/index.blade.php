@extends('layouts.app')

@section('page-title')
Jobs
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

          @if (Session::has('success'))
              <div class="alert alert-success" role="alert">
                  {!! Session::get('success') !!}
              </div>
          @endif

          <div class="card">
            <div class="card-header card-header-primary">
              <a href="{{ route('jobs.create') }}"  class="btn btn-sm btn-success pull-right">Create</a>
              <h4 class="card-title ">Jobs List</h4>
              <p class="card-category"> Here is a subtitle for this table</p>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class="text-primary">
                    <th>#</th>
                    <th>Abbr</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                  </thead>
                  <tbody>
                    <!--loop Here-->
                    @if ($jobs)
                        @foreach($jobs as $job)
                          <tr>
                            <td>{{ $job->id }}</td>
                            <td>{{ $job->shortname }}</td>
                            <td>{{ $job->name }}</td>
                            <td>{{ $job->description }}</td>
                            <td>
                              <button class="btn btn-sm btn-warning" type="button" name="edit">Edit</button>
                              <button class="btn btn-sm btn-danger" type="button" name="delete">Delete</button>
                            </td>
                          </tr>
                        @endforeach
                    @endif


                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
    </div>
</div>
@endsection
