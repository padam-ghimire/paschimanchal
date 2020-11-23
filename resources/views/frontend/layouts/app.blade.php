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

    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/style/style.css">
    
</head>
<body>

    <!--naivigation-->
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-custom">

        <a class="navbar-brand" href="/"><img src="{{asset('/storage/frontend/img/'.$settings[0]->logo)}}" alt="" height="50px"></a>

        <div class="collapse navbar-collapse flex-column" id="navbarNavDropdown">

            <div class="header mr-auto">
              <p class="d-md-none d-none d-lg-block ">
                <br>
                <span class="spanhead"></span> <i class="fas fa-phone-volume" style="color:darkcyan;"></i><span>&nbsp;&nbsp;<span style="color:#cc521d;">{{$settings[0]->phone}} &nbsp;&nbsp;&nbsp;&nbsp; </span >
                <span><i class="fas fa-map-marker-alt" style="color:darkcyan;"></i><span>&nbsp;&nbsp;<span style="color:#cc521d;">{{$settings[0]->address}}</span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
                <span><a href="{{$settings[0]->facebook}}" target="blank"><i class="fab fa-facebook" style="font-size:25px;color:#7dbbfa;"></i></a>&nbsp;</span>
                <span><a href="https://www.instagram.com/?hl=en" target="blank"><i class="fab fa-instagram" style="font-size:25px;color:maroon;"></i></a>&nbsp;</span>
                <span><a href="{{$settings[0]->twitter}}" target="blank"><i class="fab fa-twitter-square" style="font-size:25px;color:blue;"></i></a>&nbsp;</span>
                <span><a href="{{$settings[0]->linkedin}}" target="blank"><i class="fab fa-linkedin" style="font-size:25px;color:darkblue;"></i></a></span>
                <hr style="width:150%;">
              </p>
            </div>
       
          <ul class="navbar-nav mr-auto ">
            <li class="nav-item ">
              <div style="width:100px;"></div>
              </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item ">
              <div style="width:20px;"></div>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}">About Us</a>
            </li>
            <li class="nav-item ">
              <div style="width:20px;"></div>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('portfolio')}}">Portfolio</a>
            </li>
            <li class="nav-item ">
              <div style="width:20px;"></div>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('services')}}">Services</a>
            </li>
            <li class="nav-item ">
              <div style="width:20px;"></div>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('news')}}">News & Events</a>
            </li>
            <li class="nav-item ">
              <div style="width:20px;"></div>
              </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="{{route('case_study')}}">Case Study</a>
              </li> -->
              <li class="nav-item ">
                <div style="width:20px;"></div>
                </li>
                
            <li class="nav-item">
              <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
            </li>
           
          </ul>
        </div>

     
        <br><br>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-home" aria-hidden="true"></i>
        </button>
      </nav>
  <!--Navigation ends-->

  
  <!--Carousel-->


<!--CAROUSEL ENDS---->

@yield('content')

  
<footer id="dk-footer" class="dk-footer">
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12 col-lg-5">
              <div class="footer-left-widget">
                  <a href="/" class="footer-logo">
                      <img src="{{asset('/storage/frontend/img/'.$settings[0]->logo)}}" alt="footer_logo" height="70px">
                  </a>
                  <br><br>
                      <div class="contactfooter">
                          <p style="color:#878787;">{{$settings[0]->address}}</p>
                    <a href=""><p style="color: #878787;"><i class="fas fa-phone-volume"></i> &NonBreakingSpace;<span>{{$settings[0]->phone}}<span> &NonBreakingSpace;<i class="fas fa-envelope"></i> &NonBreakingSpace;<span>{{$settings[0]->email}}</span></p></a>
                      </div>
                      
                          
                 
                  <br>
                  <div class="footer-social-link">
                     
                      <ul>
                          <li>
                              <a href="{{$settings[0]->facebook}}" target="blank">
                                  <i class="fab fa-facebook"></i>
                              </a>
                          </li>
                          <li>
                              <a href="https://www.instagram.com/?hl=en" target="blank">
                                  <i class="fab fa-instagram"></i>
                              </a>
                          </li>
                          <li>
                              <a href="{{$settings[0]->twitter}}" target="blank">
                                  <i class="fab fa-twitter"></i>
                              </a>
                          </li>
                          
                          <li>
                              <a href="{{$settings[0]->linkedin}}" target="blank">
                                  <i class="fab fa-linkedin"></i>
                              </a>
                          </li>
                          
                      </ul>
                  </div>
                  <!-- End Social link -->
              </div>
              <!-- End Footer info -->
             
          </div>
          <!-- End Col -->
          <div class="col-md-12 col-lg-7">
              
              <!-- End Contact Row -->
              <div class="row">
                  <div class="col-md-12 col-lg-5">
                      <div class="footer-widget footer-left-widget">
                          <div class="section-heading">
                              <h4>Quick Links</h4>
                              <span class="animate-border border-black"></span>
                          </div>
                          <ul>
                              <li>
                                  <a href="{{route('home')}}">Home</a>
                              </li>
                              <li>
                                  <a href="{{route('about')}}">About Us</a>
                              </li>
                              <li>
                                  <a href="{{route('portfolio')}}">Portfolio</a>
                              </li>
                              <li>
                                  <a href="{{route('services')}}">Services</a>
                              </li>
                          
                              <li>
                                  <a href="{{route('news')}}">News & Events</a>
                              </li>
                              <li>
                                  <a href="{{route('case_study')}}">Case Study</a>
                              </li>
                              <li>
                                  <a href="{{route('contact')}}">Contact Us</a>
                                
                              </li>
                              <li>
                                <a href="{{route('home')}}">Career</a>
                                <br><br>
                            </li>
                          </ul>
                          
                      </div>
                      <!-- End Footer Widget -->
                  </div>
                  
                  <!-- End col -->
                  <div class="col-md-12 col-lg-6">
                      <div class="footer-widget footer-left-widget">
                          <div class="section-heading">
                              <a href="news.html"><h4>News</h4></a>
                              
                            </div>
                            <p><a href="news/newsdetail1.html" class="footernews">Telecommunication Advancement</a></p>
                            <p><a href="news/newsdetail2.html" class="footernews">Our ADDS Installation Service</a></p>
                            <p><a href="news/newsdetail3.html" class="footernews">We Build Relationship</a></p>
                            <p><a href="news/newsdetail4.html" class="footernews">Fast Growing Fiber Services</a></p>
                            
                      </div>
                      <!-- End footer widget -->
                  </div>
                  <!-- End Col -->
                  <div class="col-lg-1">
                  <!-- End Col -->
              </div>
              <!-- End Row -->
          </div>
          <!-- End Col -->
      </div>
      <!-- End Widget Row -->
  </div>
  <!-- End Contact Container -->     
</footer>

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