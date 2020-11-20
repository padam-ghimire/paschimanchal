<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">{{trans('app.edit')}} &nbsp;</h3>

    </div>
    <div class="box-body">

        {!! Form::model($edits,['method'=>'POST','enctype'=>'multipart/form-data','route'=>['settings.update',$edits->id]]) !!}


        <div class="form-group {{ ($errors->has('phone'))?'has-error':'' }}">
            <label>Phone
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('phone',null,['class'=>'form-control','placeholder' => '9860162701']) !!}
            {!! $errors->first('phone', '<span class="text-danger">:message</span>') !!}
        </div>

        <div class="form-group {{ ($errors->has('email'))?'has-error':'' }}">
            <label>Email
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('email',null,['class'=>'form-control','placeholder' => 'padamghimire75@gmail.com']) !!}
            {!! $errors->first('email', '<span class="text-danger">:message</span>') !!}
        </div>

        <div class="form-group {{ ($errors->has('address'))?'has-error':'' }}">
            <label>Address
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('address',null,['class'=>'form-control','placeholder' => 'duwakot,bhaktapur']) !!}
            {!! $errors->first('address', '<span class="text-danger">:message</span>') !!}
        </div>

        <div class="form-group {{ ($errors->has('facebook'))?'has-error':'' }}">
            <label>Facebook
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('facebook',null,['class'=>'form-control','placeholder' => 'facebook.com']) !!}
            {!! $errors->first('facebook', '<span class="text-danger">:message</span>') !!}
        </div>

        <div class="form-group {{ ($errors->has('twitter'))?'has-error':'' }}">
            <label>Twitter
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('twitter',null,['class'=>'form-control','placeholder' => 'twitter.com']) !!}
            {!! $errors->first('twitter', '<span class="text-danger">:message</span>') !!}
        </div>


        <div class="form-group {{ ($errors->has('youtube'))?'has-error':'' }}">
            <label>Youtube
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('youtube',null,['class'=>'form-control','placeholder' => 'youtube.com']) !!}
            {!! $errors->first('youtube', '<span class="text-danger">:message</span>') !!}
        </div>

        <div class="form-group {{ ($errors->has('linkedin'))?'has-error':'' }}">
            <label>LinkedIn
                <label class="text-danger"> *</label>
            </label>
            {!! Form::text('linkedin',null,['class'=>'form-control','placeholder' => 'linkedin.com']) !!}
            {!! $errors->first('linkedin', '<span class="text-danger">:message</span>') !!}
        </div>


        <div class="form-group {{ ($errors->has('logo'))?'has-error':'' }}">
            <label for="image" class="control-label align">logo Image </label>
            {{Form::file('logo',null,array('class'=>'form-control','id'=>'image','placeholder'=>
            'Choose File'))}}
            {!! $errors->first('logo', '<span class="text-danger">:message</span>') !!}
            @if($edits->logo)
            <img class="profile-user-img img-responsive img-circle" src="{{asset('/storage/frontend/img/'.$edits->logo)}}" style="width:150px" alt="No Image">
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