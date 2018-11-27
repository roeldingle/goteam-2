@extends('layouts.publicapp')
@section('title')
Home | {{Config::get('app.name')}}
@endsection

@section('content')
<div class="page-header clear-filter">
  <div class="page-header-image" style="background-image: url('{{URL::to('/')}}/material-theme/img/sidebar-1.jpg');"></div>
  <div class="content-center">
    <div class="col-md-8 ml-auto mr-auto">
        <h1>Hello World!!</h1>
      </div>
    </div>
  </div>
@endsection
