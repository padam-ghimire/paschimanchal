
<div id="slider-caption" class="carousel slide carousel-fade body" data-ride="carousel">
   
    <div class="carousel-inner">
@foreach($sliders as $slider)
      <div class="carousel-item @if($loop->first) active @endif)">
        <img src="{{asset('storage/uploads/images/slider')}}/{{$slider->image}}" class="d-block w-100 min-vh-90 img-fluid" alt="...">
        <div class="carousel-caption ">
          <div class="cc" id="cc">
						<h3>“ {{$slider->title}}”</h3>
					</div>
        </div>
      </div>
  @endforeach
    </div>
    <a class="carousel-control-prev" href="#slider-caption" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#slider-caption" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
