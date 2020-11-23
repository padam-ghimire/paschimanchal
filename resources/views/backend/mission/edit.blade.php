<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">{{trans('app.edit')}} &nbsp;</h3>

    </div>
    <div class="box-body">

        {!! Form::model($edits,['method'=>'PUT','enctype'=>'multipart/form-data','route'=>['mission.update',$edits->id]]) !!}


        <div class="form-group {{ ($errors->has('title'))?'has-error':'' }}">
            <label>Title
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('title',null,['class'=>'form-control','placeholder' => 'Mission title']) !!}
            {!! $errors->first('title', '<span class="text-danger">:message</span>') !!}

        <!-- /.input group -->
        </div>
     
   

          <!-- /.input group -->
          <div class="form-group {{ ($errors->has('description'))?'has-error':'' }}">
            <label>Description
                <label class="text-danger"> *</label>
            </label>
            {!! Form::textarea('description',null,['class'=>'form-control','id'=>'summernote','placeholder' => 'Your Description']) !!}
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