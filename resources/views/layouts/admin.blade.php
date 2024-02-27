@extends('layouts.base')

@section('head')
@endsection

@section('body')
    @yield('content')

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection