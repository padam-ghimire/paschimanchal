<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">{{trans('app.edit')}} &nbsp;</h3>

    </div>
    <div class="box-body">

        {!! Form::model($edits,['method'=>'PUT','enctype'=>'multipart/form-data','route'=>['board_members.update',$edits->id]]) !!}


        <div class="form-group {{ ($errors->has('name'))?'has-error':'' }}">
            <label>Member Name
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('name',null,['class'=>'form-control','placeholder' => 'Ram kumar karki']) !!}
            {!! $errors->first('name', '<span class="text-danger">:message</span>') !!}
        </div>
        <div class="form-group {{ ($errors->has('designation_id'))?'has-error':'' }}">
                                              <label>Designation <label class="text-danger"> *</label></label>
                                              {{Form::select('designation_id',$designations->pluck('designation_name','id'),old('designation_id')?old('designation_id'):Request::get('designation_id'),['class'=>'form-control select2','id'=>'designation_id','placeholder'=>
                                              'Designation'])}}
                                              {!! $errors->first('designation_id', '<span class="text-danger">:message</span>') !!}
                                          </div>
         <!-- /.input group -->
         <div class="form-group {{ ($errors->has('phone'))?'has-error':'' }}">
            <label>Phone No
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('phone',null,['class'=>'form-control','placeholder' => '9860162701']) !!}
            {!! $errors->first('phone', '<span class="text-danger">:message</span>') !!}

        <!-- /.input group -->
        </div>

          <!-- /.input group -->
          <div class="form-group {{ ($errors->has('facebook'))?'has-error':'' }}">
            <label>Facebook
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('facebook',null,['class'=>'form-control','placeholder' => 'facebook link']) !!}
            {!! $errors->first('phone', '<span class="text-danger">:message</span>') !!}

        <!-- /.input group -->
        </div>
        <div class="form-group {{ ($errors->has('image'))?'has-error':'' }}">
            <label for="image" class="control-label align">Slider Image </label>
            {{Form::file('image',null,array('class'=>'form-control','id'=>'image','placeholder'=>
            'Choose File'))}}
            {!! $errors->first('image', '<span class="text-danger">:message</span>') !!}
            @if($edits->image)
            <img class="profile-user-img img-responsive img-circle" src="{{asset('storage/uploads/images/board_member/'.$edits->image)}}" style="width:150px" alt="No Image">
            @endif
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