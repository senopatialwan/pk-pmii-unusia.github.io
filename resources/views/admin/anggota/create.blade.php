@extends('layouts.admin')
@section('title', 'Admin')

@section('content')
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="page-title">
          <div class="pull-left">
              <h1 class="title">Tambah Data Anggota </h1>
          </div>

          <div class="pull-right hidden-xs">
              <ol class="breadcrumb">
                  <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-home"></i>Home</a></li>
                  <li><a href="{{route('admin.anggota.index')}}">semua Data</a></li>
                  <li class="active">
                      <strong>Tambah Data </strong>
                  </li>
              </ol>
          </div>
      </div>
  </div>

  <div class="clearfix"></div>

  <div class="col-md-6 content">
    <h4>Formulir Pengajuan KTA</h4>
    <form action="#">
      <div class="col-lg-12 col-md-12">
        <div class="row">
          <div class="form-group">
            <input class="form-control" placeholder="Nama Lengkap" type="text" />
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="row">
          <div class="form-group">
            <input class="form-control" placeholder="Email Aktif" type="email" />
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="row">
          <div class="form-group">
            <input class="form-control" placeholder="Nomor Induk Mahasiswa" type="text" />
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="row">
          <div class="form-group">
            <input class="form-control" placeholder="Pengurus Rayon / Komisariat" type="email" />
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="row">
          <div class="form-group">
            <input class="form-control" placeholder="Fakultas" type="text" />
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="row">
          <div class="form-group">
            <input class="form-control" placeholder="Program Studi" type="email" />
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="row">
          <div class="form-group">
            <input class="form-control" placeholder="Alamat Lengkap" type="text" />
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="row">
          <div class="form-group">
            <input class="form-control" placeholder="Angkatan Mapaba" type="email" />
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="row">
          <div class="form-group">
            <input class="form-control" placeholder="Nomor Telepon" type="email" />
          </div>
        </div>
      </div>
      <h5 style="text-align: center"><b>DOKUMEN UPLOAD</b></h5>
      <div class="col-lg-12 col-md-12">
        <div class="row">
          <div class="form-group">
            <i>Sertifikat Mapaba*</i>
            <input class="form-control" placeholder="Sertifikat Mapaba" type="file" />
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="row">
          <div class="form-group">
            <i>Foto Formal Memakai Atribut PMII*</i>
            <input class="form-control" placeholder="Foto" type="file" />
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="row">
          <div class="form-group">
            <i>Curriculum Vitae (CV)*</i>
            <input class="form-control" placeholder="CV" type="file" />
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="row">
          <div class="form-group">
            <i>Kartu Tanda Mahasiswa (KTM)*</i>
            <input class="form-control" placeholder="KTM" type="file" />
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="row">
          <button type="submit">Simpan </button>
        </div>
      </div>
    </form>
  </div>
@endsection