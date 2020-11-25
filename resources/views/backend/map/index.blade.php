@extends('backend.layouts.app')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               <Map></Map>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> {{trans('app.dashboard')}}</a></li>
      
                <li class="active">map</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            @include('backend.message.flash')

            <div class="row">
            <?php

                    $permission = helperPermissionLink('map', 'map');

                    $allowEdit = $permission['isEdit'];



                    $allowAdd = $permission['isAdd'];
                    ?>
                @if(helperPermission()['isAdd'])
                @if($allowEdit)

                <div class="col-md-12">
                    @if(\Request::segment(3)=='edit')
                        @include('backend.map.edit')
                    @endif

                </div>
                @endif

                    <div class="col-md-9" id="listing">
                        @else
                            <div class="col-md-12" id="listing">
                                @endif
                                <div class="box box-default">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Map</h3>
                                     
                                    </div>
                                    <div class="box-body">
                                        <table id="example1" class="table table-striped table-bordered table-hover table-responsive">
                                            <thead>
                                            <tr>
                                                <th style="width: 10px;">S.N</th>
                                                <th>Map</th>
                                               
                                                   
                                            
                                                <th style="width: 10px"
                                                    class="text-right">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i = 1;?>
                                            
                                                <tr>
                                                    <th scope=row>{{$i}}</th>
                                                    <td><a href="{{$map[0]->link}}">See Map</a></td>
                                        
                                                   
                                                    

                                                    <td class="text-right">
                                                        @if($allowEdit)
                                                        <a href="{{route('map.edit',[$map[0]->id])}}"
                                                               class="text-info btn btn-xs btn-default" data-toggle="tooltip"
                                                               data-placement="top" title="Edit">
                                                                <i class="fa fa-pencil-square-o"></i>
                                                            </a>&nbsp;
                                                        @endif

                                                       
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            
                                      
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