@extends('layouts.base')

@section('head')
    <link href="{{ url(asset('assets/css/bootstrap.min.css')) }}" rel="stylesheet" />
    <link href="{{ url(asset('assets/css/font-awesome.min.css')) }}" rel="stylesheet" />
    <link href="{{ url(asset('assets/css/flaticon-set.css')) }}" rel="stylesheet" />
    <link href="{{ url(asset('assets/css/magnific-popup.css')) }}" rel="stylesheet" />
    <link href="{{ url(asset('assets/css/owl.carousel.min.css')) }}" rel="stylesheet" />
    <link href="{{ url(asset('assets/css/owl.theme.default.min.css')) }}" rel="stylesheet" />
    <link href="{{ url(asset('assets/css/animate.css')) }}" rel="stylesheet" />
    <link href="{{ url(asset('assets/css/bootsnav.css')) }}" rel="stylesheet" />
    <link href="{{ url(asset('assets/css/style.css')) }}" rel="stylesheet" />
    <link href="{{ url(asset('assets/css/responsive.css')) }}" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet" />
@endsection

@section('body')
    @yield('content')
    
    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
