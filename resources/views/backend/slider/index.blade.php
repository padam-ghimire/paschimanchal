@extends('backend.layouts.app')
@section('content')
<?php

$permission = helperPermissionLink('slider', 'slider');

$allowEdit = $permission['isEdit'];

$allowDelete = $permission['isDelete'];

$allowAdd = $permission['isAdd'];
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Slider
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> {{trans('app.dashboard')}}</a></li>
      
                <li class="active">slider</li>
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
                    @include('backend.slider.edit')
                @else
                    @include('backend.slider.add')
                @endif

            </div>
            @endif

                    <div class="col-md-12" id="listing">
                        @else
                            <div class="col-md-12" id="listing">
                                @endif
                                <div class="box box-default">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Slider</h3>
                                     
                                    </div>
                                    <div class="box-body">
                                        <table id="example1" class="table table-striped table-bordered table-hover table-responsive">
                                            <thead>
                                            <tr>
                                                <th style="width: 10px;">S.N</th>
                                                <th>Title</th>
                                                <th style="width: 10px" 
                                                    class="text-right">Image</th>

                                                <th style="width: 10px" 
                                                    class="text-right">Status</th>
                                                   
                                            
                                                <th style="width: 10px"
                                                    class="text-right">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i = 1;?>
                                            @forelse($sliders as $slider)
                                                <tr>
                                                    <th scope=row>{{$i}}</th>
                                                    <td>{{$slider->title}}</td>
                                                    <td><img src="{{asset('/storage/uploads//images/slider/'.$slider->image)}}" height=100px alt="" srcset=""></td>
                                                    <td class="text-center">
                                                        @if($slider->status == 'active')
                                                            <a  class="label label-success stat" href="{{url('slider/status',$slider->id)}}">
                                                                <strong class="stat"> {{trans('app.active')}}
                                                                </strong>
                                                            </a>

                                                        @elseif($slider->status == 'inactive')
                                                            <a class="label label-danger stat" href="{{url('slider/status',$slider->id)}}">
                                                                <strong class="stat"> {{trans('app.inactive')}}
                                                                </strong>
                                                            </a>
                                                        @endif
                                                    </td>

                                                    <td class="text-right">
                                                        @if($allowEdit)
                                                            <a href="{{route('slider.edit',[$slider->id])}}"
                                                               class="text-info btn btn-xs btn-default" data-toggle="tooltip"
                                                               data-placement="top" title="Edit">
                                                                <i class="fa fa-pencil-square-o"></i>
                                                            </a>&nbsp;
                                                        @endif

                                                        @if($allowDelete)
                                                            {!! Form::open(['method' => 'DELETE', 'route'=>['slider.destroy',
                                                                $slider->id],'class'=> 'inline']) !!}
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