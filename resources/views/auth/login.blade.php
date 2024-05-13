@extends('layouts.auth')
@section('title', 'Masuk | Admin')

@section('content')
<div class="login-area bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="login-items">
                    <div class="login-box">
                        <div class="login-content">
                            <div class="col-md-6 info">
                                <a href="{{ route('home') }}">
                                    <img src="assets/img/pmii/logo-web.png" style="width: 15em" alt="Login" />
                                </a>
                                <h2>Salam Pergerakan!</h2>
                                <p>Silahkan Masukan <strong>Email dan password Admin</strong> untuk masuk kedalam dashboard Pergerakan Mahasiswa Islam Indonesia Komisariat dan Rayon Universitas Nahdlatul Ulama Indonesia Cabang Kabupaten Bogor.</p>
                            </div>
                            <div class="col-md-6 content">
                                <h4>Masuk Ke Sistem</h4>
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input class="form-control @error('email') is-invalid @enderror" placeholder="Email" type="email" name="email" value="{{ old('email') }}" />
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input class="form-control @error('password') is-invalid @enderror" placeholder="Password" type="password" name="password" />
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Masuk</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
