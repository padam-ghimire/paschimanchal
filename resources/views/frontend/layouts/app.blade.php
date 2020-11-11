<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="The leading fiber optics and communication solutions">
    <title>PASCHIMANCHAL PVT.LTD</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    

    <link rel="stylesheet" href="{{asset('frontend')}}/owlcarousel/docs/assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/owlcarousel/docs/assets/owlcarousel/assets/owl.theme.default.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/style/style.css">
</head>
<body>
  <!--Header-->
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-2"><img src="{{asset('frontend')}}/img/logo.png" alt="" class="img-fluid"></div>
        <div class="col-lg-6"></div>
        <div class="col-lg-4">
          <br>
          <a href=""><p><i class="fas fa-phone-volume" style="color:darkorange;"></i><span>&NonBreakingSpace; +977-061-525629, 537220 </span></p></a>
           <a href=""><p><i class="fas fa-map-marker-alt" style="color:darkorange;"></i><span>&NonBreakingSpace;Gairaptan, Pokhara,Kaski, Nepal</p></a>
            <p><a href="https://www.facebook.com/Paschimanchal-Solution-Pvt-Ltd-111318457329490" target="blank"><i class="fab fa-facebook" style="font-size:20px;color:#7dbbfa;"></i></a>
            <span><a href="https://www.instagram.com/?hl=en" target="blank"><i class="fab fa-instagram" style="font-size:20px;color:maroon;"></i></a></span>
            <span><a href="https://twitter.com/?lang=en" target="blank"><i class="fab fa-twitter-square" style="font-size:20px;color:blue;"></i></a></span>
            <span><a href="https://www.linkedin.com/" target="blank"><i class="fab fa-linkedin" style="font-size:20px;color:darkblue;"></i></a></span>
            </p>
        </div>
      </div>
    </div>
    
  </div>
  <hr style="width:80%;">

  <!--Header Ends-->

    <!--naivigation-->
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-custom">
        <a class="navbar-brand" href="index.html">PASCHIMANCHAL PVT.LTD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-home" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ">
            <li class="nav-item ">
              <div style="width:150px;"></div>
              </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('home')}}">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('portfolio')}}">PORTFOLIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('services')}}">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('news')}}">NEWS & EVENTS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('case_study')}}">CASE STUDY</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact')}}">CONTACT US</a>
            </li>
          </ul>
        </div>
      </nav>
  <!--Navigation ends-->

  
  <!--Carousel-->


<!--CAROUSEL ENDS---->

@yield('content')

  

  <!--footer-->
<div class="footer">
	<div class="container no-fluid">
	<div class="row">
    <div class="col-lg-3 logo "><img src="{{asset('frontend')}}/img/logo.png">
      <div class="contactfooter">
      <br><br>
      <p><i class="fas fa-phone-volume"></i><span>&NonBreakingSpace; +977-061-525629, 537220 </span></p>
      <a href=""><p><i class="fas fa-map-marker-alt"></i><span>&NonBreakingSpace;Gairaptan, Pokhara,Kaski, Nepal</p></a>
        <p><a href="https://www.facebook.com/Paschimanchal-Solution-Pvt-Ltd-111318457329490" target="blank"><i class="fab fa-facebook" style="font-size:25px;"></i></a>
          <span><a href="https://www.instagram.com/?hl=en" target="blank"><i class="fab fa-instagram" style="font-size:25px;"></i></a></span>
          <span><a href="https://twitter.com/?lang=en" target="blank"><i class="fab fa-twitter-square" style="font-size:25px;"></i></a></span>
          <span><a href="https://www.linkedin.com/" target="blank"><i class="fab fa-linkedin" style="font-size:25px;"></i></a></span>
          </p>
    </div>
  </div>
  <br>
		<div class="col-lg-3 contactfooter">
            <h5>Head Office</h5>
            <hr style="border-top: 1px solid grey;">
			<p>	Gairaptan, Pokhara,Kaski, Nepal</p>
			<p>Phone: +977-061-525629, 537220 </p>
			<p>Fax: +977-061-537219</p>
			<h5>Email</h5>
            <hr style="border-top: 1px solid grey;">
			<p>	business@paschimanchal.net</p>
			<p>	paschimanchalsolution@gmail.com</p>
            <a href="http://www.paschimanchal.net" target="blank"><p>www.paschimanchal.net</p></a>
            
			<br><br>
		</div>
		
		<div class="col-lg-2 contactfooter">
            <h5>Links</h5>
            <hr style="border-top: 1px solid grey;">
			<p><a href="index.html">Home</a></p>
			<p><a href="about.html">About Us</a></p>
			<p><a href="portfolio.html">Portfolio</a></p>
      <p><a href="services.html">Services</a></p>
      <p><a href="news.html">News & Events</a></p>
      <p><a href="case.html">Case Study</a></p>
            <p><a href="contact.html">Contact Us</a></p>
			<br><br>
        </div>
        
        
		<div class="col-lg-2 newsfooter">
            <h5>News</h5>
            <hr style="border-top: 1px solid grey;">
			<p>The unending cross training among each of the experienced employees has further 
                enriched the company’s readiness to meet the demand of the future</p>
		</div>
		
	</div>
</div>
    

    <script type="text/javascript" src="{{asset('frontend')}}/bootstrap/js/jquery.js"></script>

    <script type="text/javascript" src="{{asset('frontend')}}/owlcarousel/docs/assets/owlcarousel/owl.carousel.min.js"></script>

    <script type="text/javascript" src="{{asset('frontend')}}/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('frontend')}}/js/script.js"></script>    
    
    <script>
      $('.owl-carousel').owlCarousel({
  loop:true,
  margin:80,
  nav:true,
  autoWidth:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:4
      }
  }
})

var owl = $('.owl-carousel');
owl.owlCarousel({
    items:3,
    loop:true,
    margin:80,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true
});
$(document)
  .ready(function(){
    owl.trigger('play.owl.autoplay',[2000])
})


    </script>
</body>
</html>