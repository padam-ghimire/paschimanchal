@extends('backend.layouts.app')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
              Projects
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

                    <div class="col-md-9" id="listing">
                        @else
                            <div class="col-md-12" id="listing">
                                @endif
                                <div class="box box-default">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Project</h3>
                                        <?php

                                        $permission = helperPermissionLink('projects', 'projects');

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
                                                <th>Name</th>
                                                <th>Client</th>
                                                <th>Area</th>
                                                <th >Year</th>
                                                <th >Contract Name</th>
                                                <th >Quantity</th>
                                                <th >Description</th>
                                                <th >Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i = 1;?>
                                            @forelse($projects as $project)
                                                <tr>
                                                    <th scope=row>{{$i}}</th>
                                                    <td>{{$project->name}}</td>
                                                   
                                                    <td>{{$project->client->name}}</td>
                                                    <td>{{$project->area}}</td>
                                                    <td>{{$project->year}}</td>
                                                    <td>{{$project->contract_name}}</td>
                                                    <td>{{$project->quantity}}</td>
                                                    <td>{!! $project->description !!}</td>
                                            
                                                    


                                                    <td class="text-center">
                                                        @if($project->status == 'active')
                                                            <a  class="label label-success stat" href="{{url('project/status',$project->id)}}">
                                                                <strong class="stat"> {{trans('app.active')}}
                                                                </strong>
                                                            </a>

                                                        @elseif($project->status == 'inactive')
                                                            <a class="label label-danger stat" href="{{url('project/status',$project->id)}}">
                                                                <strong class="stat"> {{trans('app.inactive')}}
                                                                </strong>
                                                            </a>
                                                        @endif
                                                    </td>

                                                    <td class="text-right">
                                                        @if($allowEdit)
                                                            <a href="{{route('projects.edit',[$project->id])}}"
                                                               class="text-info btn btn-xs btn-default" data-toggle="tooltip"
                                                               data-placement="top" title="Edit">
                                                                <i class="fa fa-pencil-square-o"></i>
                                                            </a>&nbsp;
                                                        @endif

                                                        @if($allowDelete)
                                                            {!! Form::open(['method' => 'DELETE', 'route'=>['projects.destroy',
                                                                $project->id],'class'=> 'inline']) !!}
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
                                        @include('backend.projects.edit')
                                    @else
                                        @include('backend.projects.add')
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