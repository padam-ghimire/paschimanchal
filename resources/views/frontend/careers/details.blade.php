@extends('frontend.layouts.app')
@section('content')

<div class="jumbotron  text-white career " style="background-image: url(img/career.jpg); background-size: cover;">
    
    <h2 class="display">{{$job->title}}</h2>
    <p class=" my-3" >Build your career with us and be a part of us.
      </p>
 
</div>

<div class="container">
    <div class="row cardetails">

        <div class="col-lg-4" style="background-color: #e5fff2;">
          <h5 style="text-align: center;">About The Job</h5>
          <hr>
          <p>Job Title - {{$job->title}}</p>
          <p>Working Hours -  {{$job->working_hours}}</p>
          <p>Salary -  {{$job->salary}}</p>
          </p>
       </div>
        <div class="col-lg-8">
          <h5 style="text-align: center;">Job Description</h5>
          <hr>
          <p>
          {!! $job->description !!}
          </p>
              <a data-toggle="modal" href="#myModal" class="btn btn-md btn-info float-right">Apply Now</a>
        </div>

    </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><b>&times;</b></button>
          </div>
          <div class="modal-body">
              <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                    @include('backend.message.flash')
                        <h4 style="text-align: center;">Work With Us</h4>
                        <div class="" class="border">
                        {!! Form::open(['method'=>'post','route'=>['job.apply',$job->id],'enctype'=>'multipart/form-data']) !!}

                        <div class="form-group {{ ($errors->has('name'))?'has-error':'' }}">
                            <label>Name
                                <label class="text-danger"> *</label>
                            </label>
                            {!! Form::text('name',null,['class'=>'form-control','placeholder' => 'Padam Ghimire']) !!}
                            {!! $errors->first('name', '<span class="text-danger">:message</span>') !!}

                        <!-- /.input group -->
                        </div>
                        <div class="form-group {{ ($errors->has('email'))?'has-error':'' }}">
                            <label>Email
                                <label class="text-danger"> *</label>
                            </label>
                            {!! Form::text('email',null,['class'=>'form-control','placeholder' => 'Your Valid email']) !!}
                            {!! $errors->first('email', '<span class="text-danger">:message</span>') !!}

                        <!-- /.input group -->
                        </div>
              
                             <div class="form-group {{ ($errors->has('phone'))?'has-error':'' }}">
                            <label>Phone number
                                <label class="text-danger"> *</label>
                            </label>
                            {!! Form::text('phone',null,['class'=>'form-control','placeholder' => 'Valid phone number']) !!}
                            {!! $errors->first('phone', '<span class="text-danger">:message</span>') !!}

                        <!-- /.input group -->
                        </div>
              
                        <div class="form-group {{ ($errors->has('cv'))?'has-error':'' }}">
                            <label for="cv" class="control-label align">CV</label>
                            <br>
                            {{Form::file('cv',null,array('class'=>'form-control','id'=>'cv','placeholder'=>
                            'Choose File'))}}
                          
                            {!! $errors->first('cv', '<span class="text-danger">:message</span>') !!}
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        {!! Form::close() !!}
                      </div>
                      </div>
                  </div>
              
                  <br><br>
              </div>
              
          </div>
          
      </div>
  </div>
</div>


@endsection