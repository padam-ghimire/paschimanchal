@extends('backend.layouts.app')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Services
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> {{trans('app.dashboard')}}</a></li>
      
                <li class="active">services</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            @include('backend.message.flash')

            <div class="row">

                @if(helperPermission()['isAdd'])

                    <div class="col-md-12" id="listing">
                        @else
                            <div class="col-md-12" id="listing">
                                @endif
                                <div class="box box-default">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Services</h3>
                                        <?php

                                        $permission = helperPermissionLink('services', 'services');

                                        $allowEdit = $permission['isEdit'];

                                        $allowDelete = $permission['isDelete'];

                                        $allowAdd = $permission['isAdd'];
                                        ?>
                                    </div>
                                    <div class="box-body">
                                        <table id="example1" class="table table-striped table-bordered table-hover table-responsive">
                                            <thead>
                                            <tr>
                                                <th style="width: 10px;">S.N</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th >Image</th>

                                                <th>Design</th>

                                                <th>Deployment</th>
                                                   
                                                    <th>Testing</th>
                                                    <th>Support</th>
                                            
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i = 1;?>
                                            @forelse($services as $service)
                                                <tr>
                                                    <th scope=row>{{$i}}</th>
                                                    <td>{{$service->title}}</td>
                                                    <td>{!! $service->description !!}</td>
                                                    <td><img src="{{asset('/storage/uploads/images/services/'.$service->image)}}" height=100px alt="" srcset=""></td>
                                                    <td>{{$service->design}}</td>
                                                    <td>{{$service->deployment}}</td>
                                                    <td>{{$service->testing}}</td>
                                                    <td>{{$service->support}}</td>
                                            


                                                    <td class="text-center">
                                                        @if($service->status == 'active')
                                                            <a  class="label label-success stat" href="{{url('services/status',$service->id)}}">
                                                                <strong class="stat"> {{trans('app.active')}}
                                                                </strong>
                                                            </a>

                                                        @elseif($service->status == 'inactive')
                                                            <a class="label label-danger stat" href="{{url('service/status',$service->id)}}">
                                                                <strong class="stat"> {{trans('app.inactive')}}
                                                                </strong>
                                                            </a>
                                                        @endif
                                                    </td>

                                                    <td class="text-right">
                                                        @if($allowEdit)
                                                            <a href="{{route('services.edit',[$service->id])}}"
                                                               class="text-info btn btn-xs btn-default" data-toggle="tooltip"
                                                               data-placement="top" title="Edit">
                                                                <i class="fa fa-pencil-square-o"></i>
                                                            </a>&nbsp;
                                                        @endif

                                                        @if($allowDelete)
                                                            {!! Form::open(['method' => 'DELETE', 'route'=>['services.destroy',
                                                                $service->id],'class'=> 'inline']) !!}
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

                            @if($allowAdd)

                                <div class="col-md-3">
                                    @if(\Request::segment(3)=='edit')
                                        @include('backend.services.edit')
                                    @else
                                        @include('backend.services.add')
                                    @endif

                                </div>
                            @endif

                    </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->

@endsection