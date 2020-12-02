@extends('frontend.layouts.app')
@section('content')

 
<div class="jumbotron  text-white bg-dark" style="background-image: url(img/contactus.png); background-size: cover;">
    
  <h2 class="display">Services</h2>
  <p class=" my-3">We Provide Leading Services In Communication.
    </p>

</div>

  <section class="services pt-50 pb-50" id="services">
    <div class="container">
        <h3 style="color:#34495E;text-align: center;">We Are <span style="color:darkcyan;">Good</span>  At</h3>
        <hr>
        <br><br>
     
       <div class="row">
          <div class="col-lg-4 col-md-6">
             <!-- Single Service -->
             <div class="single-service">
                <i class="fa fa-laptop"></i>
                <h4>Technical Support </h4>
                <p>The analysis of the requirement
                    of technical support and human
                    resource is done in this phase.
                   </p>
             </div>
          </div>
          <div class="col-lg-4 col-md-6">
             <!-- Single Service -->
             <div class="single-service">
                <i class="fa fa-briefcase" aria-hidden="true"></i>
                <h4>Assembling</h4>
                <p>The gathering and assembling of
                    the equipment is done according
                    to the requirements.</p>
             </div>
          </div>
          <div class="col-lg-4 col-md-6">
             <!-- Single Service -->
             <div class="single-service">
              <i class="fa fa-cubes" aria-hidden="true"></i>
                <h4>Implementation</h4>
                <p>Ground work, monitoring,
                    clamping, installation and testing
                    are implemented in this phase. </p>
             </div>
          </div>

       </div>
    </div>
 </section>


 <h3 style="color:#34495E;text-align: center;">Our<span style="color:darkcyan;">Services</span></h3>
        <hr>
        <br><br>
  <div class="container cards">
    
    <div class="row">
    @foreach($services as $service)
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="{{asset('storage/uploads/images/services/')}}/{{$service->image}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$service->title}}</h5>
            <p class="card-text">{{$service->short_description}}
              </p>
            <a href="{{route('service.show',[$service->id])}}" class="btn btn-md btn-primary">Read More</a>
          </div>
          
        </div>
        <br>
        <br>
      </div>
  

@endforeach
    

      
    </div>
    <br>
    <br>
   
  
  </div>


@endsection