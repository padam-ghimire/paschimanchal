<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">{{trans('app.edit')}} &nbsp;</h3>

    </div>
    <div class="box-body">

        {!! Form::model($edits,['method'=>'POST','enctype'=>'multipart/form-data','route'=>['about.update',$edits->id]]) !!}


        <div class="form-group {{ ($errors->has('title'))?'has-error':'' }}">
            <label>About Section title
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('title',null,['class'=>'form-control','placeholder' => 'Slide 1']) !!}
            {!! $errors->first('title', '<span class="text-danger">:message</span>') !!}
        </div>
       <!-- /.input group -->
       <div class="form-group {{ ($errors->has('description'))?'has-error':'' }}">
            <label>Description
                <label class="text-danger"> *</label>
            </label>
            {!! Form::textarea('description',null,['class'=>'form-control','placeholder' => '']) !!}
            {!! $errors->first('description', '<span class="text-danger">:message</span>') !!}

        <!-- /.input group -->
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