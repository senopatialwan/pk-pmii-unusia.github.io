@extends('layouts.base')

@section('head')
    <!-- CORE CSS FRAMEWORK - START -->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <link href="{{ url(asset('assets/plugins/pace/pace-theme-flash.css')) }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ url(asset('assets/plugins/bootstrap/css/bootstrap.min.css')) }}" rel="stylesheet" type="text/css" />
    <link href="{{ url(asset('assets/plugins/bootstrap/css/bootstrap-theme.min.css')) }}" rel="stylesheet" type="text/css" />
    <link href="{{ url(asset('assets/fonts/font-awesome/css/font-awesome.css')) }}" rel="stylesheet" type="text/css" />
    <link href="{{ url(asset('assets/css/animate.min.css')) }}" rel="stylesheet" type="text/css" />
    <link href="{{ url(asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.css')) }}" rel="stylesheet"
        type="text/css" />
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    {{-- <link href="{{ url(asset('assets/plugins/morris-chart/css/morris.css')) }}" rel="stylesheet" type="text/css"
        media="screen" />
    <link href="{{ url(asset('assets/plugins/jquery-ui/smoothness/jquery-ui.min.css')) }}" rel="stylesheet" type="text/css"
        media="screen" />
    <link href="{{ url(asset('assets/plugins/rickshaw-chart/css/graph.css')) }}" rel="stylesheet" type="text/css"
        media="screen" />
    <link href="{{ url(asset('assets/plugins/rickshaw-chart/css/detail.css')) }}" rel="stylesheet" type="text/css"
        media="screen" />
    <link href="{{ url(asset('assets/plugins/rickshaw-chart/css/legend.css')) }}" rel="stylesheet" type="text/css"
        media="screen" />
    <link href="{{ url(asset('assets/plugins/rickshaw-chart/css/extensions.css')) }}" rel="stylesheet" type="text/css"
        media="screen" />
    <link href="{{ url(asset('assets/plugins/rickshaw-chart/css/rickshaw.min.css')) }}" rel="stylesheet" type="text/css"
        media="screen" />
    <link href="{{ url(asset('assets/plugins/rickshaw-chart/css/lines.css')) }}" rel="stylesheet" type="text/css"
        media="screen" />
    <link href="{{ url(asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css')) }}" rel="stylesheet" type="text/css"
        media="screen" />
    <link href="{{ url(asset('assets/plugins/icheck/skins/minimal/white.css')) }}" rel="stylesheet" type="text/css"
        media="screen" /> --}}
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE CSS TEMPLATE - START -->
    <link href="{{ url(asset('assets/css/style.css')) }}" rel="stylesheet" type="text/css" />
    <link href="{{ url(asset('assets/css/responsive.css')) }}" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->
@endsection

@section('body')
@include('partials.admin-header')
    <div class="page-container row-fluid">
        @include('partials.admin-sidebar')
        <section id="main-content" class=" ">
            <section class="wrapper main-wrapper">
                @yield('content')
            </section>
        </section>
    </div>
    @isset($slot)
        {{ $slot }}
    @endisset

    <!-- CORE JS FRAMEWORK - START -->
    <script src="{{ url(asset('assets/js/jquery-1.11.2.min.js')) }}" type="text/javascript"></script>
    <script src="{{ url(asset('assets/js/jquery.easing.min.js')) }}" type="text/javascript"></script>
    <script src="{{ url(asset('assets/plugins/bootstrap/js/bootstrap.min.js')) }}" type="text/javascript"></script>
    <script src="{{ url(asset('assets/plugins/pace/pace.min.js')) }}" type="text/javascript"></script>
    <script src="{{ url(asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')) }}" type="text/javascript">
    </script>
    <script src="{{ url(asset('assets/plugins/viewport/viewportchecker.js')) }}" type="text/javascript"></script>
    <!-- CORE JS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    {{-- <script src="{{ url(asset('assets/plugins/rickshaw-chart/vendor/d3.v3.js')) }}" type="text/javascript"></script>
    <script src="{{ url(asset('assets/plugins/jquery-ui/smoothness/jquery-ui.min.js')) }}" type="text/javascript"></script>
    <script src="{{ url(asset('assets/plugins/rickshaw-chart/js/Rickshaw.All.js')) }}"></script>
    <script src="{{ url(asset('assets/plugins/sparkline-chart/jquery.sparkline.min.js')) }}" type="text/javascript">
    </script>
    <script src="{{ url(asset('assets/plugins/easypiechart/jquery.easypiechart.min.js')) }}" type="text/javascript">
    </script>
    <script src="{{ url(asset('assets/plugins/morris-chart/js/raphael-min.js')) }}" type="text/javascript"></script>
    <script src="{{ url(asset('assets/plugins/morris-chart/js/morris.min.js')) }}" type="text/javascript"></script>
    <script src="{{ url(asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.1.min.js')) }}" type="text/javascript">
    </script>
    <script src="{{ url(asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')) }}" type="text/javascript">
    </script>
    <script src="{{ url(asset('assets/plugins/gauge/gauge.min.js')) }}" type="text/javascript"></script>
    <script src="{{ url(asset('assets/plugins/icheck/icheck.min.js')) }}" type="text/javascript"></script>
    <script src="{{ url(asset('assets/js/blo-dashboard.js')) }}" type="text/javascript"></script> --}}
    
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE TEMPLATE JS - START -->
    <script src="{{ url(asset('assets/js/scripts.js')) }}" type="text/javascript"></script>
    <!-- END CORE TEMPLATE JS - END -->

    <!-- Sidebar Graph - START -->
    <script src="{{ url(asset('assets/plugins/sparkline-chart/jquery.sparkline.min.js')) }}" type="text/javascript">
    </script>
    <script src="{{ url(asset('assets/js/chart-sparkline.js')) }}" type="text/javascript"></script>


   
    <!-- Sidebar Graph - END -->

    <!-- General section box modal start -->
    @yield('scripts')
@endsection
