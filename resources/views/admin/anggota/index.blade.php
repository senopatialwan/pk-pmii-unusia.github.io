@extends('layouts.admin')
@section('title', 'Admin')
@section('content')
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="page-title">
			<div class="pull-left">
				<h1 class="title">Data Anggota PMII</h1>
			</div>
			<div class="pull-right hidden-xs">
				<ol class="breadcrumb">
					<li>
						<a href="{{ route('admin.dashboard') }}">
							<i class="fa fa-home"></i>Home </a>
					</li>
					<li class="active">
						<strong>Semua Data</strong>
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
						<form action="{{ route('admin.blogs.index') }}" method="GET" class="d-flex">
                            <div class="form-group flex-grow-1 mr-2">
                                <input type="text" name="search" class="form-control" placeholder="Search...">
                            </div>
                        </form>

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
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($anggota as $anggota)
                                        <tr>
                                            <td>{{ $anggota->nim }}</td>
                                            <td>{{ $anggota->nama_lengkap }}</td>
                                            <td>{{ $anggota->rayon->nama }}</td>
                                            <td>{{ $anggota->fakultas->nama }}</td>
                                            <td>{{ $anggota->prodi->nama }}</td>
                                            <td>{{ $anggota->angkatan_mapaba->tahun }}</td>
                                            <td>
                                                <a href="{{route('admin.anggota.show', $anggota->id)}}" class="btn border-none rounded-sm btn-info px-4 py-2">
                                                    <i class="fa fa-eye"></i> Lihat Lengkap </a>

                                                <a href="{{route('admin.anggota.edit')}}" class="btn border-none rounded-sm px-4 py-2 btn-warning">
                                                    <i class="fa fa-edit"></i> Edit </a>


                                                <form action="{{ route('admin.anggota.destroy', $anggota->id) }}"
                                                    method="POST" style="display: inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Apa benar akan dihapus?')">Delete</button>
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
@endsection
