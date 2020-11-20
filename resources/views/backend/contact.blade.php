@extends('backend.layouts.app')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Contacts
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> {{trans('app.dashboard')}}</a></li>
      
                <li class="active">contact</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
           

            <div class="row">

                @if(helperPermission()['isAdd'])

                    <div class="col-md-12" id="listing">
                        @else
                            <div class="col-md-12" id="listing">
                                @endif
                                <div class="box box-default">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Queries</h3>
                                      
                                    </div>
                                    <div class="box-body">
                                        <table id="example1" class="table table-striped table-bordered table-hover table-responsive">
                                            <thead>
                                            <tr>
                                                <th>S.N</th>
                                                
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Queries</th>
                            
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i = 1;?>
                                            @foreach($queries as $query)
                                                <tr>
                                                    <th scope=row>{{$i}}</th>
                                                   <td>{{$query->name}}</td>
                                                    <td>{{$query->phone}}</td>
                                                    <td>{{$query->email}}</td>
                                                    <td>{{$query->queries}}</td>
                                                
                                                   
                                                    

                                                   
                                                </tr>
                                                <?php $i++; ?>
                                            @endforeach
                                            
                                      
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