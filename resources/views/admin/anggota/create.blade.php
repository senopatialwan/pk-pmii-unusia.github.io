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
                    <li>
                        <a href="{{route('admin.dashboard')}}">
                            <i class="fa fa-home"></i>Home </a>
                    </li>
                    <li>
                        <a href="{{route('admin.anggota.index')}}">semua Data</a>
                    </li>
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
                @error('nama_lengkap')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" type="text" required/>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                @error('email')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" name="email" placeholder="Email Aktif" type="email" required/>
                    </div>
                </div>

            </div>
            <div class="col-lg-12 col-md-12">
                @error('nim')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" name="nim" placeholder="Nomor Induk Mahasiswa" type="number" required/>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                @error('rayon_id')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <div class="row">
                    <div class="form-group">
                        <select class="form-control" name="rayon_id" required>
                            <option selected disabled>Pilih Pengurus Rayon / Komisariat</option>
                            @foreach ($rayon as $rayon)
                                <option value="{{ $rayon->id }}">{{ $rayon->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                @error('fakultas_id')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <div class="row">
                    <div class="form-group">
                        <select class="form-control" name="fakultas_id" required>
                            <option selected disabled>Pilih Fakultas</option>
                            @foreach ($fakultas as $fakultas)
                                <option value="{{ $fakultas->id }}">{{ $fakultas->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                @error('prodi_id')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <div class="row">
                    <div class="form-group">
                        <select class="form-control" name="prodi_id" required>
                            <option selected disabled>Pilih Program Studi</option>
                            @foreach ($prodi as $prodi)
                                <option value="{{ $prodi->id }}">{{ $prodi->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                @error('alamat')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" name="alamat" placeholder="Alamat Lengkap" type="text" required/>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                @error('angkatan_mapaba_id')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <div class="row">
                    <div class="form-group">
                        <select class="form-control" name="angkatan_mapaba_id" required>
                            <option selected disabled>Pilih Angkatan Mapaba</option>
                            @foreach ($angkatan_mapaba as $angkatan_mapaba)
                                <option value="{{ $angkatan_mapaba->id }}">Angkatan {{ $angkatan_mapaba->tahun }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                @error('nomor_telepon')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <div class="row">
                    <div class="form-group">
                        <input class="form-control" name="nomor_telepon" placeholder="Nomor Telepon" type="number" required/>
                    </div>
                </div>
            </div>
            <h5 style="text-align: center">
                <b>DOKUMEN UPLOAD</b>
            </h5>
            <div class="col-lg-12 col-md-12">
                @error('sertifikat_mapaba')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <div class="row">
                    <div class="form-group">
                        <i>Sertifikat Mapaba* <b>(PDF)</b></i>
                        <input class="form-control" name="sertifikat_mapaba" placeholder="Sertifikat Mapaba" type="file" accept="application/pdf" required/>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                @error('sertifikat_mapaba')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <div class="row">
                    <div class="form-group">
                        <i>Foto Formal Memakai Atribut PMII*</i>
                        <input class="form-control" name="foto" placeholder="Foto" type="file" accept="image/png, image/jpeg, image/jpg" required/>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                @error('cv')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <div class="row">
                    <div class="form-group">
                        <i>Curriculum Vitae (CV)*</i>
                        <input class="form-control" name="cv" placeholder="CV" type="file" accept="application/pdf, .doc, .docx" required/>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                @error('ktm')
                    <div style="color: red">{{ $message }}</div>
                @enderror
                <div class="row">
                    <div class="form-group">
                        <i>Kartu Tanda Mahasiswa (KTM)*</i>
                        <input class="form-control" name="ktm" placeholder="KTM" type="file" accept="image/png, image/jpeg, image/jpg" required/>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="row">
                    <button type="submit">Simpan</button>
                </div>
            </div>
        </form>
    </div>
@endsection
