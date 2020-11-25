@extends('backend.layouts.app')
@section('content')
<?php

$permission = helperPermissionLink('why_we', 'why_we');

$allowEdit = $permission['isEdit'];

$allowDelete = $permission['isDelete'];

$allowAdd = $permission['isAdd'];
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
             Why We?
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> {{trans('app.dashboard')}}</a></li>
      
                <li class="active">why we?</li>
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
                        @include('backend.why_we.edit')
                    @else
                        @include('backend.why_we.add')
                    @endif

                </div>
                @endif
                    <div class="col-md-12" id="listing">
                        @else
                            <div class="col-md-12" id="listing">
                                @endif
                                <div class="box box-default">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Why We</h3>
                                      
                                    </div>
                                    <div class="box-body">
                                        <table id="example1" class="table table-striped table-bordered table-hover table-responsive">
                                            <thead>
                                            <tr>
                                                <th style="width: 10px;">S.N</th>
                                                <th>Title</th>
                                                <th>Sub title</th>
                                                <th>Description</th>

                      
                                
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i = 1;?>
                                            @forelse($whyWes as $whyWe)
                                                <tr>
                                                    <th scope=row>{{$i}}</th>
                                                    <td>{{$whyWe->title}}</td>
                                                    <td>{{$whyWe->sub_title}}</td>
                                                    <td>{!! $whyWe->description !!}</td>
                                                    <td class="text-center">
                                                        @if($whyWe->status == 'active')
                                                            <a  class="label label-success stat" href="{{url('whyWe/status',$whyWe->id)}}">
                                                                <strong class="stat"> {{trans('app.active')}}
                                                                </strong>
                                                            </a>

                                                        @elseif($whyWe->status == 'inactive')
                                                            <a class="label label-danger stat" href="{{url('whyWe/status',$whyWe->id)}}">
                                                                <strong class="stat"> {{trans('app.inactive')}}
                                                                </strong>
                                                            </a>
                                                        @endif
                                                    </td>

                                                    <td class="text-right">
                                                        @if($allowEdit)
                                                            <a href="{{route('whyWe.edit',[$whyWe->id])}}"
                                                               class="text-info btn btn-xs btn-default" data-toggle="tooltip"
                                                               data-placement="top" title="Edit">
                                                                <i class="fa fa-pencil-square-o"></i>
                                                            </a>&nbsp;
                                                        @endif

                                                        @if($allowDelete)
                                                            {!! Form::open(['method' => 'DELETE', 'route'=>['whyWe.destroy',
                                                                $whyWe->id],'class'=> 'inline']) !!}
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