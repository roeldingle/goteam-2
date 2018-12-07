@extends('layouts.app')


@section('page-title')
The Team
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
                  <a href="{{ route('members.create') }}"  class="btn btn-success pull-right">Create</a>
                  <h4 class="card-title ">Members List</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary">
                          <th>#</th>
                          <th></th>
                          <th>Email</th>
                          <th>Name</th>
                          <th>Contact</th>
                          <th>Date Hired</th>
                          <th>Action</th>
                        </thead>
                        <tbody>

                          <!--loop Here-->
                          @if ($members)
                              @foreach($members as $index=>$member)
                                <tr>
                                  <td>{{ $index+1 }}</td>
                                  <td>
                                    <img class="rounded-circle" src="{{ isset($member->metas->avatar) ? $member->metas->avatar : 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6qnTs8gH_y3q8L0OwPALkfS756cIrKGh-5NZiGv6qUuosrLrrWA' }}" width="50" height="50" />
                                  </td>
                                  <td>{{ $member->email }}</td>
                                  <td>{{ $member->metas->fname ?? '---'}} {{ isset($member->metas->mname) ? ucfirst(substr($member->metas->mname,0,1)).'.' : '---'}} {{ $member->metas->lname ?? '---'}}</td>
                                  <td>{{ $member->metas->contact_number ?? '---'}}</td>
                                  <td>{{ $member->metas->date_hired ?? '---'}}</td>
                                  <td class="td-actions">
                                    <button type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit">
                                      <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove">
                                      <i class="material-icons">close</i>
                                    </button>
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
