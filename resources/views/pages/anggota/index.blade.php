@extends('layouts.pages')
@section('title', 'Database | PMII UNUSIA BOGOR')

@section('content')

<div id="database" class="about-area companies-area text-center bg-gray default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 info">
                <h2> ANGGOTA KOMISARIAT & RAYON <br /> PMII UNUSIA KABUPATEN BOGOR </h2>
                <p> Pergerakan Mahasiswa Islam Indonesia Komisariat Universitas Nahdlatul Ulama Indonesia Cabang Kabupaten Bogor Memiliki <b>1 Kepengurusan Komisariat</b> beserta <b>KOPRI Komisariat</b> & Memiliki <b>5 Rayon Aktif</b> beserta <b>KOPRI Rayon</b> dengan Total Anggota Sebanyak .... </p>
                <div class="fun-facts">
                    <h3>KELUARGA BESAR KAMI</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="clients-items owl-carousel owl-theme text-center">
                                <div class="single-item">
                                    <a href="https://pmii.id">
                                        <img src="assets/img/pmii/logo-pmii.png" style="width: 10em" alt="PMII" />
                                    </a>
                                </div>
                                @foreach ($rayon as $item)
                                    <div class="single-item">
                                        <a href="{{ route('anggota.show', $item->slug) }}">
                                            <img src="assets/img/pmii/{{ $item->id }}.png" style="width: 7em " alt="{{ $item->nama }}" />
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
