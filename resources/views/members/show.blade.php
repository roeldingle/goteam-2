@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img style="width:120px;height:120px" class="img" src="{{$member->metas->avatar ?? ''}}">
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">{{ $member->job($member->metas->job_id)->name }}</h6>
                  <h4 class="card-title">{{ $member->metas->fname ?? '---'}} {{ isset($member->metas->mname) ? ucfirst(substr($member->metas->mname,0,1)).'.' : '---'}} {{ $member->metas->lname ?? '---'}}</h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                  </p>
                  <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div>

        </div>
    </div>
</div>
@endsection
