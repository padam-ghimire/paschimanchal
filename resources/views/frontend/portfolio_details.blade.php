@extends('frontend.layouts.app')
@section('content')

<div class="portfoliopage">

  <div class="jumbotron  text-white bg-dark" style="background-image: url(img/portfolio.jpg); background-size: cover;">
      
    <h2 class="display">Portfolio</h2>
    <p class=" my-3">We believe that fundamental honesty is the
      keystone of any successful business.
      </p>
  
</div>
  </div>
      <br><br><br>
       <!--Details start Here-->
    <div class="row">
      <div class="col-lg-12"> <h4 style="text-align: center;">{{$portfolio->name}}
        Project</h4></div>
      <hr>
  </div>
  <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
          <div class="card" >
              <img src="{{asset('storage/uploads/images/projects')}}/{{$portfolio->image}}" class="card-img-top" alt="...">
              <br>
              <div class="card-body">
                <table>
                  <tr>
                    <td colspan="2">Project Name</td>
                    <td colspan="2">
                        {{$portfolio->name}}
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">Client</td>
                    <td colspan="2">{{$portfolio->client->name}}</td>
                  </tr>
                  <tr>
                    <td colspan="2">Area</td>
                    <td colspan="2">{{$portfolio->area}}</td>
                  </tr>
                  <tr>
                    <td colspan="2">Year</td>
                    <td colspan="2">{{$portfolio->year}}</td>
                  </tr>
                  <tr>
                    <td colspan="2">Contract Name</td>
                    <td colspan="2">{{$portfolio->contract_name}}</td>
                  </tr>
                
                  <tr>
                    <td colspan="2">Description</td>
                    <td colspan="2">{!! $portfolio->description !!}</td>
                  </tr>
                  <tr>
                    <td colspan="2">Quantity(Km)</td>
                    <td colspan="2">{{$portfolio->quantity}}</td>
                  </tr>
              

                </table>
              </div>
            </div>
      </div>
      <div class="col-lg-2"></div>
  </div>
   <!--Details start Here-->
<br><br>
    

@endsection