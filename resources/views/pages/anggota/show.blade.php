@extends('layouts.pages')
@section('title', 'Database | PMII UNUSIA BOGOR')

@section('content')
    <div class="login-area bg-gray">
        <div class="container">
            <div class="row mg-50">
                <div class="col-md-8 col-md-offset-2">
                    <div class="login-items">
                        <div class="login-box">
                            <div class="login-content">
                                <table class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>NIM</th>
                                            <th>Nama Lengkap</th>
                                            <th>Prodi</th>
                                            <th>Angkatan Mapaba</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($anggota as $item)
                                            <tr>
                                                <td>{{ $item->nim }}</td>
                                                <td>{{ $item->nama_lengkap }}</td>
                                                <td>{{ $item->prodi->nama }}</td>
                                                <td>{{ $item->angkatan_mapaba->tahun }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
