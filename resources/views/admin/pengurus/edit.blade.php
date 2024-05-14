@extends('layouts.admin')
@section('title', 'Edit Data Pengurus')

@section('content')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="page-title">
        <div class="pull-left">
            <h1 class="title">Edit Data Pengurus</h1>
        </div>

        <div class="pull-right hidden-xs">
            <ol class="breadcrumb">
                <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="{{ route('admin.pengurus.index') }}">Semua Data</a></li>
                <li class="active"><strong>Edit Data</strong></li>
            </ol>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="col-md-12 content bg-white">
    <form action="{{ route('admin.pengurus.update', $pengurus->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Foto Profil Pengurus</label>
                    <input id="image" name="image" class="form-control" type="file" required/>
                </div>

                <div class="form-group">
                    <label for="nama-lengkap">Nama Lengkap</label>
                    <input id="nama-lengkap" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" type="text" value="{{ $pengurus->nama_lengkap }}" required/>
                </div>

                @error('email')
                    <div style="color: red">
                        {{ $message }}
                    </div>
                @enderror
                <div class="form-group">
                    <label for="email-aktif">Email Aktif</label>
                    <input id="email-aktif" name="email" class="form-control" placeholder="Email Aktif" type="email" value="{{ $pengurus->email }}" required/>
                </div>

                <div class="form-group">
                    <label for="category_id">Kategori Pengurus</label>
                    <select id="category_id" name="category_id" class="form-control" required>
                        <option value="">Pilih Kategori</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $pengurus->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <select id="jabatan" name="jabatan" class="form-control" required>
                        <!-- Option jabatan akan di-generate menggunakan JavaScript -->
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="link-facebook">Link Facebook</label>
                    <input id="link-facebook" name="facebook" class="form-control" placeholder="Link Facebook" type="text" value="{{ $pengurus->facebook }}" />
                </div>

                <div class="form-group">
                    <label for="link-instagram">Link Instagram</label>
                    <input id="link-instagram" name="instagram" class="form-control" placeholder="Link Instagram" type="text" value="{{ $pengurus->instagram }}" />
                </div>

                <div class="form-group">
                    <label for="link-twitter">Link Twitter</label>
                    <input id="link-twitter" name="twitter" class="form-control" placeholder="Link Twitter" type="text" value="{{ $pengurus->twitter }}" />
                </div>

                <div class="form-group">
                    <label for="link-linkedin">Link LinkedIn</label>
                    <input id="link-linkedin" name="linkedin" class="form-control" placeholder="Link LinkedIn" type="text" value="{{ $pengurus->linkedin }}" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary w-100 p-3">Simpan Perubahan</button>
            </div>
        </div>
    </form>
</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // Function to populate jabatan options based on selected category
        $('#category_id').change(function() {
            var category_id = $(this).val();
            var jabatan_select = $('#jabatan');
            // Clear previous options
            jabatan_select.empty();
            // Add default option
            jabatan_select.append($('<option>', {
                value: '',
                text: 'Pilih Jabatan'
            }));
            // Add options based on selected category
            if (category_id == 1) { // Kategori Komisariat
                var komisariat_jabatans = [
                    'Ketua Komisariat',
                    'Sekretaris Umum',
                    'Bendahara Umum',
                    'Wakil Ketua 1',
                    'Wakil Ketua 2',
                    'Wakil Ketua 3',
                    'Sekretaris Wakil Ketua 1',
                    'Sekretaris Wakil Ketua 2',
                    'Sekretaris Wakil Ketua 3',
                    'Wakil Bendahara Umum'
                ];
                komisariat_jabatans.forEach(function(jabatan) {
                    jabatan_select.append($('<option>', {
                        value: jabatan,
                        text: jabatan
                    }));
                });
            } else if (category_id == 2) { // Kategori Biro-biro
                var biro_jabatans = [
                    'Koordinator Biro Kaderisasi',
                    'Anggota Biro Kaderisasi',
                    'Koordinator Biro Hubungan Alumni & Kampus',
                    'Anggota Biro Hubungan Alumni & Kampus',
                    'Koordinator Biro Pengembangan Intelektual',
                    'Anggota Biro Pengembangan Intelektual',
                    'Koordinator Biro Media Massa',
                    'Anggota Biro Media Massa',
                    'Koordinator Biro Dakwah dan Kajian Islam',
                    'Anggota Biro Dakwah dan Kajian Islam'
                ];
                biro_jabatans.forEach(function(jabatan) {
                    jabatan_select.append($('<option>', {
                        value: jabatan,
                        text: jabatan
                    }));
                });
            }
            else if (category_id == 3) { // Kategori Biro-biro
                var biro_jabatans = [
                    'Ketua Kopri',
                    'Sekretaris Umum',
                    'Bendahara Umum',
                    'Wakil Ketua Kopri 1',
                    'Wakil Ketua  Kopri2',
                    'Wakil Ketua Kopri 3',
                    'Sekretaris Wakil Ketua 1',
                    'Sekretaris Wakil Ketua 2',
                    'Sekretaris Wakil Ketua 3',
                    'Wakil Bendahara Umum'
                ];
                biro_jabatans.forEach(function(jabatan) {
                    jabatan_select.append($('<option>', {
                        value: jabatan,
                        text: jabatan
                    }));
                });
            }
        });
    });
</script>
@endsection
