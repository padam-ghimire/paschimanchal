<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">{{trans('app.edit')}} &nbsp;</h3>

    </div>
    <div class="box-body">

        {!! Form::model($edits,['method'=>'PUT','enctype'=>'multipart/form-data','route'=>['map.update',$edits->id]]) !!}
        <div class="form-group {{ ($errors->has('link'))?'has-error':'' }}">
            <label>Map link
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('link',null,['class'=>'form-control','placeholder' => 'Google map link']) !!}
            {!! $errors->first('link', '<span class="text-danger">:message</span>') !!}
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