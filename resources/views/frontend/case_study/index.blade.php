@extends('frontend.layouts.app')
@section('content')
  <div class="jumbotron  text-white bg-dark" style="background-image: url(img/case.jpg); background-size: cover;">
    <div class="col-md-6 px-0">
      <h2 class="display">Blogs</h2>
      <p class=" my-3">Know us from what we have to say.
        </p>
    </div>
  </div>
  
  <div class="container">
    
    <div class="row mb-2">

      <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <h5 class="mb-0">Message From Chairman</h5>
            <br>
            <p class="card-text mb-auto">The unending cross training among each of the experienced employees  </p>
            <a href="casedetails.html"><div class="btn btn-sm btn-primary">Read More</div></a>
          </div>
          <div class="col-auto d-none d-lg-block">
        <img src="img/chairman.jpg" alt="" width="200" style="min-height:200px;" class="img-fluid">          
      </div>
      </div>
      </div>

      <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <h5 class="mb-0">Projects We Have Completed</h5>
            <br>
            <p class="card-text mb-auto">We have completed huge amount of projects.We are very
              dedicated towards our work our only priority is your satisfaction </p>
            <a href="casedetails.html"><div class="btn btn-sm btn-primary">Read More</div></a>
          </div>
          <div class="col-auto d-none d-lg-block">
        <!--  <img src="img/ftth.jpg" alt="" width="200" style="min-height:200px;" class="img-fluid">  -->       
      </div>
      </div>
      </div>

      </div>

      <div class="row mb-2">

        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h5 class="mb-0">FTTH Installation</h5>
              <br>
              <p class="card-text mb-auto">We are the leading company in FTTH Installation in nepal.We have been
                working on this field from a long time </p>
                <br>
              <a href="casedetails.html"><div class="btn btn-sm btn-primary">Read More</div></a>
            </div>
            <div class="col-auto d-none d-lg-block">
          <!--  <img src="img/ftth.jpg" alt="" width="200" style="min-height:200px;" class="img-fluid">  -->          
        </div>
        </div>
        </div>
  
        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h5 class="mb-0">Cable TV Services</h5>
              <br>
              <p class="card-text mb-auto">Cable TV service is yet another important service we provide. </p>
              <a href="casedetails.html"><div class="btn btn-sm btn-primary">Read More</div></a>
            </div>
            <div class="col-auto d-none d-lg-block">
          <img src="img/cabletv.jpg" alt="" width="200" style="min-height:200px;" class="img-fluid">          
        </div>
        </div>
        </div>
  
        </div>

    </div>

@endsection