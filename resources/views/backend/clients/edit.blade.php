<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">{{trans('app.edit')}} &nbsp;</h3>

    </div>
    <div class="box-body">

        {!! Form::model($edits,['method'=>'PUT','enctype'=>'multipart/form-data','route'=>['clients.update',$edits->id]]) !!}


        <div class="form-group {{ ($errors->has('name'))?'has-error':'' }}">
            <label>Client Name
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('name',null,['class'=>'form-control','placeholder' => 'Ncell']) !!}
            {!! $errors->first('name', '<span class="text-danger">:message</span>') !!}
        </div>
      
        <div class="form-group {{ ($errors->has('image'))?'has-error':'' }}">
            <label for="image" class="control-label align">Client Image </label>
            {{Form::file('image',null,array('class'=>'form-control','id'=>'image','placeholder'=>
            'Choose File'))}}
            {!! $errors->first('image', '<span class="text-danger">:message</span>') !!}
            @if($edits->image)
            <img class="profile-user-img img-responsive img-circle" src="{{asset('storage/uploads/images/clients/'.$edits->image)}}" style="width:150px" alt="No Image">
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