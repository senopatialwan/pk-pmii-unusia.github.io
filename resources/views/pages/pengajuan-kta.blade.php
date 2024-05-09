@extends('layouts.pages')
@section('title', 'Pengajuan KTA | PMII UNUSIA BOGOR')

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
                  <p> Lengkapi Formulir dan Dokumen Untuk Membuat Kartu Tanda Anggota Khusus PMII UNUSIA Cabang Kabupaten Bogor. <strong>
                      <br />
                      <i>Informasimu akan disimpan dengan Aman </i>
                    </strong>
                  </p>
                  <h5>
                    <b>Pastikan Mengisi Formulir Sesuai Ketentuan!</b>
                  </h5>
                  <ol style="color: red">
                    <li>Kesalahan Data Pada Dokumen Berakibat Penolakan</li>
                    <li>Pemalsuan Dokumen Berakibat Masuk Ke Daftar Blacklist</li>
                  </ol>
                </div>
                <div class="col-md-6 content">
                    @if(session('message'))
                        <div class="mg-t-20 alert alert-{{ session('alert-type') }} tx-semibold">
                            {{ session('message') }}
                        </div>
                    @endif
                    <h4>Formulir Pengajuan KTA</h4>
                    <form action="{{ route('pengajuan-kta.upload') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- *Status --}}
                        <input type="hidden" name="status" value="0">

                        {{-- *Nama Lengkap --}}
                        <div class="col-lg-12 col-md-12">
                            @error('nama_lengkap')
                            <div style="color: red">{{ $message }}</div>
                            @enderror
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" type="text" required />
                                </div>
                            </div>
                        </div>

                        {{-- *Email --}}
                        <div class="col-lg-12 col-md-12">
                            @error('email')
                            <div style="color: red">{{ $message }}</div>
                            @enderror
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" name="email" placeholder="Email Aktif" type="email" required />
                                </div>
                            </div>
                        </div>

                        {{-- *NIM --}}
                        <div class="col-lg-12 col-md-12">
                            @error('nim')
                            <div style="color: red">{{ $message }}</div>
                            @enderror
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" name="nim" placeholder="Nomor Induk Mahasiswa" type="number" required />
                                </div>
                            </div>
                        </div>

                        {{-- *Alamat --}}
                        <div class="col-lg-12 col-md-12">
                            @error('alamat')
                            <div style="color: redt">{{ $message }}</div>
                            @enderror
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" name="alamat" placeholder="Alamat Lengkap" type="text" required />
                                </div>
                            </div>
                        </div>

                        {{-- *Nomor Telepon --}}
                        <div class="col-lg-12 col-md-12">
                            @error('nomor_telepon')
                            <div style="color: red">{{ $message }}</div>
                            @enderror
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" name="nomor_telepon" placeholder="Nomor Telepon" type="number" required />
                                </div>
                            </div>
                        </div>

                        {{-- *Rayon --}}
                        <div class="col-lg-12 col-md-12">
                            @error('rayon')
                            <div style="color: red">{{ $message }}</div>
                            @enderror
                            <div class="row">
                                <div class="form-group">
                                    <select class="form-control" name="rayon_id" required>
                                        <option value="" selected='selected' disabled>Pilih Rayon / Komisariat</option>
                                        @foreach ($rayon as $rayon)
                                            <option value="{{ $rayon->id }}">{{ $rayon->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        {{-- *Fakultas --}}
                        <div class="col-lg-12 col-md-12">
                            @error('fakultas_id')
                            <div style="color: red">{{ $message }}</div>
                            @enderror
                            <div class="row">
                                <div class="form-group">
                                    <select class="form-control" name="fakultas_id" required>
                                        <option value="" selected='selected' disabled>Pilih Fakultas</option>
                                        @foreach ($fakultas as $fakultas)
                                            <option value="{{ $fakultas->id }}">{{ $fakultas->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        {{-- *Prodi --}}
                        <div class="col-lg-12 col-md-12 mb-20">
                            @error('prodi_id')
                            <div style="color: red">{{ $message }}</div>
                            @enderror
                            <div class="row">
                                <div class="form-group">
                                    <select class="form-control" name="prodi_id" required>
                                        <option value="" selected='selected' disabled>Pilih Program Studi</option>
                                        @foreach ($prodi as $prodi)
                                            <option value="{{ $prodi->id }}">{{ $prodi->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        {{-- *Angkatan Mapaba --}}
                        <div class="col-lg-12 col-md-12">
                            @error('angkatan_mapaba')
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

                        {{-- *DOKUMEN UPLOAD --}}
                        <h5 style="text-align: center">
                            <b>DOKUMEN UPLOAD</b>
                        </h5>

                        {{-- *Sertifikat Mapaba --}}
                        <div class="col-lg-12 col-md-12">
                            @error('sertifikat_mapaba')
                            <div style="color: red">{{ $message }}</div>
                            @enderror
                            <div class="row">
                                <div class="form-group">
                                    <i>Sertifikat Mapaba <b>PDF</b></i>
                                    <input class="form-control" name="sertifikat_mapaba" placeholder="Sertifikat Mapaba" type="file" accept="application/pdf" required />
                                </div>
                            </div>
                        </div>

                        {{-- *Foto --}}
                        <div class="col-lg-12 col-md-12">
                            @error('foto')
                            <div style="color: red">{{ $message }}</div>
                            @enderror
                            <div class="row">
                                <div class="form-group">
                                    <i>Foto Formal Memakai Atribut PMII (500x600 pixel) <b>JPG, JPEG, PNG</b></i>
                                    <input class="form-control" name="foto" placeholder="Foto" type="file" accept="image/png, image/jpeg, image/jpg" required />
                                </div>
                            </div>
                        </div>

                        {{-- *CV --}}
                        <div class="col-lg-12 col-md-12">
                            @error('cv')
                            <div style="color: red">{{ $message }}</div>
                            @enderror
                            <div class="row">
                                <div class="form-group">
                                    <i>Curriculum Vitae (CV) <b>PDF, DOCX, DOC</b></i>
                                    <input class="form-control" name="cv" placeholder="CV" type="file"  accept="application/pdf, .doc, .docx" required />
                                </div>
                            </div>
                        </div>

                        {{-- *KTM --}}
                        <div class="col-lg-12 col-md-12">
                            @error('ktm')
                            <div style="color: red">{{ $message }}</div>
                            @enderror
                            <div class="row">
                                <div class="form-group">
                                    <i>Kartu Tanda Mahasiswa (KTM) <b>JPG, JPEG, PNG</b></i>
                                    <input class="form-control" name="ktm" placeholder="KTM" type="file" accept="image/png, image/jpeg, image/jpg" required />
                                </div>
                            </div>
                        </div>

                        {{-- *Submit --}}
                        <div class="col-lg-12 col-md-12">
                            <div class="row">
                                <button type="submit">Kirim</button>
                            </div>
                        </div>
                    </form>
                    <div class="sign-up">
                        <p>Sudah terdata oleh Admin? <a href="{{ route('cetak-kta') }}">Cetak KTA PMII</a>
                        </p>
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
