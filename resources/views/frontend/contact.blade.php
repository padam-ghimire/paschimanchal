@extends('frontend.layouts.app')
@section('content')
  
<div class="jumbotron  text-white bg-dark" style="background-image: url(img/contactus.png); background-size: cover;">
    <div class="col-md-6 px-0">
      <h2 class="display">Contact Us Anytime</h2>
      <p class=" my-3">We are at your service 24/7.
        </p>
    </div>
  </div>


 <!--content ends-->
 

 <!--contact-->
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <h3 style="text-align: center;">Find Us <span style="color:darkcyan">Here</span></h3>
<hr>
      <br><br>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1798345.9818254344!2d82.82308121940493!3d28.31666087666844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995944f5626044b%3A0xc44f528365b29cc8!2sPaschimanchal%20Solution%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1599754536632!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="col-lg-1"></div>
    <div class="col-lg-5">
<form action="mailto:someone@example.com" method="post" enctype="text/plain">
<div class="form-horizontal" role="form">
  <div class="form-group tpadb">
    <label class="control-label" style="font-size: 15px; font-weight:10; font-family: 'Quicksand', sans-serif;">USERNAME</label>
      <div class="">
      <input type="text" class="form-control" name="uname" placeholder="Username" required="true">
      </div>
  </div>
  <div class="form-group tpadb">
    <label class="control-label" style="font-size: 15px; font-weight:10; font-family: 'Quicksand', sans-serif;">EMAIL</label>
      <div class="">
      <input type="password" class="form-control" name="pass" placeholder="Email" required="true">
      </div>
    </div>
    <div class="form-group tpadb">
    <label class="control-label" style="font-size: 15px; font-weight:10; font-family: 'Quicksand', sans-serif;">QUERIES</label>
      <div class="">
      <input type="password" class="form-control" name="pass" required="true" style="height:300px;">
      </div>
    </div>

  <div class="form-group tpad">
    <div class="">
    <input type="submit" class="btn btn-primary btn-md pull-right" value="SUBMIT" name="login"></a>
    </div>
  </div>

</div>
</form>
    </div>
  </div>
</div>
</Br></div>
<section class="jumbotron text-center my-4 ">
  <div class="container">
    <h3 class="jumbotron-heading">Contact Us</h3>
    <p class="">You can contact us by visiting directly to us also you can contact us by leaving us a message of appreciation</p>
    <p>
    </p>
  </div>
</section>

<hr class="featurette-divider my-4">
    <div class="container">
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background-color: rgb(240, 240, 240);">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Head Office</strong>
            <p class="card-text mb-auto">
                Gairaptan, Pokhara,Kaski, Nepal
                <br><br>
            </p>
            <strong class="d-inline-block mb-2 text-primary">Contact Detail</strong>
            <p><i class="fas fa-phone-volume"></i><span>&NonBreakingSpace; +977-061-525629, 537220 </span></p>
            <p><i class="fas fa-fax"></i><span>&NonBreakingSpace; +977-061-537219</span></p>
          </div>
          
        </div>
      </div>
      <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background-color:  rgb(240, 240, 240);;">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">Contact Us</strong>
            <p><i class="fas fa-phone-volume"></i><span>&NonBreakingSpace; +977-061-525629, 537220(Name) </span></p>
            <p><i class="fas fa-phone-volume"></i><span>&NonBreakingSpace; +977-061-525629, 537220(Name) </span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection