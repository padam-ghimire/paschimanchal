@extends('frontend.layouts.app')
@section('content')

<div class="jumbotron  text-white bg-dark" style="background-image: url(img/news.jpg); background-size: cover;">
    <div class="col-md-6 px-0">
      <h2 class="display">News And Events</h2>
      <p class=" my-3">Stay connected with us through the various events.
        </p>
    </div>
  </div>

<div class="container">

  <div class="row mb-2">
    @foreach($newses as $news) 
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
         
          <h5 class="mb-0">{{$news->title}}</h5>
          <div class="mb-1 text-muted">{{$news->created_at->diffForHumans()}}

             </div>
          <br>
          <a href="{{route('new_events.show',[$news->id])}}"><div class="btn btn-sm btn-primary">Read More</div></a>
        </div>
        <div class="col-auto d-none d-lg-block">
       <img src="{{asset('storage/uploads/images/news')}}/{{$news->image}}" alt="" width="200" style="min-height:200px;" class="img-fluid">         
    </div>
    @endforeach

  </div>
    
    </div>
      </div>
    </div>

    </div>
  </div>
  <br><br>
@endsection