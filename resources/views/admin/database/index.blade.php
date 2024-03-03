@extends('layouts.admin')
@section('title', 'Admin')

@section('content')
    <!-- START CONTAINER -->

    <!-- START CONTENT -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="page-title">
            <div class="pull-left">
                <h1 class="title">Data Anggota PMII</h1>
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i>Home</a></li>
                    <li class="active">
                        <strong>Semua Data</strong>
                    </li>
                </ol>
            </div>
        </div>
    </div>


    <div class="clearfix"></div>
    <div class="col-lg-12">
        <section class="box">
            <header class="panel_header">
                <div class="actions panel_actions pull-right">
                    <i class="box_toggle fa fa-chevron-down"></i>
                    <i class="box_setting fa fa-cog" data-toggle="modal" href=""></i>
                    <i class="box_close fa fa-times"></i>
                </div>
            </header>
            <div class="content-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="table-responsive">
                            <table id="example-1" class="table table-striped dt-responsive display" cellspacing="0"
                                width="100%">
                                <thead>
                                    <tr>
                                        <th>Nim</th>
                                        <th>Nama Lengkap</th>
                                        <th>Rayon</th>
                                        <th>Fakultas</th>
                                        <th>Program Studi</th>
                                        <th>Angkatan Mapaba</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2026027</td>
                                        <td>Saeful Mu'minin</td>
                                        <td>Rayon Hamzah</td>
                                        <td>FTIK</td>
                                        <td>2020</td>
                                        <td>Teknik Informatika</td>
                                        <td>
                                            <a href="{{route('admin.database.show')}}"
                                                class="btn border-none rounded-sm btn-info px-4 py-2">
                                                <i class="fa fa-eye"></i> Lihat Lengkap
                                            </a>
                                            <a href="{{route('admin.database.edit')}}"
                                                class="btn border-none rounded-sm px-4 py-2 btn-warning">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                            <a href="" class="btn border-none rounded-sm px-4 py-2 btn-danger">
                                                <i class="fa fa-trash"></i> Hapus
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <div class="col-md-12">
        <div class="r1_maingraph db_box">
            <span class="pull-left">
                <i class="icon-purple fa fa-square icon-xs"></i>&nbsp; <small>PAGE VIEWS</small>&nbsp;
                &nbsp; <i class="fa fa-square icon-xs icon-primary"></i>&nbsp; <small>UNIQUE
                    VISITORS</small>
            </span>
            <div id="db_morris_area_graph" style="height: 272px; width: 100%"></div>
        </div>
    </div>

    <!-- End .row -->
    </div>
    </section>



@endsection
