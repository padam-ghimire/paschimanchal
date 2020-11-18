<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">{{trans('app.edit')}} &nbsp;</h3>

    </div>
    <div class="box-body">

        {!! Form::model($edits,['method'=>'PUT','enctype'=>'multipart/form-data','route'=>['services.update',$edits->id]]) !!}


     
    <!-- /.input group -->
    <div class="form-group {{ ($errors->has('title'))?'has-error':'' }}">
            <label>Service title
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('title',null,['class'=>'form-control','placeholder' => 'Optical Fiber']) !!}
            {!! $errors->first('name', '<span class="text-danger">:message</span>') !!}

        <!-- /.input group -->
        </div>

         <!-- /.input group -->
         <div class="form-group {{ ($errors->has('design'))?'has-error':'' }}">
            <label>Design Section
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('design',null,['class'=>'form-control','placeholder' => 'What we do in design section.']) !!}
            {!! $errors->first('design', '<span class="text-danger">:message</span>') !!}

        <!-- /.input group -->
        </div>

          <!-- /.input group -->
          <div class="form-group {{ ($errors->has('deployment'))?'has-error':'' }}">
            <label>Deployment Section
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('deployment',null,['class'=>'form-control','placeholder' => 'What we do in deployment section.']) !!}
            {!! $errors->first('deployment', '<span class="text-danger">:message</span>') !!}

        <!-- /.input group -->
        </div>

          <!-- /.input group -->
          <div class="form-group {{ ($errors->has('testing'))?'has-error':'' }}">
            <label>Testing Section
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('testing',null,['class'=>'form-control','placeholder' => 'What we do in testing section.']) !!}
            {!! $errors->first('testing', '<span class="text-danger">:message</span>') !!}

        <!-- /.input group -->
        </div>

           <!-- /.input group -->
           <div class="form-group {{ ($errors->has('support'))?'has-error':'' }}">
            <label>Support Section
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('support',null,['class'=>'form-control','placeholder' => 'What we do in support section.']) !!}
            {!! $errors->first('support', '<span class="text-danger">:message</span>') !!}

        <!-- /.input group -->
        </div>
        <div class="form-group {{ ($errors->has('image'))?'has-error':'' }}">
            <label for="image" class="control-label align">Service Image </label>
            {{Form::file('image',null,array('class'=>'form-control','id'=>'image','placeholder'=>
            'Choose File'))}}
            {!! $errors->first('image', '<span class="text-danger">:message</span>') !!}
            @if($edits->image)
            <img class="profile-user-img img-responsive img-circle" src="{{asset('storage/uploads/images/services/'.$edits->image)}}" style="width:150px" alt="No Image">
            @endif
        </div>

        <div class="form-group {{ ($errors->has('status'))?'has-error':'' }}">
            <label for="status">{{trans('app.status')}} </label><br>
            {{Form::radio('status', 'active',true,['class'=>'minimal-red'])}} {{trans('app.active')}} &nbsp;&nbsp;&nbsp;
            {{Form::radio('status', 'inactive',null,['class'=>'minimal-red'])}} {{trans('app.inactive')}}
        </div>
        <!-- /.form group -->
        <div class="box-footer">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button type="submit" class="btn btn-primary">{{trans('app.update')}}</button>
            </div>
            <!-- /.box-footer -->
        </div>
        {!! Form::close() !!}


    </div>
    <!-- /.box-body -->
</div>