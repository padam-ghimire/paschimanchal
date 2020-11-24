@extends('frontend.layouts.app')
@section('content')
  <div class="jumbotron  text-white bg-dark" style="background-image: url(img/case.jpg); background-size: cover;">
    <div class="col-md-6 px-0">
      <h2 class="display">Case Study</h2>
      <p class=" my-3">Know us from what we have to say.
        </p>
    </div>
  </div>
  
  <div class="container">
    
    <div class="row mb-2">

    @foreach($cases as $case)
      <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <h5 class="mb-0">{{$case->title}}</h5>
            <br>
            <p class="card-text mb-auto"> {!! $case->description !!} </p>
            <a href="case_studies/{{$case->id}}"><div class="btn btn-sm btn-primary">Read More</div></a>
          </div>
          <div class="col-auto d-none d-lg-block">
        <img src="{{asset('storage/uploads/images/case_study')}}/{{$case->image}}" alt="" width="200" style="min-height:200px;" class="img-fluid">          
      </div>
      </div>
    @endforeach
      </div>
    



    </div>

@endsection