<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Edit </h3>

    </div>
    <div class="box-body">
        {!! Form::model($edits,['method'=>'PUT','route'=>['user.update',$edits->id],'enctype'=>'multipart/form-data']) !!}
        <div class="form-group {{ ($errors->has('designation_id'))?'has-error':'' }}">
            <label>Designation</label>
            {{Form::select('designation_id',$designationList->pluck('designation_name','id'),Request::get('designation_id'),['class'=>'form-control select2','style'=>'width:100%;','id'=>'designation_id','placeholder'=>
            'Select Designation Name'])}}
            {!! $errors->first('designation_id', '<span class="text-danger">:message</span>') !!}
        </div>

        <div class="form-group {{ ($errors->has('user_group_id'))?'has-error':'' }}">
            <label>Group</label>
            {{Form::select('user_group_id',$groupList->pluck('group_name','id'),Request::get('user_group_id'),['class'=>'form-control select2','style'=>'width:100%;','id'=>'group_id','placeholder'=>
            'Select Group'])}}
            {!! $errors->first('user_group_id', '<span class="text-danger">:message</span>') !!}
        </div>

        <div class="form-group {{ ($errors->has('name'))?'has-error':'' }}">
            <label>Username:</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>
        {!! $errors->first('name', '<span class="text-danger">:message</span>') !!}
            <!-- /.input group -->
        </div>
        <!-- /.form group -->
        <div class="form-group {{ ($errors->has('email'))?'has-error':'' }}">
            <label>Email:</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-at"></i></span>
                {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'email@example.com']) !!}
            </div>
        {!! $errors->first('email', '<span class="text-danger">:message</span>') !!}

            <!-- /.input group -->
        </div>

        <div class="form-group {{ ($errors->has('avatar_image'))?'has-error':'' }}">
            <label for="avatar_image" class="control-label align">User Image </label>
            {{Form::file('avatar_image',null,array('class'=>'form-control','id'=>'avatar_image','placeholder'=>
            'Choose File'))}}
            {!! $errors->first('avatar_image', '<span class="text-danger">:message</span>') !!}
            @if($edits->user_image)
            <img class="profile-user-img img-responsive img-circle" src="{{asset('/storage/uploads/users/images/profilePic/'.$edits->user_image)}}" style="width:150px" alt="No Image">
            @endif
        </div>

        <div class="form-group {{ ($errors->has('user_status'))?'has-error':'' }}">
            <label for="user_status">Status </label><br>
            {{--<label for="item_type" class="control-label align">Item Type<label class="text-danger"> *</label></label><br>--}}
            {{Form::radio('user_status', 'active',null,['class'=>'flat-red'])}} Active &nbsp;&nbsp;&nbsp;
            {{Form::radio('user_status', 'inactive',true,['class'=>'flat-red'])}} Inactive
            {!! $errors->first('user_status', '<span class="text-danger">:message</span>') !!}
        </div>

        <!-- /.form group -->
        <div class="box-footer">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button type="submit" class="btn btn-primary">Update</button>
                {{--<button type="submit" class="btn btn-default bg-green">Save & Add New</button>--}}

            </div>
            <!-- /.box-footer -->

        </div>
        {!! Form::close() !!}


    </div>
    <!-- /.box-body -->
</div>