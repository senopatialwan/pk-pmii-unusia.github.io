@extends('layouts.admin')
@section('title', 'Tambah Data Pengurus')

@section('content')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="page-title">
        <div class="pull-left">
            <h1 class="title">Tambah Data Pengurus</h1>
        </div>

        <div class="pull-right hidden-xs">
            <ol class="breadcrumb">
                <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="{{ route('admin.pengurus.index') }}">Semua Data</a></li>
                <li class="active"><strong>Tambah Data</strong></li>
            </ol>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-12 content bg-white">
    <form method="POST" action="{{ route('admin.pengurus.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Foto Profil Pengurus</label>
                    <input id="image" name="image" class="form-control" type="file" />
                </div>
                <div class="form-group">
                    <label for="nama-lengkap">Nama Lengkap</label>
                    <input id="nama-lengkap" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" type="text" />
                </div>
                <div class="form-group">
                    <label for="email-aktif">Email Aktif</label>
                    <input id="email-aktif" name="email" class="form-control" placeholder="Email Aktif" type="email" />
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input id="jabatan" name="jabatan" class="form-control" placeholder="Jabatan" type="text" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="link-facebook">Link Facebook</label>
                    <input id="link-facebook" name="facebook" class="form-control" placeholder="Link Facebook" type="text" />
                </div>
                <div class="form-group">
                    <label for="link-instagram">Link Instagram</label>
                    <input id="link-instagram" name="instagram" class="form-control" placeholder="Link Instagram" type="text" />
                </div>
                <div class="form-group">
                    <label for="link-twitter">Link Twitter</label>
                    <input id="link-twitter" name="twitter" class="form-control" placeholder="Link Twitter" type="text" />
                </div>
                <div class="form-group">
                    <label for="link-linkedin">Link LinkedIn</label>
                    <input id="link-linkedin" name="linkedin" class="form-control" placeholder="Link LinkedIn" type="text" />
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
@endsection
