@extends('layouts.admin')
@section('title', 'Admin')
@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="page-title">
            <div class="pull-left">
                <h1 class="title">Data Pengurus Komisariat</h1>
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
                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                    <i class="box_close fa fa-times"></i>
                </div>
            </header>
            <div class="content-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-md-4 music_genre">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('assets/images/pmii/alwan-2.jpeg') }}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Alwan abdurahman</h5>
                                        <p class="card-text">Ketua Pelaksana</p>
                                        <p class="card-text"><i class="fa fa-envelope"></i> alwanabdurrahman021@gmail.com
                                        </p>
                                        <ul class="social-icons list-inline w-auto">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i style="color: #3b5998;" class="fa fa-facebook "></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="fa fa-twitter text-info fa-lg"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="fa fa-instagram text-danger fa-lg"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="fa fa-linkedin text-primary fa-lg"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="text-center mt-3">
                                            <a href="{{route('admin.pengurus.edit')}}" class="btn btn-primary mr-2 rounded-md">Edit</a>
                                            <a class="btn btn-danger rounded-md">Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 music_genre">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('assets/images/pmii/alwan-2.jpeg') }}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Alwan abdurahman</h5>
                                        <p class="card-text">Ketua Pelaksana</p>
                                        <p class="card-text"><i class="fa fa-envelope"></i> alwanabdurrahman021@gmail.com
                                        </p>
                                        <ul class="social-icons list-inline w-auto">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i style="color: #3b5998;" class="fa fa-facebook "></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="fa fa-twitter text-info fa-lg"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="fa fa-instagram text-danger fa-lg"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="fa fa-linkedin text-primary fa-lg"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="text-center mt-3">
                                            <a href="{{route('admin.pengurus.edit')}}" class="btn btn-primary mr-2 rounded-md">Edit</a>
                                            <a class="btn btn-danger rounded-md">Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 music_genre">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('assets/images/pmii/alwan-2.jpeg') }}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Alwan abdurahman</h5>
                                        <p class="card-text">Ketua Pelaksana</p>
                                        <p class="card-text"><i class="fa fa-envelope"></i> alwanabdurrahman021@gmail.com
                                        </p>
                                        <ul class="social-icons list-inline w-auto">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i style="color: #3b5998;" class="fa fa-facebook "></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="fa fa-twitter text-info fa-lg"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="fa fa-instagram text-danger fa-lg"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="fa fa-linkedin text-primary fa-lg"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="text-center mt-3">
                                            <a href="{{route('admin.pengurus.edit')}}" class="btn btn-primary mr-2 rounded-md">Edit</a>
                                            <a class="btn btn-danger rounded-md">Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 music_genre">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('assets/images/pmii/alwan-2.jpeg') }}"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Alwan abdurahman</h5>
                                        <p class="card-text">Ketua Pelaksana</p>
                                        <p class="card-text"><i class="fa fa-envelope"></i> alwanabdurrahman021@gmail.com
                                        </p>
                                        <ul class="social-icons list-inline w-auto">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i style="color: #3b5998;" class="fa fa-facebook "></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="fa fa-twitter text-info fa-lg"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="fa fa-instagram text-danger fa-lg"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <i class="fa fa-linkedin text-primary fa-lg"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="text-center mt-3">
                                            <a href="{{route('admin.pengurus.edit')}}" class="btn btn-primary mr-2 rounded-md">Edit</a>
                                            <a class="btn btn-danger rounded-md">Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
