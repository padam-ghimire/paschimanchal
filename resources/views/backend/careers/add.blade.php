<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Add Job&nbsp;</h3>

    </div>
    <div class="box-body">
    {!! Form::open(['method'=>'post','url'=>'/careers','enctype'=>'multipart/form-data']) !!}

    <div class="form-group {{ ($errors->has('title'))?'has-error':'' }}">
            <label>Job title
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('title',null,['class'=>'form-control','placeholder' => 'Manager']) !!}
            {!! $errors->first('title', '<span class="text-danger">:message</span>') !!}
        </div>

         <!-- /.input group -->
         <div class="form-group {{ ($errors->has('salary'))?'has-error':'' }}">
            <label>Salary
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('salary',null,['class'=>'form-control','placeholder' => '50000/m']) !!}
            {!! $errors->first('salary', '<span class="text-danger">:message</span>') !!}

        <!-- /.input group -->
        </div>

          <!-- /.input group -->
          <div class="form-group {{ ($errors->has('working_hours'))?'has-error':'' }}">
            <label>Working Hours
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('working_hours',null,['class'=>'form-control','placeholder' => '10am - 5pm']) !!}
            {!! $errors->first('working_hours', '<span class="text-danger">:message</span>') !!}

        <!-- /.input group -->
        </div>

          <!-- /.input group -->
          <div class="form-group {{ ($errors->has('short_description'))?'has-error':'' }}">
            <label>Short Description
               
            </label>
            {!! Form::text('short_description',null,['class'=>'form-control','placeholder' => 'We want project manager for our team']) !!}
            {!! $errors->first('short_description', '<span class="text-danger">:message</span>') !!}

        <!-- /.input group -->
        </div>

           <!-- /.input group -->
           <div class="form-group {{ ($errors->has('description'))?'has-error':'' }}">
            <label>Description
               
            </label>
            {!! Form::textarea('description',null,['id'=>'summernote','placeholder' => '50km']) !!}
            {!! $errors->first('description', '<span class="text-danger">:message</span>') !!}

        <!-- /.input group -->
        </div>


        
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

