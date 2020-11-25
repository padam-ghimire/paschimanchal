@extends('backend.layouts.app')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               About
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> {{trans('app.dashboard')}}</a></li>
      
                <li class="active">about</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            @include('backend.message.flash')

            <div class="row">

                @if(helperPermission()['isAdd'])
                <div class="col-md-12">
                                    @if(\Request::segment(3)=='edit')
                                        @include('backend.about.edit')
                                    @endif

                                </div>
                    <div class="col-md-12" id="listing">
                        @else
                            <div class="col-md-12" id="listing">
                                @endif
                                <div class="box box-default">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">About</h3>
                                       
                                    </div>
                                    <div class="box-body">
                                        <table id="example1" class="table table-striped table-bordered table-hover table-responsive">
                                            <thead>
                                            <tr>
                                                <th style="width: 10px;">S.N</th>
                                                <th>Description</th>
                                                <th style="width: 0px" 
                                                    class="text-right">Title</th>
                                                   
                                            
                                                <th style="width: 10px"
                                                    class="text-right">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i = 1;?>
                                            
                                                <tr>
                                                    <th scope=row>{{$i}}</th>
                                                    <td>{{$about[0]->description}}</td>
                                                    <td>{{$about[0]->title}}</td>
                                                   
                                                    

                                                    <td class="text-right">
                                                     
                                                        <a href="{{route('about.edit',[$about[0]->id])}}"
                                                               class="text-info btn btn-xs btn-default" data-toggle="tooltip"
                                                               data-placement="top" title="Edit">
                                                                <i class="fa fa-pencil-square-o"></i>
                                                            </a>&nbsp;
                                                      

                                                       
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