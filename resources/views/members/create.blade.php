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
                  <h4 class="card-title">Create Member</h4>
                  <p class="card-category">add a team member</p>
                </div>
                <div class="card-body">
                  <form action="{{ route('members.store') }}" method="post">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input name="email" type="email" class="form-control">
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
                            <option value="1">Spec 1</option>
                            <option value="2">Spec 2</option>
                            <option value="3">Spec 3</option>
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
                          <input name="fname" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Middle Name</label>
                          <input name="mname" type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input name="lname" type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Contact Number</label>
                          <input name="contact_number" type="text" class="form-control">
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
                      <div class="col-md-8">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Home Address</label>
                          <textarea name="address" class="form-control" rows="3"></textarea>
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
