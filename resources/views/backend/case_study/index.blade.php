@extends('backend.layouts.app')
@section('content')
<?php

$permission = helperPermissionLink('case_study', 'case_study');

$allowEdit = $permission['isEdit'];

$allowDelete = $permission['isDelete'];

$allowAdd = $permission['isAdd'];
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
              Case Study
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> {{trans('app.dashboard')}}</a></li>
      
                <li class="active">case study</li>
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
                                @include('backend.case_study.edit')
                            @else
                                @include('backend.case_study.add')
                            @endif

                        </div>
                        @endif
                    <div class="col-md-12" id="listing">
                        @else
                            <div class="col-md-12" id="listing">
                                @endif
                                <div class="box box-default">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Case Study</h3>
                                    
                                    </div>
                                    <div class="box-body">
                                        <table id="example1" class="table table-striped table-bordered table-hover table-responsive">
                                            <thead>
                                            <tr>
                                                <th style="width: 10px;">S.N</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Description</th>
                                               
                                                   
                                            
                                                <th style="width: 10px"
                                                    class="text-right">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i = 1;?>
                                            @forelse($cases as $case)
                                                <tr>
                                                    <th scope=row>{{$i}}</th>
                                                    <td>{{$case->title}}</td>
                                                  
                                                    <td><img src="{{asset('/storage/uploads/images/case_study/'.$case->image)}}" height=100px alt="" srcset=""></td>

                                                    <td>{!! $case->description !!}</td>


                                                    <td class="text-right">
                                                        @if($allowEdit)
                                                            <a href="{{route('case_study.edit',[$case->id])}}"
                                                               class="text-info btn btn-xs btn-default" data-toggle="tooltip"
                                                               data-placement="top" title="Edit">
                                                                <i class="fa fa-pencil-square-o"></i>
                                                            </a>&nbsp;
                                                        @endif

                                                        @if($allowDelete)
                                                            {!! Form::open(['method' => 'DELETE', 'route'=>['case_study.destroy',
                                                                $case->id],'class'=> 'inline']) !!}
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