@extends('layouts.admin')
@section('title', 'Admin')

@section('content')

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="page-title">
        <div class="pull-left">
            <h1 class="title">Tambah Data Pengurus</h1>
        </div>

        <div class="pull-right hidden-xs">
            <ol class="breadcrumb">
                <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="{{ route('admin.struktur-organisasi.index') }}">Semua Data</a></li>
                <li class="active"><strong>Tambah Data</strong></li>
            </ol>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-12 content bg-white">
    <form action="#">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama-lengkap">Nama Lengkap</label>
                    <input id="nama-lengkap" class="form-control" placeholder="Nama Lengkap" type="text" />
                </div>
                <div class="form-group">
                    <label for="email-aktif">Email Aktif</label>
                    <input id="email-aktif" class="form-control" placeholder="Email Aktif" type="email" />
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input id="jabatan" class="form-control" placeholder="Jabatan" type="text" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="link-facebook">Link Facebook</label>
                    <input id="link-facebook" class="form-control" placeholder="Link Facebook" type="text" />
                </div>
                <div class="form-group">
                    <label for="link-instagram">Link Instagram</label>
                    <input id="link-instagram" class="form-control" placeholder="Link Instagram" type="text" />
                </div>
                <div class="form-group">
                    <label for="link-twitter">Link Twitter</label>
                    <input id="link-twitter" class="form-control" placeholder="Link Twitter" type="text" />
                </div>
                <div class="form-group">
                    <label for="link-linkedin">Link LinkedIn</label>
                    <input id="link-linkedin" class="form-control" placeholder="Link LinkedIn" type="text" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary w-100 p-3">Simpan</button>
            </div>
        </div>
    </form>
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




@endsection
