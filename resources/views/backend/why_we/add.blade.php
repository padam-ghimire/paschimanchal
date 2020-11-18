<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Add Why we?&nbsp;</h3>

    </div>
    <div class="box-body">
    {!! Form::open(['method'=>'post','url'=>'/whyWe','enctype'=>'multipart/form-data']) !!}


    <!-- /.input group -->
        <div class="form-group {{ ($errors->has('title'))?'has-error':'' }}">
            <label>Title
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('title',null,['class'=>'form-control','placeholder' => 'Why we title']) !!}
            {!! $errors->first('title', '<span class="text-danger">:message</span>') !!}

        <!-- /.input group -->
        </div>
     
         <!-- /.input group -->
         <div class="form-group {{ ($errors->has('sub_title'))?'has-error':'' }}">
            <label>Sub title
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('sub_title',null,['class'=>'form-control','placeholder' => 'Sub title']) !!}
            {!! $errors->first('sub_title', '<span class="text-danger">:message</span>') !!}

        </div>
        <!-- /.input group -->

          <!-- /.input group -->
          <div class="form-group {{ ($errors->has('description'))?'has-error':'' }}">
            <label>Description
                <label class="text-danger"> *</label>
            </label>
            {!! Form::textarea('description',null,['class'=>'form-control','placeholder' => 'Your Description']) !!}
            {!! $errors->first('description', '<span class="text-danger">:message</span>') !!}

        <!-- /.input group -->
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

