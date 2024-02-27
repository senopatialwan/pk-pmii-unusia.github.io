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
    <link href="{{ url(asset('assets/css/style-pages.css')) }}" rel="stylesheet" />
    <link href="{{ url(asset('assets/css/responsive-pages.css')) }}" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet" />
@endsection

@section('body')
    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    @include('partials.pages-header ')

    @yield('content')
    
    @include('partials.pages-footer')

    @isset($slot)
        {{ $slot }}
    @endisset

    <script src="{{ url(asset('assets/js/jquery-1.12.4.min.js')) }}"></script>
    <script src="{{ url(asset('assets/js/bootstrap.min.js')) }}"></script>
    <script src="{{ url(asset('assets/js/equal-height.min.js')) }}"></script>
    <script src="{{ url(asset('assets/js/jquery.appear.js')) }}"></script>
    <script src="{{ url(asset('assets/js/jquery-pages.easing.min.js')) }}"></script>
    <script src="{{ url(asset('assets/js/jquery.magnific-popup.min.js')) }}"></script>
    <script src="{{ url(asset('assets/js/modernizr.custom.13711.js')) }}"></script>
    <script src="{{ url(asset('assets/js/jquery.backgroundMove.js')) }}"></script>
    <script src="{{ url(asset('assets/js/owl.carousel.min.js')) }}"></script>
    <script src="{{ url(asset('assets/js/count-to.js')) }}"></script>
    <script src="{{ url(asset('assets/js/wow.min.js')) }}"></script>
    <script src="{{ url(asset('assets/js/bootsnav.js')) }}"></script>
    <script src="{{ url(asset('assets/js/main.js')) }}"></script>
@endsection
