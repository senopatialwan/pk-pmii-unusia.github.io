@extends('layouts.admin')
@section('title', 'Admin')

@section('content')
    <!-- START CONTAINER -->

    <!-- START CONTENT -->

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="page-title">
            <div class="pull-left">
                <h1 class="title">Dashboard Admin</h1>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-lg-12">
        <section class="box nobox">
            <div class="content-body">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="r4_counter db_box">
                            <i class="pull-left fa fa-users icon-md icon-rounded icon-primary"></i>
                            <div class="stats">
                                <h4>
                                    <strong>{{ $userCount }}</strong>
                                </h4>
                                <span>Total Users</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="r4_counter db_box">
                            <i class="pull-left fa fa-user icon-md icon-rounded icon-orange"></i>
                            <div class="stats">
                                <h4>
                                    <strong>{{ $blogCount }}</strong>
                                </h4>
                                <span>Total Blogs</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="r4_counter db_box">
                            <i class="pull-left fa fa-user icon-md icon-rounded icon-orange"></i>
                            <div class="stats">
                                <h4>
                                    <strong>{{ $anggotaCount }}</strong>
                                </h4>
                                <span>Total Anggota</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="r4_counter db_box">
                            <i class="pull-left fa fa-user icon-md icon-rounded icon-orange"></i>
                            <div class="stats">
                                <h4>
                                    <strong>{{ $pengurusCount }}</strong>
                                </h4>
                                <span>Total Pengurus</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="r4_counter db_box">
                            <div class="stats">
                                <h4>
                                    <strong>Total blog</strong>
                                </h4>
                                <canvas id="blogChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="r4_counter db_box">
                            <div class="stats">
                                <h4>
                                    <strong>Total admin</strong>
                                </h4>
                                <canvas id="adminChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="r4_counter db_box">
                            <div class="stats">
                                <h4>
                                    <strong>Total Anggota</strong>
                                </h4>
                                <canvas id="anggotaChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="r4_counter db_box">
                            <div class="stats">
                                <h4>
                                    <strong>Total Pengurus</strong>
                                </h4>
                                <canvas id="pengurusChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
          var blogChartCanvas = document.getElementById("blogChart");
        var adminChartCanvas = document.getElementById("adminChart");

        var blogChartData = {
            labels: {!! $blogChartData->keys() !!},
            datasets: [{
                label: 'Blogs',
                data: {!! $blogChartData->values() !!},
                backgroundColor: 'rgba(153, 246, 228, 0.2)',
                borderColor: 'rgba(20, 184, 166, 1)',
           
                borderWidth: 1
            }]
        };

        var adminChartData = {
            labels: {!! $userChartData->keys() !!},
            datasets: [{
                label: 'Admins',
                data: {!! $userChartData->values() !!},
                backgroundColor: 'rgba(255, 206, 86, 0.2)',
                borderColor: 'rgba(255, 206, 86, 1)',
                borderWidth: 1
            }]
        };

        var blogChart = new Chart(blogChartCanvas, {
            type: 'bar',
            data: blogChartData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var adminChart = new Chart(adminChartCanvas, {
            type: 'doughnut',
            data: adminChartData
        });
        var anggotaChartCanvas = document.getElementById("anggotaChart");
        var pengurusChartCanvas = document.getElementById("pengurusChart");

        var anggotaChartData = {
            labels: {!! $anggotaChartData->keys() !!},
            datasets: [{
                label: 'Anggota',
                data: {!! $anggotaChartData->values() !!},
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        };

        var pengurusChartData = {
            labels: {!! $pengurusChartData->keys() !!},
            datasets: [{
                label: 'Pengurus',
                data: {!! $pengurusChartData->values() !!},
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        };

        var anggotaChart = new Chart(anggotaChartCanvas, {
            type: 'line',
            data: anggotaChartData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var pengurusChart = new Chart(pengurusChartCanvas, {
            type: 'bar',
            data: pengurusChartData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
