@extends('backend.layouts.app')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Settings
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> {{trans('app.dashboard')}}</a></li>
      
                <li class="active">settings</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            @include('backend.message.flash')

            <div class="row">

                @if(helperPermission()['isAdd'])
                <div class="col-md-12">
                                    @if(\Request::segment(3)=='edit')
                                        @include('backend.settings.edit')
                                    @endif

                                </div>
                    <div class="col-md-12" id="listing">
                        @else
                            <div class="col-md-12" id="listing">
                                @endif
                                <div class="box box-default">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Settings</h3>
                                      
                                    </div>
                                    <div class="box-body">
                                        <table id="example1" class="table table-striped table-bordered table-hover table-responsive">
                                            <thead>
                                            <tr>
                                            <th>S.N</th>
                                                
                                                <th>Logo</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Facebook</th>
                                                <th>Youtube</th>
                                                <th>Twitter</th>
                                                <th>LinkedIn</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i = 1;?>
                                            
                                                <tr>
                                                <th scope=row>{{$i}}</th>
                                                    <td><img src="{{asset('/storage/frontend/img/'.$settings[0]->logo)}}" height=50px alt="" srcset=""></td>


                                                    <td>{{$settings[0]->phone}}</td>
                                                    <td>{{$settings[0]->email}}</td>
                                                    <td>{{$settings[0]->address}}</td>
                                                    <td>{{$settings[0]->facebook}}</td>
                                                    <td>{{$settings[0]->youtube}}</td>
                                                    <td>{{$settings[0]->twitter}}</td>
                                                    <td>{{$settings[0]->linkedin}}</td>
                                                   
                                                   
                                                    

                                                    <td class="text-right">
                                                     
                                                        <a href="{{route('settings.edit',[$settings[0]->id])}}"
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