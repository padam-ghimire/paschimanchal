@extends('frontend.layouts.app')
@section('content')


<div class="jumbotron  text-white bg-dark" style="background-image: url(img/contactus.png); background-size: cover;">
    
  <h2 class="display">Case Study</h2>
  <p class=" my-3">Case Study On Different Evolving Technologies.
    </p>

</div>
      <br><br><br>
       <!--Details start Here-->
    <div class="row">
      <div class="col-lg-12"> <h4 style="text-align: center;">{{$case->title}}</h4></div>
      <hr>
  </div>
  <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
          <div class="card" >
              <img src="{{asset('storage/uploads/images/case_study')}}/{{$case->image}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title" style="text-align: center;">{{$case->title}}</h5>
                <hr>
                <p>{!! $case->description !!}
                    </p>
              </div>
            </div>
      </div>
      <div class="col-lg-2"></div>
  </div>
   <!--Details start Here-->
<br><br>
    

  @endsection