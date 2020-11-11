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

    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Kathmandu</strong>
          <h5 class="mb-0">Telecommunication Advancement</h5>
          <div class="mb-1 text-muted">Jan 12</div>
          <p class="card-text mb-auto">The unending cross training among each of the experienced employees  </p>
          <a href="newsdetails.html"><div class="btn btn-sm btn-primary">Read More</div></a>
        </div>
        <div class="col-auto d-none d-lg-block">
      <img src="img/about1.jpg" alt="" width="200" style="min-height:200px;" class="img-fluid">          
    </div>
    </div>
    </div>

    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Pokhara</strong>
          <h5 class="mb-0">We Are Coming To Your Town</h5>
          <div class="mb-1 text-muted">Feb 1</div>
          <p class="card-text mb-auto">We sooner are planning to come to your town stay updated with us.We will
          be posting about our upcoming events to keep you notified </p>
          <br>
          <a href="newsdetails.html"><div class="btn btn-sm btn-primary">Read More</div></a>
        </div>
        <div class="col-auto d-none d-lg-block">
      <!--  <img src="img/isplogo.png" alt="" width="200" style="min-height:200px;" class="img-fluid">   -->       
    </div>
    </div>
    </div>
    
      </div>

      <div class="row mb-2">

        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary">Hetauda</strong>
              <h5 class="mb-0">Upgrade With Us</h5>
              <div class="mb-1 text-muted">Apr 17</div>
              <p class="card-text mb-auto">Upgrade your fiber connection with us join with us for improvements in fber optics
              .We provide the best fiber connection services in nepal and we have a very dedicated team.</p>
              <br>
              <a href="newsdetails.html"><div class="btn btn-sm btn-primary">Read More</div></a>
            </div>
            <div class="col-auto d-none d-lg-block">
         <!--  <img src="img/isplogo.png" alt="" width="200" style="min-height:200px;" class="img-fluid">   -->        
        </div>
        </div>
        </div>
    
        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary">Kathmandu</strong>
              <h5 class="mb-0">Fast Growing Fiber Services</h5>
              <div class="mb-1 text-muted">Sep 8</div>
              <p class="card-text mb-auto">Fast growing telecom services is the key to   </p>
              <a href="newsdetails.html"><div class="btn btn-sm btn-primary">Read More</div></a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="img/isplogo.png" alt="" width="200" style="min-height:200px;" class="img-fluid">          
        </div>
        </div>
        </div>
        
          </div>

    </div>



    <div class="container gallery">
      <br>
      <h3 style="color:#34495E;text-align: center;">Gallery </h3>
        <hr>
        <br>
  
      <div class="row">
        <div class="col-sm-4">
            <div class="item"><img src="img/gallery1.jpg" class="img-fluid"></div>
        </div>
        <div class="col-sm-4">
          <div class="item"><img src="img/gallery2.jpg" class="img-fluid"></div>
        </div>
        <div class="col-sm-4">
          <div class="item"><img src="img/gallery3.jpg" class="img-fluid"></div>
        </div>
      </div>
  
      <div class="row">
        <div class="col-sm-4">
            <div class="item"><img src="img/gallery4.jpg" class="img-fluid"></div>
        </div>
        <div class="col-sm-4">
          <div class="item"><img src="img/gallery5.jpg" class="img-fluid"></div>
        </div>
        <div class="col-sm-4">
          <div class="item"><img src="img/gallery6.jpg" class="img-fluid"></div>
        </div>
      </div>
  </div>
  </div>
  <br><br>
@endsection