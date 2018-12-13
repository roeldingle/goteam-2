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
                          <th>Job Level</th>
                          <th>Contact</th>
                          <th>Date Hired</th>
                          <th>Action</th>
                        </thead>
                        <tbody>

                          <!--loop Here-->
                          @if ($members)
                              @foreach($members as $index=>$member)
                                <tr onclick="window.href({{route('members.show', [$member->id])}})">
                                  <a href="{{ route('members.show', [$member->id]) }}">
                                  <td>{{ $index+1 }}</td>
                                  <td>
                                    <a href="{{ route('members.show', [$member->id]) }}">
                                      <img class="rounded-circle" src="{{ isset($member->metas->avatar) ? $member->metas->avatar : 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6qnTs8gH_y3q8L0OwPALkfS756cIrKGh-5NZiGv6qUuosrLrrWA' }}" width="50" height="50" />
                                    </a>
                                  </td>
                                  <td>
                                    <a href="{{ route('members.show', [$member->id]) }}">
                                    {{ $member->email }}
                                    </a>
                                  </td>
                                  <td>
                                    <a href="{{ route('members.show', [$member->id]) }}">
                                    {{ $member->metas->fname ?? '---'}} {{ isset($member->metas->mname) ? ucfirst(substr($member->metas->mname,0,1)).'.' : '---'}} {{ $member->metas->lname ?? '---'}}</td>
                                    </a>
                                  </td>
                                  <td>
                                    <a href="{{ route('members.show', [$member->id]) }}">
                                    {{ isset($member->metas->job_id) ? $member->job($member->metas->job_id)->name : '---' }}
                                    </a>
                                  </td>
                                  <td>{{ $member->metas->contact_number ?? '---'}}</td>
                                  <td>{{ $member->metas->date_hired ?? '---'}}</td>
                                  <td class="td-actions">
                                    <a href="{{ route('members.edit', [$member->id]) }}">
                                      <button type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit">
                                        <i class="material-icons">edit</i>
                                      </button>
                                    </a>
                                    <form class="pull-right" action="{{ route('members.destroy', $member->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                      <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove">
                                        <i class="material-icons">close</i>
                                      </button>
                                    </form>
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
