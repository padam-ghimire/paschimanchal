<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">{{trans('app.edit')}} &nbsp;</h3>

    </div>
    <div class="box-body">

        {!! Form::model($edits,['method'=>'PUT','enctype'=>'multipart/form-data','route'=>['news.update',$edits->id]]) !!}


        <div class="form-group {{ ($errors->has('title'))?'has-error':'' }}">
            <label>News title
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('title',null,['class'=>'form-control','placeholder' => 'New News']) !!}
            {!! $errors->first('title', '<span class="text-danger">:message</span>') !!}
        </div>



        <div class="form-group {{ ($errors->has('description'))?'has-error':'' }}">
            <label>News Description
                <label class="text-danger"> *</label>
            </label>
            {!! Form::textarea('description',null,['class'=>'form-control','placeholder' => 'News Description']) !!}
            {!! $errors->first('description', '<span class="text-danger">:message</span>') !!}
        </div>
      
        <div class="form-group {{ ($errors->has('image'))?'has-error':'' }}">
            <label for="image" class="control-label align">News Image </label>
            {{Form::file('image',null,array('class'=>'form-control','id'=>'image','placeholder'=>
            'Choose File'))}}
            {!! $errors->first('image', '<span class="text-danger">:message</span>') !!}
            @if($edits->image)
            <img class="profile-user-img img-responsive img-circle" src="{{asset('storage/uploads/images/news/'.$edits->image)}}" style="width:150px" alt="No Image">
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