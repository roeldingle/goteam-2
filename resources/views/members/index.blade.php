@extends('layouts.app')


@section('page-title')
The Team
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

              <div class="card">
                <div class="card-header card-header-primary">
                  <a href="{{ route('members.create') }}"  class="btn btn-success pull-right">Create</a>
                  <h4 class="card-title ">Members List</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary">
                          <th>#</th>
                          <th>Email</th>
                          <th>Name</th>
                          <th>Contact</th>
                          <th>Action</th>
                        </thead>
                        <tbody>
                          <!--loop Here-->
                          @if ($members)
                              @foreach($members as $index=>$member)
                                <tr>
                                  <td>{{ $index+1 }}</td>
                                  <td>{{ $member->email }}</td>
                                  <td>{{ $member->name }}</td>
                                  <td>{{ $member->contact_number }}</td>
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

            <!-- <div class="card">
                <div class="card-header">
                  member Levels
                  <a href="{{ url('/admin/members/create') }}" class="btn btn-primary pull-right">New</a>
                </div> -->

                <!-- <div class="card-body"> -->

                <!-- </div>
            </div> -->
        </div>
    </div>
</div>
@endsection
