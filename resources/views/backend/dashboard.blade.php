@extends('backend.layouts.app')

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>

                Dashboard

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-list-alt"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"><a href="services" style="color: #0a0a0a">TOTAL SERVICES</a></span>
                            <span class="info-box-number">{{$services}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-list-alt"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"><a href="/news" style="color:#0a0a0a; ">TOTAL NEWS</a></span>
                            <span class="info-box-number">{{$news}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-list-alt"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"><a href="/queries" style="color:#0a0a0a; ">TOTAL QUERIES</a></span>
                            <span class="info-box-number">{{$queries}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-list-alt"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"><a href="/slider" style="color:#0a0a0a; ">TOTAL SLIDERS</a></span>
                            <span class="info-box-number">{{$sliders}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                   <!-- /.col -->
                   <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-list-alt"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"><a href="/board_members" style="color:#0a0a0a; ">TOTAL BOARD MEMBERS</a></span>
                            <span class="info-box-number">{{$boardMembers}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-list-alt"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"><a href="/mission" style="color:#0a0a0a; ">TOTAL MISSIONS</a></span>
                            <span class="info-box-number">{{$missions}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-list-alt"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"><a href="/projects" style="color:#0a0a0a; ">TOTAL PROJECTS</a></span>
                            <span class="info-box-number">{{$projects}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-list-alt"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"><a href="/clients">TOTAL CLIENTS</a></span>
                            <span class="info-box-number">{{$clients}}<small></small></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-list-alt"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"><a href="whyWe" style="color:#0a0a0a; ">TOTAL WHY WE?</a></span>
                            <span class="info-box-number">{{$whyWes}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="clearfix visible-sm-block"></div>

            </div>
        </section>
    </div>
@endsection