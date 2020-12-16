@extends('frontend.layouts.app')
@section('content')

<div class="jumbotron  text-white bg-dark" style="background-image: url(img/contactus.png); background-size: cover;">
    
  <h2 class="display">News And Events</h2>
  <p class=" my-3">Stay connected with us through the various events.
    </p>

</div>
      <br><br><br>
       <!--Details start Here-->
    <div class="row">
      <div class="col-lg-12"> <h4 style="text-align: center;">{{$news[0]->title}}</h4></div>
      <hr>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="mb-1 text-muted" style="text-align: center;">{{$news[0]->created_at->diffForHumans()}}</div>
    </div>
  </div>
  <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
          <div class="card" >
              <img src="{{asset('storage/uploads/images/news')}}/{{$news[0]->image}}" class="card-img-top img-fluid" alt="{{$news[0]->title}} ">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">{{$news[0]->title}}</h5>
                <hr>
                <p>{!! $news[0]->description !!}
                   </p>
              </div>
            </div>
      </div>
      <div class="col-lg-2"></div>
  </div>



@endsection