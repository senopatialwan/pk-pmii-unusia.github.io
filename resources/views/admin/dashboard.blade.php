@extends('layouts.admin')
@section('title', 'Admin')

@section('content')
    <!-- START CONTAINER -->

    <!-- START CONTENT -->

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="page-title">
            <div class="pull-left">
                <h1 class="title">Dashboard Admin</h1>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-lg-12">
        <section class="box nobox">
            <div class="content-body">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="r4_counter db_box">
                            <i class="pull-left fa fa-thumbs-up icon-md icon-rounded icon-primary"></i>
                            <div class="stats">
                                <h4>
                                    <strong>450K</strong>
                                </h4>
                                <span>Blog Page Views</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="r4_counter db_box">
                            <i class="pull-left fa fa-user icon-md icon-rounded icon-orange"></i>
                            <div class="stats">
                                <h4>
                                    <strong>6243</strong>
                                </h4>
                                <span>New Visitors</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="r4_counter db_box">
                            <i class="pull-left fa fa-database icon-md icon-rounded icon-purple"></i>
                            <div class="stats">
                                <h4>
                                    <strong>1000</strong>
                                </h4>
                                <span>Database</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="r4_counter db_box">
                            <i class="pull-left fa fa-envelope icon-md icon-rounded icon-warning"></i>
                            <div class="stats">
                                <h4>
                                    <strong>20</strong>
                                </h4>
                                <span>Belum Terverifikasi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .row -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="r1_maingraph db_box">
                            <span class="pull-left">
                                <i class="icon-purple fa fa-square icon-xs"></i>&nbsp; <small>PAGE VIEWS</small>&nbsp;
                                &nbsp; <i class="fa fa-square icon-xs icon-primary"></i>&nbsp; <small>UNIQUE
                                    VISITORS</small>
                            </span>
                            <div id="db_morris_area_graph" style="height: 272px; width: 100%"></div>
                        </div>
                    </div>
                </div>
                <!-- End .row -->
            </div>
        </section>
    </div>
    </div>
@endsection
