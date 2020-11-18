<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Add Board Member&nbsp;</h3>

    </div>
    <div class="box-body">
    {!! Form::open(['method'=>'post','url'=>'/clients','enctype'=>'multipart/form-data']) !!}


    <!-- /.input group -->
        <div class="form-group {{ ($errors->has('name'))?'has-error':'' }}">
            <label>Client Name
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('name',null,['class'=>'form-control','placeholder' => 'Ncell']) !!}
            {!! $errors->first('name', '<span class="text-danger">:message</span>') !!}

        <!-- /.input group -->
        </div>
        <div class="form-group {{ ($errors->has('image'))?'has-error':'' }}">
            <label for="avatar_image" class="control-label align">Client Image </label>
            {{Form::file('image',null,array('class'=>'form-control','id'=>'image','placeholder'=>
            'Choose File'))}}
            <span class="help-block inline">Upload Type: JPG, JPEG, PNG</span><br>
            {!! $errors->first('image', '<span class="text-danger">:message</span>') !!}
        </div>
        <!-- /.input group -->
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

