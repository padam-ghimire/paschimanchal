@extends('backend.layouts.app')
@section('content')
<?php

$permission = helperPermissionLink('careers', 'careers');

$allowEdit = $permission['isEdit'];

$allowDelete = $permission['isDelete'];

$allowAdd = $permission['isAdd'];
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
              Jobs
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> {{trans('app.dashboard')}}</a></li>
      
                <li class="active">projects</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            @include('backend.message.flash')

            <div class="row">

                @if(helperPermission()['isAdd'])
                @if($allowAdd)

                    <div class="col-md-12">
                        @if(\Request::segment(3)=='edit')
                            @include('backend.careers.edit')
                        @else
                            @include('backend.careers.add')
                        @endif

                    </div>
                    @endif

                    <div class="col-md-12" id="listing">
                        @else
                            <div class="col-md-12" id="listing">
                                @endif
                                <div class="box box-default">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Job</h3>
                                      
                                    </div>
                                    <div class="box-body">
                                        <table id="example1" class="table table-striped table-bordered table-hover table-responsive">
                                            <thead>
                                            <tr>
                                                <th style="width: 10px;">S.N</th>
                                                <th>Title</th>
                                                <th>Salary</th>
                                                <th>Working Hours</th>
                                                <th >Short Description</th>
                                                <th >Description</th>
                                                <th >Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i = 1;?>
                                            @forelse($jobs as $job)
                                                <tr>
                                                    <th scope=row>{{$i}}</th>
                                                    <td>{{$job->title}}</td>
                                                   
                                                    <td>{{$job->salary}}</td>
                                                  
                                                    <td>{{$job->working_hours}}</td>
                                                    <td>{{$job->short_description}}</td>
                                                    <td>{!! $job->description !!}</td>

                                            
                                                    


                                                   

                                                    <td class="text-right">
                                                        @if($allowEdit)
                                                            <a href="{{route('careers.edit',[$job->id])}}"
                                                               class="text-info btn btn-xs btn-default" data-toggle="tooltip"
                                                               data-placement="top" title="Edit">
                                                                <i class="fa fa-pencil-square-o"></i>
                                                            </a>&nbsp;
                                                        @endif

                                                        @if($allowDelete)
                                                            {!! Form::open(['method' => 'DELETE', 'route'=>['careers.destroy',
                                                                $job->id],'class'=> 'inline']) !!}
                                                            <button type="submit"
                                                                    class="btn btn-danger btn-xs deleteButton actionIcon"
                                                                    data-toggle="tooltip"
                                                                    data-placement="top" title="Delete"
                                                                    onclick="javascript:return confirm('Are you sure you want to delete?');">
                                                                <i class="fa fa-trash-o"></i>
                                                            </button>

                                                            {!! Form::close() !!}
                                                        @endif

                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            @empty
                                            @endforelse
                                            </tbody>
                                        </table>

                                    </div>

                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>

                           
                    </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
  
    <!-- /.content-wrapper -->

@endsection