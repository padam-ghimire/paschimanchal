@extends('frontend.layouts.app')
@section('content')

  <div class="portfoliopage">
    <div class="jumbotron  text-white bg-dark" style="background-image: url(img/portfolio.jpg); background-size: cover;">
      <div class="col-md-6 px-0">
        <h2 class="display">Portfolio</h2>
        <p class=" my-3">We believe that fundamental honesty is the
          keystone of any successful business.
          </p>
      </div>
    </div>

  

  <div class="container">
    <!-- START THE FEATURETTES -->
      <div class="col-md-12">
        <h3 style="color:#34495E;text-align: center;">Our  <span style="color:darkcyan;">Clients</span></h3>
        <hr>
        <br><br>
      </div>
 </div>
 <!-- details card section starts from here -->
<section class="details-card">
  <div class="container">
      <div class="row">
          <div class="col-md-4">
              <div class="card-content">
                  <div class="card-img">
                      <img src="img/telecom.png" alt="">
                  </div>
                  <div class="card-desc">
                      <h6>TELECOM</h6>
                      <p>We have been working as a key partner for major TELECOM
                        vendors in mid-western and as far as far western region.</p>
                         
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card-content">
                  <div class="card-img">
                      <img src="img/isplogo.png" alt="">
                     
                  </div>
                  <div class="card-desc">
                      <h6>ISP & OTHERS</h6>
                      <p> we are helping ISP vendors to spread their clientbase. We are also providing CCTV installation to some clients.</p>
                           
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card-content">
                  <div class="card-img">
                      <img src="img/cabletv.png" alt="">
                     
                  </div>
                  <div class="card-desc">
                      <h6>CABLE TV</h6>
                      <p>Cable TV operators in mid and far-western region of Nepal
                        has expanded significantly where we have layed the cornerstone for growth and stability.</p>
                          
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- details card section ends here -->
     
  <section class="jumbotron text-center my-4 text-white bg-dark">
    <div class="container">
      <h3 class="jumbotron-heading">Building Relationship</h3>
      <p class="">
        We follow the basic principle to maintain a good
relationship with our customers and keep them
happy. 
      </p>
      <a href="contact.html"><div class="btn btn-sm btn-primary">Reach Out To Us</div></a>
</div>
</div>
  </section>

  <!--pricing-->
  <div class="container">
    <div class="card-deck mb-3 text-center">
    @foreach($whyWes as $whyWe)
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          <h5 class="my-0 font-weight-normal">{{$whyWe->title}}</h5>
        </div>
        <div class="card-body">
          <h5 class="card-title pricing-card-title">{{$whyWe->sub_title}}</h5>
          <ul class="list-unstyled mt-3 mb-4">
            <p> {{$whyWe->description}}</p>
           
          </ul>
          <a href="/contact"><button type="button" class="btn btn-sm btn-block btn-outline-primary">Join With Us</button></a>
        </div>
      </div>
    @endforeach
     
    </div>
  </div>
  <br><br>
  <!--pricing ends-->
  <section class="services pt-20 pb-50" id="services">
    <div class="container">
       <div class="row">
          <div class="col-xl-6 mx-auto text-center">
            <h3 style="color:#34495E;text-align: center;">Installation <span style="color:darkcyan;">Process</span></h3>
            <hr>
            <br><br>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-3 col-md-3">
             <!-- Single Service -->
             <div class="single-service">
              <i class="fa fa-eye" aria-hidden="true"></i>
                <h4>Site Visit </h4>
                <p>Planning and mark up the
                  point of access.
                   </p>
             </div>
          </div>
          <div class="col-lg-3 col-md-3">
             <!-- Single Service -->
             <div class="single-service">
                <i class="fa fa-briefcase" aria-hidden="true"></i>
                <h4>Technical Support</h4>
                <p>The analysis of the
                  requirement of technical
                  support and human
                  resource.</p>
             </div>
          </div>
          <div class="col-lg-3 col-md-3">
             <!-- Single Service -->
             <div class="single-service">
              <i class="fa fa-building" aria-hidden="true"></i>
                <h4>Office Setup</h4>
                <p>Temporary office will be set
                  up for easy field access.</p>
             </div>
          </div>
          <div class="col-lg-3 col-md-3">
            <!-- Single Service -->
            <div class="single-service">
              <i class="fa fa-users" aria-hidden="true"></i>
               <h4>Staff Management</h4>
               <p>All the required technical
                and non-technical human
                resource will be finalized.</p>
            </div>
         </div>
       </div>
       <div class="row">
        <div class="col-lg-3 col-md-3">
          <!-- Single Service -->
          <div class="single-service">
            <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
             <h4>Equipments</h4>
             <p>Stock in the required
              equipments or purchase if
              any as per the need.</p>
          </div>
       </div>
       <div class="col-lg-3 col-md-3">
        <!-- Single Service -->
        <div class="single-service">
          <i class="fa fa-bug" aria-hidden="true"></i>
           <h4>Report And Updates</h4>
           <p>In this phase we will submit
            client with thorough report
            and progress of the project. </p>
        </div>
     </div>
     <div class="col-lg-3 col-md-3">
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


 <div class="col-xl-6 mx-auto text-center">
  <h3 style="color:#34495E;text-align: center;">Completed And <span style="color:darkcyan;">Undergoing</span> Projects</h3>
  <hr>
</div>

<div class="section-block-grey">
  <div class="container">
    @foreach($projects as $project)
       
        <div class="row mt-60">
          <div class="col-md-4 col-sm-12 col-12">
              <div class="serv-section-2">
                  <div class="serv-section-2-icon"></div>
                  <div class="serv-section-desc">
                      <h6 style="color:darkcyan">{{$project->name}}</h6>
                        <div class="section-heading-line-left"></div>
                          <p> Client -{{$project->client->name}}</p>
                          <p>Area - {{$project->area}}
                            </p>
                          <p>Year -{{$project->year}}</p>
              </div>
            </div>
      </div>

      
    @endforeach



<div class="row mt-60">



  </div>
</div>
@endsection