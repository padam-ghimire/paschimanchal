@extends('frontend.layouts.app')
@section('content')
<div class="jumbotron  text-white bg-dark" style="background-image: url(img/contactus.png); background-size: cover;">
    
  <h2 class="display">News And Events</h2>
  <p class=" my-3">Know us from what we have to say.
    </p>

</div>

<div class="container">

  <div class="row">
    @foreach($newses as $news) 
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
         
          <h5 class="mb-0">{{$news->title}}</h5>
          <div class="mb-1 text-muted">{{$news->created_at->diffForHumans()}}
        </div>
        
          <p class="card-text mb-auto">{!! Illuminate\Support\Str::limit($news->description, 50) !!} </p>
          <br>
          <a href="{{route('new_events.show',[$news->id])}}"><div class="btn btn-sm btn-primary">Read More</div></a>
        </div>
        <div class="col-auto d-none d-lg-block">
       <img src="{{asset('storage/uploads/images/news')}}/{{$news->image}}" alt="" width="200" style="min-height:200px;" class="img-fluid">         
    </div>
    
      </div>
    </div><!--col ends-->
    @endforeach

  </div><!--row ends-->
      </div>
    
  <br><br>
@endsection