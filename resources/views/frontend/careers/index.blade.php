@extends('frontend.layouts.app')
@section('content')
<div class="jumbotron  text-white career " style="background-image: url(img/career.jpg); background-size: cover;">
    
    <h2 class="display">Career</h2>
    <p class=" my-3" >Build your career with us and be a part of us.
      </p>
 
</div>

  <div class="row">

 
@foreach($jobs as $job)
    <div class="col-lg-4 careercard">
    <div class="card text-center">
        <div class="card-body">
          <a href="{{route('job.show',[$job->id])}}"><h5 class="card-title" style="color:darkcyan;">{{$job->title}}</h5></a>
          <hr>

          <p class="card-text">{{$job->short_description}}</p>
          <a href="{{route('job.show',[$job->id])}}" class="btn btn-info">Details</a>
        </div>
      </div>
    </div>
@endforeach
  </div>
</div>



@endsection