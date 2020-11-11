@extends('frontend.layouts.app')
@section('content')

 
<div class="jumbotron  text-white bg-dark" style="background-image: url(img/services.jpg); background-size: cover;">
    <div class="col-md-6 px-0">
      <h2 class="display">Services</h2>
      <p class=" my-3">We Provide The Best Of Services With Our Dedicated Team.
        </p>
    </div>
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
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/adds.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">ADDS Installation</h5>
            <p class="card-text">All-dielectric self-supporting (ADSS)
              cable is a type of optical fiber cable
              </p>
            <a href="servicesdetail1.html" class="btn btn-md btn-primary">Read More</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/opticalfiber.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Optical Fibers</h5>
            <p class="card-text">Optical fiber (or “fiber optic”) refers
              to the medium and the technology
              associated with the transmission of
              information
              </p>
              <a  href="servicesdetail2.html" class="btn btn-md btn-primary">Read More</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/adds.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">FTTH Installation</h5>
            <p class="card-text">Fiber to the home (FTTH) is the delivery
              of a communications signal over optical
              fiber
              </p>
              <a href="servicesdetail3.html" class="btn btn-md btn-primary">Read More</a>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <div class="row">
      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/adds.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">ISP Support</h5>
            <p class="card-text">Our company has been able to establish
              a good working relationship with major
              ISPs 
              </p>
              <a href="servicesdetail4.html" class="btn btn-md btn-primary">Read More</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/cabletv.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Cable TV Support</h5>
            <p class="card-text">Network hardware installation,
              optic fiber lease service, supply of spares
              and expansion equipment
              </p>
              <a  href="servicesdetail5.html" class="btn btn-md btn-primary">Read More</a>
          </div>
        </div>
      </div>
      </div>
  </div>
  <br><br>

@endsection