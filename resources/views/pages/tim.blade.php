@extends('layouts.pages')
@section('title', 'Pengurus Komisariat | PMII UNUSIA BOGOR')

@section('content')

    <!-- Start Team Area
        ============================================= -->
    <div id="team" class="team-area radius-less default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2> PENGURUS KOMISARIAT PMII UNUSIA BOGOR <br /> Masa Khidmat 2024-2025 </h2><br />
                        <a class="ms-5 btn btn-primary p-3" href="{{ route('tim.index') }}">KOMISARIAT UNUSIA</a>
                        <a class="btn btn-primary p-3" href="{{ route('tim-kopri') }}">KOPRI UNUSIA </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team-items text-center">
                    <!-- Mulai Item Tunggal -->
                    @foreach ($pengurus as $p)
                        @if ($p->category_id == 1)
                            <!-- Filter hanya pengurus komisariat -->
                            <div class="col-md-4 single-item">
                                <div class="item">
                                    <div class="thumb">
                                        <!-- Ganti src gambar dengan gambar pengurus -->
                                        <img src="{{ $p->image_url }}" alt="Thumb" />
                                        <ul>
                                            <li class="facebook">
                                                <a href="{{ $p->facebook }}">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="{{ $p->twitter }}">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="instagram">
                                                <a href="{{ $p->instagram }}">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="{{ $p->linkedin }}">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="info">
                                        <!-- Ganti nama, jabatan, dan alamat email dengan data pengurus -->
                                        <h4>{{ $p->nama_lengkap }}</h4>
                                        <span>{{ $p->jabatan }}</span>
                                        <h5>
                                            <i class="fas fa-envelope"></i> {{ $p->email }}
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <!-- Selesai Item Tunggal -->
                </div>
            </div>

        </div>
    </div>
    <!-- End Team Area -->
    <!-- Start Team Area
        ============================================= -->
    <div id="team" class="team-area radius-less default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2> BIRO-BIRO</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="team-items text-center">
                    <!-- Mulai Item Tunggal -->
                    @foreach($pengurus as $p)
                    @if($p->category_id == 2) <!-- Filter hanya pengurus biro-biro -->
                    <div class="col-md-4 single-item">
                        <div class="item">
                            <div class="thumb">
                                <!-- Ganti src gambar dengan gambar pengurus -->
                                <img src="{{ $p->image_url }}" alt="Thumb" />
                                <ul>
                                    <li class="facebook">
                                        <a href="{{ $p->facebook }}">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="{{ $p->twitter }}">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="instagram">
                                        <a href="{{ $p->instagram }}">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="{{ $p->linkedin }}">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="info">
                                <!-- Ganti nama, jabatan, dan alamat email dengan data pengurus -->
                                <h4>{{ $p->nama_lengkap }}</h4>
                                <span>{{ $p->jabatan }}</span>
                                <h5>
                                    <i class="fas fa-envelope"></i> {{ $p->email }}
                                </h5>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    <!-- Selesai Item Tunggal -->
                </div>
            </div>            
    </div>
    <!-- End Team Area -->
@endsection
