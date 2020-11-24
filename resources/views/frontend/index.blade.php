@extends('frontend.layouts.app')

@section('content')
@include('frontend.layouts.slider')

<section class="text-center">
    <div class="container">
      <h3 style="color:#34495E;text-align: center;">{{$about[0]->title}}</span></h3>
        <hr>
        <br><br>
      <p class="">{{$about[0]->description}}</p>
      <p>
        <a href="about.html" class="btn btn-primary my-2">More About Us</a>
        <a href="contact.html" class="btn btn-secondary my-2">Reach Out To Us</a>
      </p>
    </div>
  </section>

  <section class="our-blog p-0 m-0 bg-silver">
    <section class="jumbotron text-center my-4">
        <div class="container">
          <a href="/service"><h3 class="jumbotron-heading" style="color:#34495E;">How We Work</h3></a>
          <p class="">Network hardware
            installation, optic fiber lease service, supply of spares and expansion equipment are the major
            services provided to the ISPs</p>
          <p>
          </p>
        </div>
      </section>
    <div class="container work-process  pb-5 pt-5">
        <div class="title mb-5 text-center">
    </div>
        <!-- ============ step 1 =========== -->
        <div class="row">
            <div class="col-md-5">
                <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">Step</p>
                                <h2 class="m-0 p-0">01</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>Designing</h5>
                            <p><small>Before we implement our plans we design the required workflow for the given project. </small></p>
                        </div>
                    </div>
                    <div class="process-line-l"></div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="process-point-right"></div>
            </div>
        </div>
        <!-- ============ step 2 =========== -->
        <div class="row">
            
            <div class="col-md-5">
                <div class="process-point-left"></div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="process-box process-right" data-aos="fade-left" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">Step</p>
                                <h2 class="m-0 p-0">02</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>Deployment</h5>
                            <p><small>After designing the workflow we deploy it targetiing the success of our project. </small></p>
                        </div>
                    </div>
                    <div class="process-line-r"></div>
                </div>
            </div>

        </div>
        <!-- ============ step 3 =========== -->
        <div class="row">
            <div class="col-md-5">
                <div class="process-box process-left" data-aos="fade-right" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">Step</p>
                                <h2 class="m-0 p-0">03</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>Testing</h5>
                            <p><small>Testing is the major component of our workflow we test our product before delivering it.</small></p>
                        </div>
                    </div>
                    <div class="process-line-l"></div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="process-point-right"></div>
            </div>
        </div>
        <!-- ============ step 4 =========== -->
        <div class="row">
            <div class="col-md-5">
                <div class="process-point-left"></div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <div class="process-box process-right" data-aos="fade-left" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="process-step">
                                <p class="m-0 p-0">Step</p>
                                <h2 class="m-0 p-0">04</h2>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <h5>Support</h5>
                            <p><small>After the completion of project we support the enhancement of the project.</small></p>
                        </div>
                    </div>
                    <div class="process-line-r"></div>
                </div>
            </div>
            
            
        </div>

    </div>
</section>
	<script>
  AOS.init();
</script>
<br><br>
  
<section class="jumbotron text-center my-4">
  <div class="container">
    <a href="/portfolio"><h3 class="jumbotron-heading" style="color:#34495E;">Why Paschimanchal?</h3></a>
    <p class="">Paschimanchal Solution Pvt. Ltd. was established to
      be responsive to the emerging new technologies in the
      communication industry by constantly monitoring new
      telecommunication products and services.  </p>
    <p>
    </p>
  </div>
</section>
<!--pricing-->
    <div class="container">
      <div class="card-deck mb-3 text-center">
      @foreach($whyWes as $whyWe)
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h5 class="">{{$whyWe->title}}</h5>
          </div>
          <div class="card-body">
            <h5 class="card-title pricing-card-title">{{$whyWe->sub_title}}</h5>
            <ul class="list-unstyled mt-3 mb-4">
                <p>{!! $whyWe->description !!}</p>
           
            </ul>
            <a href="/contact"><button type="button" class="btn btn-sm btn-block btn-outline-primary">Join With Us</button></a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <!--pricing ends-->



    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <a href="/service"><h3 class="jumbotron-heading " style="color:#34495E;">Our Services</h3></a>
          <p class="">Our company has been able to establish a good working relationship with major ISPs (Internet
            Service Providers) and has been providing them various kinds of support. </p>
          <p>
          </p>
        </div>
      </section>
    </main>
    <!--overlay-->
    <div class="album py-5 bg-light">
    <div class="container coverlay">
        <div class="row">
  @foreach($services as $service)
            <div class="col-md-4">
                <div class="content shadow-lg "> <a href="/service">
                        <div class="content-overlay"></div> <img class="content-image img-fluid" src="{{asset('/storage/uploads/images/services/'.$service->image)}}" style="height: 225px; width: 100%; display: block;">
                        <div class="content-details fadeIn-bottom">
                            <p class="content-text">
                            {!! $service->description !!}
                            </p>
                        </div>
                    </a></div>
                    <hr class="featurette-divider">
                <div class="overlay"><a href="/service/{{$service->id}}"><h6>{{$service->title}}</h6></a></div>
            </div>
            @endforeach
        </div>
    </div>
     <!--overlay-->
    </div>
</div>

<br><br>
<h3 style="color:#34495E;text-align: center;">Our <span style="color:darkcyan;">Clients</span></h3>
<hr>
<br><br>
<div class="container">
  <div class="owl-carousel owl-theme">

@foreach($clients as $client)
<div >
    <img src="{{asset('/storage/uploads/images/clients/'.$client->image)}}" alt="{{$client->name}}" style="height:100px;width:150px;" class="img-fluid">
  </div>
@endforeach
 
</div>
</div>
<br><br>
<br><br>

<div class="container">
  <div class="owl-carousel owl-theme port">

    <div>
        <div class="serv-section-2">
            <div class="serv-section-2-icon"></div>
            <div class="serv-section-desc">
              <a href="portfolio/portfolio1.html"> <h6 style="color:darkcyan">Installing and commissioning of Ncell ADSS
                Project</h6></a>
                  <div class="section-heading-line-left"></div>
                    <p> Client - Ncell Pvt. Ltd.</p>
                    <p>Area - Bharatpur, Tandi, Sauraha
                      and Hetauda</p>
                    <p>Year - October 2015</p>     
        </div>
      </div>
  </div>

@endsection