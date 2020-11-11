<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Add Board Member&nbsp;</h3>

    </div>
    <div class="box-body">
    {!! Form::open(['method'=>'post','url'=>'/board_members','enctype'=>'multipart/form-data']) !!}


    <!-- /.input group -->
        <div class="form-group {{ ($errors->has('name'))?'has-error':'' }}">
            <label>Member Name
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('name',null,['class'=>'form-control','placeholder' => 'Hari Bahadur Karki']) !!}
            {!! $errors->first('name', '<span class="text-danger">:message</span>') !!}

        <!-- /.input group -->
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
            <label for="avatar_image" class="control-label align">Member Image </label>
            {{Form::file('image',null,array('class'=>'form-control','id'=>'image','placeholder'=>
            'Choose File'))}}
            <span class="help-block inline">Upload Type: JPG, JPEG, PNG</span><br>
            {!! $errors->first('image', '<span class="text-danger">:message</span>') !!}
        </div>
        <!-- /.input group -->
        </div>
        <div class="form-group {{ ($errors->has('status'))?'has-error':'' }}">
            <label for="status">{{trans('app.status')}} </label><br>
            {{Form::radio('status', 'active',true,['class'=>'minimal-red'])}} {{trans('app.active')}} &nbsp;&nbsp;&nbsp;
            {{Form::radio('status', 'inactive',null,['class'=>'minimal-red'])}} {{trans('app.inactive')}}
        </div>
        <!-- /.form group -->
        <div class="box-footer">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button type="submit" class="btn btn-primary">{{trans('app.save')}}&nbsp;</button>
            </div>
            <!-- /.box-footer -->

        </div>
        {!! Form::close() !!}

    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

