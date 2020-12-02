@extends('frontend.layouts.app')
@section('content')

<div class="portfoliopage">
    <div class="jumbotron  text-white bg-dark" style="background-image: url(img/portfolio.jpg); background-size: cover;">
      
        <h2 class="display">Completed And Undergoing Projects</h2>
        <p class=" my-3">We believe that fundamental honesty is the
          keystone of any successful business.
          </p>
      
    </div>



<div class="section-block-grey">
  <div class="container">
      <div class="row mt-60">

  @foreach($projects as $project)
          <div class="col-md-4 col-sm-12 col-12" id="portfolio1">
              <div class="serv-section-2">
                  <div class="serv-section-2-icon"></div>
                  <div class="serv-section-desc">
                    <a href="{{route('portfolio.show',[$project->id])}}"> <h6 style="color:darkcyan">{{$project->name}}
                      Project</h6></a>
                        <div class="section-heading-line-left"></div>
                          <p>Client name - {{$project->client->name}}</p>
                          <p>Area - {{$project->area}}</p>
                          <p>Year - {{$project->year}}</p>     
              </div>
            </div>
      </div>
@endforeach
    














</div>
</div>
@endsection