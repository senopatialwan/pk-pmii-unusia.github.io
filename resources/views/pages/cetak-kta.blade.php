@extends('layouts.pages')

@section('title', 'Cetak KTA')

@section('content')
    <div class="login-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="login-items">
                        <div class="login-box">
                            <div class="login-content">
                                <div class="col-md-6 info">
                                    <a href="/">
                                        <img src="assets/img/pmii/logo-web.png" style="width: 15em" alt="Login" />
                                    </a>
                                    <h2>Salam Pergerakan!</h2>
                                    <p>Silahkan Melakukan Cetak Kartu Tanda Anggota <strong>Khusus</strong> Pergerakan
                                        Mahasiswa Islam Indonesia Komisariat dan Rayon Universitas Nahdlatul Ulama Indonesia
                                        Cabang Kabupaten Bogor.</p>
                                </div>
                                <div class="col-md-6 content">
                                    <h4>Cetak Kartu Tanda Anggota</h4>
                                    <form action="{{ route('cetak-kta.store') }}" method="post" enctype="multipart/form-data">
                                        @csrf
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
                                                    <input class="form-control" name="email" placeholder="Email" type="email" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            @error('nim')
                                                <div style="color: red">{{ $message }}</div>
                                            @enderror
                                            <div class="row">
                                                <div class="form-group">
                                                    <input class="form-control" name="nim" placeholder="Nomor Induk Mahasiswa"
                                                        type="text" required/>
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
                                                        <option value="" selected='selected' disabled>Pilih Angkatan Mapaba</option>
                                                        @foreach ($angkatan_mapaba as $angkatan_mapaba)
                                                            <option value="{{ $angkatan_mapaba->id }}">Angkatan {{ $angkatan_mapaba->tahun }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="row">
                                                <button type="submit">Cetak</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="sign-up">
                                        <p>Data tidak tersedia? silahkan melakukan <i><a href="{{route('pengajuan-kta')}}">Pengajuan
                                                    KTA</i></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
