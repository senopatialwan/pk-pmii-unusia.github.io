@extends('layouts.pages')
@section('title', 'Pengajuan KTA | PMII UNUSIA BOGOR')
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
                    <a href="/">
                      <img src="assets/img/pmii/logo-web.png" style="width: 15em" alt="Login" />
                    </a>
                    <p>
                      Lengkapi Formulir dan Dokumen Untuk Membuat Kartu Tanda Anggota PMII UNUSIA Cabang Kabupaten Bogor.
                      <strong>
                        <br />
                        <i>Informasimu akan disimpan dengan Aman </i></strong
                      >
                    </p>
                    <h5><b>Pastikan Mengisi Formulir Sesuai Ketentuan!</b></h5>
                    <ol style="color: red">
                      <li>Kesalahan Data Pada Dokumen Berakibat Penolakan</li>
                      <li>Pemalsuan Dokumen Berakibat Masuk Ke Daftar Blacklist</li>
                    </ol>
                  </div>
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
                          <button type="submit">Submit</button>
                        </div>
                      </div>
                    </form>
                    <div class="sign-up">
                      <p>Sudah terdata oleh Admin? <a href="{{route('cetak-kta')}}">Cetak KTA PMII</a></p>
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