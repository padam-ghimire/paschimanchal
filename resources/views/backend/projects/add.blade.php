<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Add Project&nbsp;</h3>

    </div>
    <div class="box-body">
    {!! Form::open(['method'=>'post','url'=>'/projects','enctype'=>'multipart/form-data']) !!}

    <div class="form-group {{ ($errors->has('name'))?'has-error':'' }}">
            <label>Project name
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('name',null,['class'=>'form-control','placeholder' => 'Sunkishi Internet']) !!}
            {!! $errors->first('name', '<span class="text-danger">:message</span>') !!}
        </div>
        <div class="form-group {{ ($errors->has('client_id'))?'has-error':'' }}">
                                              <label>Client <label class="text-danger"> *</label></label>
                                              {{Form::select('client_id',$clients->pluck('name','id'),old('client_id')?old('client_id'):Request::get('client_id'),['class'=>'form-control select2','id'=>'client_id','placeholder'=>
                                              'Client'])}}
                                              {!! $errors->first('client_id', '<span class="text-danger">:message</span>') !!}
                                          </div>
         <!-- /.input group -->
         <div class="form-group {{ ($errors->has('area'))?'has-error':'' }}">
            <label>Area
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('area',null,['class'=>'form-control','placeholder' => 'Bhaktapur']) !!}
            {!! $errors->first('area', '<span class="text-danger">:message</span>') !!}

        <!-- /.input group -->
        </div>

          <!-- /.input group -->
          <div class="form-group {{ ($errors->has('year'))?'has-error':'' }}">
            <label>Year
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('year',null,['class'=>'form-control','placeholder' => 'jan 20 2020']) !!}
            {!! $errors->first('year', '<span class="text-danger">:message</span>') !!}

        <!-- /.input group -->
        </div>

          <!-- /.input group -->
          <div class="form-group {{ ($errors->has('contract_name'))?'has-error':'' }}">
            <label>Contract Name
               
            </label>
            {!! Form::text('contract_name',null,['class'=>'form-control','placeholder' => 'Nepal project']) !!}
            {!! $errors->first('contract_name', '<span class="text-danger">:message</span>') !!}

        <!-- /.input group -->
        </div>

           <!-- /.input group -->
           <div class="form-group {{ ($errors->has('quantity'))?'has-error':'' }}">
            <label>Quantity(KM)
               
            </label>
            {!! Form::text('quantity',null,['class'=>'form-control','placeholder' => '50km']) !!}
            {!! $errors->first('quantity', '<span class="text-danger">:message</span>') !!}

        <!-- /.input group -->
        </div>


           <!-- /.input group -->
           <div class="form-group {{ ($errors->has('description'))?'has-error':'' }}">
            <label>Description
               
            </label>
            {!! Form::textarea('description',null,['class'=>'form-control','placeholder' => '']) !!}
            {!! $errors->first('description', '<span class="text-danger">:message</span>') !!}

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

