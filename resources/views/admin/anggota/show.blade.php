@extends('layouts.admin')
@section('title', 'Admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title">
                    <h1 class="title">Detail-anggota</h1>
                    <ol class="breadcrumb">
                        <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="{{route('admin.anggota.index')}}">semua Data</a></li>
                        <li class="active"><strong>Data Anggota</strong></li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="row">
            <h4 class="text-center">Detail Data anggota</h4>
            <div class="col-md-6">
                <form action="#">
                    <div class="form-group">
                        <input class="form-control" placeholder="Nama Lengkap" type="text" />
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Email Aktif" type="email" />
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Nomor Induk Mahasiswa" type="text" />
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Pengurus Rayon / Komisariat" type="text" />
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Fakultas" type="text" />
                    </div>
                </form>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <input class="form-control" placeholder="Program Studi" type="text" />
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Alamat Lengkap" type="text" />
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Angkatan Mapaba" type="text" />
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Nomor Telepon" type="text" />
                </div>
            </div>

            <div class="col-md-12">
                <h5 style="text-align: center"><b>Sertifikat Mapaba</b></h5>
                <embed src="{{ asset('assets/file/Surat pernyataan ketua pelaksana.pdf') }}" type="application/pdf" width="100%" height="500px" />
            </div>

            <div class="col-lg-3 col-sm-6 col-md-4">
                <p>Foto Formal Memakai Atribut PMII</p>
                <div class="team-member">
                    <div class="thumb">
                        <img class="img-responsive" src="{{asset('assets/images/pmii/alwan-2.jpeg')}}" />
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <h5 style="text-align: center"><b>Curriculum Vitae (CV)</b></h5>
                <embed src="{{ asset('assets/file/Surat pernyataan ketua pelaksana.pdf') }}" type="application/pdf" width="100%" height="500px" />
            </div>
            <div class="col-md-12">
                <h5 style="text-align: center"><b>Kartu Tanda Mahasiswa (KTM)*</b></h5>
                <embed src="{{ asset('assets/file/Surat pernyataan ketua pelaksana.pdf') }}" type="application/pdf" width="100%" height="500px" />
            </div>
        </div>
    </div>
@endsection