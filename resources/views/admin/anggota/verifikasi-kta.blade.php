@extends('layouts.admin')
@section('title', 'Admin')
@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="page-title">
            <div class="pull-left">
                <h1 class="title">Verifikasi kTA </h1>
            </div>
            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="fa fa-home"></i>Home </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.anggota.index') }}">semua Data</a>
                    </li>
                    <li class="active">
                        <strong>Verifikasi kTA</strong>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-lg-12">
        <section class="box">
            <div class="content-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="table-responsive">
                            <table id="example-1" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>NIM</th>
                                        <th>Nama Lengkap</th>
                                        <th>Rayon</th>
                                        <th>Fakultas</th>
                                        <th>Program Studi</th>
                                        <th>Angkatan Mapaba</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($anggota_verifikasi as $anggota)
                                        <tr>
                                            <td>{{ $anggota->nim }}</td>
                                            <td>{{ $anggota->nama_lengkap }}</td>
                                            <td>{{ $anggota->rayon->nama }}</td>
                                            <td>{{ $anggota->fakultas->nama }}</td>
                                            <td>{{ $anggota->prodi->nama }}</td>
                                            <td>{{ $anggota->angkatan_mapaba->tahun }}</td>
                                            <td><span>{{ $anggota->status == 1 ? 'Diterima': ($anggota->status == 0 ? 'Belum ditentukan' : 'Ditolak') }}</span></td>
                                            <td>
                                                <a href="{{route('admin.anggota.show', $anggota->id)}}" class="btn btn-info">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <form action="{{ route('admin.anggota.verifikasi-kta.handle') }}" method="POST" enctype="multipart/form-data"> @csrf <input type="hidden" name="id" value="{{ $anggota->id }}">
                                                    <button type="submit" name="status" value="1" class="btn btn-success">
                                                        <i class="fa fa-check"></i>
                                                    </button>
                                                    <button type="submit" name="status" value="2" class="btn btn-orange">
                                                        <i class="fa fa-close"></i>
                                                    </button>
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="modal fade" id="ultraModal-8">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 id="ajax-title" class="modal-title"></h4>
                </div>
                <div id="ajax-content" class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function AjaxModalContent() {
            jQuery('#ultraModal-8').modal('show', {
                backdrop: 'static'
            });
            $('#ajax-title').text($(this).data('title'))
            $('#ajax-content').text('awd')
            jQuery.ajax({
                url: "data/ajax-modal-content.txt",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    jQuery('#ultraModal-8 .modal-body').html(response);
                }
            });
        }
    </script>
@endsection
