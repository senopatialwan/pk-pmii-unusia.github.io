@extends('layouts.pages')
@section('title', 'Cetak KTA | PMII UNUSIA BOGOR')



@section('content')


    <!-- Start User Login
        ============================================= -->
    <div class="login-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="login-items">
                        <div class="login-box">
                            <div class="login-content">
                                <div class="col-md-6 info">
                                    <a href="index.html">
                                        <img src="assets/img/pmii/logo-web.png" style="width: 15em" alt="Login" />
                                    </a>
                                    <h2>Salam Pergerakan!</h2>
                                    <p>Silahkan Melakukan Cetak Kartu Tanda Anggota <strong>Khusus</strong> Pergerakan
                                        Mahasiswa Islam Indonesia Komisariat dan Rayon Universitas Nahdlatul Ulama Indonesia
                                        Cabang Kabupaten Bogor.</p>
                                </div>
                                <div class="col-md-6 content">
                                    <h4>Cetak Kartu Tanda Anggota</h4>
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
                                                    <input class="form-control" placeholder="Email" type="email" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="row">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Nomor Induk Mahasiswa"
                                                        type="text" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="row">
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="Tahun Angkatan Mapaba"
                                                        type="text" />
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
