@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

          @if (count($errors) > 0)
              <div class="error">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Member</h4>
                  <p class="card-category">add a team member</p>
                </div>
                <div class="card-body">
                  <form action="{{ route('members.store') }}" method="post">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input name="email" type="email" class="form-control" value="{{ $member->email ?? '---' }}" >
                        </div>
                      </div>
                    </div>
                    <hr/>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label>Job Level</label>
                          <select style="color:#cacaca" class="form-control" name="job_id">
                            <option style="text-align:center;" value="">---Select---</option>
                            @foreach ($jobs as $job)
                              <option value="{{ $job->id }}" {{ $member->metas->job_id == $job->id ? 'selected' : '' }}>{{ $job->name }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label>Date Hired</label>
                          <input name="date_hired" type="date" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Fist Name</label>
                          <input name="fname" type="text" class="form-control" value="{{ $member->metas->fname ?? '---' }}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Middle Name</label>
                          <input name="mname" type="text" class="form-control" value="{{ $member->metas->mname ?? '---' }}">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input name="lname" type="text" class="form-control" value="{{ $member->metas->lname ?? '---' }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Contact Number</label>
                          <input name="contact_number" type="text" class="form-control" value="{{ $member->metas->contact_number ?? '---' }}">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label>Date Birth</label>
                          <input name="date birth" type="date" class="form-control">
                        </div>
                      </div>

                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Home Address</label>
                          <textarea name="address" class="form-control" rows="2">{{ $member->metas->address ?? '---' }}</textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Avatar URL</label>
                          <input name="avatar" type="text" class="form-control" value="{{ $member->metas->avatar ?? '---' }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label>Description</label>
                          <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Who you are? describe using 100 charters</label>
                            <textarea name="description" class="form-control" rows="4">{{ $member->metas->description ?? '---' }}</textarea>
                          </div>

                        </div>
                      </div>
                    </div>
                    <hr />
                    <button type="submit" class="btn btn-primary pull-right">Save</button>
                    <div class="clearfix"></div>
                    @csrf
                  </form>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
