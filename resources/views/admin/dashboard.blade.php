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
                            <i class="pull-left fa fa-user icon-md icon-rounded icon-orange"></i>
                            <div class="stats">
                                <h4>
                                    <strong>6243</strong>
                                </h4>
                                <span>Total Pengunjung</span>
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
                                <span>Data Anggota PMII UNUSIA</span>
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
                                <span>KTA Belum Terverifikasi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
