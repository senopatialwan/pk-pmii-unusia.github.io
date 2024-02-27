@extends('layouts.pages')
@section('title', 'PMII UNUSIA BOGOR')



@section('content')
    <!-- Header 
    ============================================= -->
    <header id="home">
        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav on no-full">
            <div class="container">
                <!-- Start Atribute Navigation -->
                <div class="attr-nav button">
                    <ul>
                        <li>
                            <a href="login.html">Cetak KTA</a>
                        </li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/pmii/logo-web.png" class="logo logo-scrolled" alt="Logo" style="max-width: 10em" />
                    </a>
                </div>
                <!-- End Header Navigation -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li class="">
                            <a href="#home" class="smooth-menu">Home</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#about">About</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#database">Database</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#produkHukum">Produk Hukum</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="team.html">Team</a>
                        </li>
                        <li class="dropdown dropdown-right">
                            <a class="dropdown-toggle smooth-menu" data-toggle="dropdown" href="news.html">News</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="news.html">Berita</a>
                                </li>
                                <li>
                                    <a href="news.html">Opini</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->
    <!-- Start Welcome 
        ============================================= -->
    <div class="banner-area content-double text-center background-move bg-gray" style="background-image: url(assets/img/bg-2.png)">
        <div class="container">
            <div class="row">
                <div class="double-items">
                    <div class="col-md-6 left-info simple-video">
                        <div class="content" data-animation="animated fadeInUpBig">
                            <div class="content-carousel owl-carousel owl-theme">
                                <!-- Single Item -->
                                <div class="item">
                                    <h1>
                                        <span>AKADEMISI</span>
                                    </h1>
                                    <p>Celebrated delightful an especially increasing instrument am. Indulgence contrasted sufficient to unpleasant.</p>
                                    <a class="btn btn-theme border btn-md smooth-menu" href="#about">Mulai Bergerak!</a>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="item">
                                    <h1>
                                        <span>BERKARAKTER</span>
                                    </h1>
                                    <p>Celebrated delightful an especially increasing instrument am. Indulgence contrasted sufficient to unpleasant.</p>
                                    <a class="btn btn-theme border btn-md smooth-menu" href="#about">Mulai Bergerak!</a>
                                </div>
                                <!-- End Single Item -->
                                <!-- Single Item -->
                                <div class="item">
                                    <h1>
                                        <span>MILITANSI</span>
                                    </h1>
                                    <p>Celebrated delightful an especially increasing instrument am. Indulgence contrasted sufficient to unpleasant.</p>
                                    <a class="btn btn-theme border btn-md smooth-menu" href="#about">Mulai Bergerak!</a>
                                </div>
                                <!-- End Single Item -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 right-info">
                        <div class="thumb">
                            <img src="assets/img/pmii/laptop-pmii.png" alt="Thumb" />
                            <a class="popup-youtube video-play-button" href="https://youtu.be/AQXKIGKvlgQ?si=qxuLbkq6IrB9cLwy">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Welcome -->
    <!-- Start About
        ============================================= -->
    <div id="about" class="features-area reverse shadow-less default-padding">
        <div class="container">
            <div class="row">
                <!-- Thumb -->
                <div class="col-md-5 thumb">
                    <img src="assets/img/pmii/logo-pmii.png" alt="Thumb" style="max-width: 30em;" />
                </div>
                <!-- End Thumb -->
                <div class="col-md-7 feature-box">
                    <div class="features-items text-center">
                        <div class="row">
                            <!-- Single Item -->
                            <div class="col-md-6 col-sm-6 equal-height">
                                <div class="item">
                                    <div class="icon">
                                        <i class="flaticon-support"></i>
                                    </div>
                                    <div class="info">
                                        <h4>TUJUAN PMII</h4>
                                        <p>Situation perpetual allowance offending as principle.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-md-6 col-sm-6 equal-height">
                                <div class="item">
                                    <div class="icon">
                                        <i class="flaticon-speech-bubble"></i>
                                    </div>
                                    <div class="info">
                                        <h4>SEJARAH PMII</h4>
                                        <p>Situation perpetual allowance offending as principle.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-md-6 col-sm-6 equal-height">
                                <div class="item">
                                    <div class="icon">
                                        <i class="flaticon-email"></i>
                                    </div>
                                    <div class="info">
                                        <h4>FILOSOFI LOGO PMII</h4>
                                        <p>Situation perpetual allowance offending as principle.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="col-md-6 col-sm-6 equal-height">
                                <div class="item">
                                    <div class="icon">
                                        <i class="flaticon-file"></i>
                                    </div>
                                    <div class="info">
                                        <h4>TENTANG PMII UNUSIA</h4>
                                        <p>Situation perpetual allowance offending as principle.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About-->
    <!-- Start Database 
        ============================================= -->
    <div id="database" class="about-area companies-area text-center bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 info">
                    <h2> DATABASE RAYON <br /> PMII UNUSIA KABUPATEN BOGOR </h2>
                    <p> Both rest of know draw fond post as. It agreement defective to excellent. Feebly do engage of narrow. Extensive repulsive belonging depending if promotion be zealously as. Preference inquietude ask now are dispatched led appearance. Small meant in so doubt hopes. </p>
                    <div class="fun-facts">
                        <h3>Database Keluarga Besar Kami</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="clients-items owl-carousel owl-theme text-center">
                                    <div class="single-item">
                                        <a href="#">
                                            <img src="assets/img/pmii/logo-pmii.png" style="width: 7em " alt="Clients" />
                                        </a>
                                    </div>
                                    <div class="single-item">
                                        <a href="#">
                                            <img src="assets/img/pmii/rayon-teknik.png" style="width: 10em" alt="Clients" />
                                        </a>
                                    </div>
                                    <div class="single-item">
                                        <a href="#">
                                            <img src="assets/img/pmii/rayon-fkip.png" style="width: 7em" alt="Clients" />
                                        </a>
                                    </div>
                                    <div class="single-item">
                                        <a href="#">
                                            <img src="assets/img/pmii/rayon-feb.png" style="width: 9em" alt="Clients" />
                                        </a>
                                    </div>
                                    <div class="single-item">
                                        <a href="#">
                                            <img src="assets/img/pmii/rayon-fajrulfalakh.png" style="width: 10em" alt="Clients" />
                                        </a>
                                    </div>
                                    <div class="single-item">
                                        <a href="#">
                                            <img src="assets/img/pmii/rayon-nusantara.png" style="width: 9em" alt="Clients" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Database -->
    <!-- Start Produk Hukum 
        ============================================= -->
    <div id="produkHukum" class="features-area carousel-shadow default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>PRODUK HUKUM PMII</h2>
                        <p>Learning day desirous informed expenses material returned six the. She enabled invited exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age out full gate bed day lose.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="features-items">
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="icon">
                                <span>01</span>
                                <i class="flaticon-file"></i>
                            </div>
                            <div class="info">
                                <h4>AD-ART PMII</h4>
                                <p>Situation perpetual allowance offending as principle.</p>
                                <div class="bottom">
                                    <a href="https://drive.google.com/file/d/1o7fw_QV1JOTZZ0xY0fuUe3uj-lH_cbky/view?usp=drive_link">View Details <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="icon">
                                <span>02</span>
                                <i class="flaticon-file"></i>
                            </div>
                            <div class="info">
                                <h4>Hasil Muspimnas</h4>
                                <p>Situation perpetual allowance offending as principle.</p>
                                <div class="bottom">
                                    <a href="https://drive.google.com/file/d/1xUD3X9veew-Tc9Nv-6O7X_SzObrUp5Y2/view?usp=drive_link">View Details <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="icon">
                                <span>03</span>
                                <i class="flaticon-file"></i>
                            </div>
                            <div class="info">
                                <h4>Peraturan Organisasi</h4>
                                <p>Situation perpetual allowance offending as principle.</p>
                                <div class="bottom">
                                    <a href="#">View Details <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="icon">
                                <span>04</span>
                                <i class="flaticon-video"></i>
                            </div>
                            <div class="info">
                                <h4>MARS PMII</h4>
                                <p>Situation perpetual allowance offending as principle.</p>
                                <div class="bottom">
                                    <a href="https://youtu.be/f35lLeCHP8M?si=a_1czN7MKkl_4Gi6" class="popup-youtube">View Details <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="icon">
                                <span>05</span>
                                <i class="flaticon-file"></i>
                            </div>
                            <div class="info">
                                <h4>Hasil Rapat Tahunan Komisariat</h4>
                                <p>Situation perpetual allowance offending as principle.</p>
                                <div class="bottom">
                                    <a href="#">View Details <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="icon">
                                <span>06</span>
                                <i class="flaticon-file"></i>
                            </div>
                            <div class="info">
                                <h4>Kalender Kegiatan Komisariat </h4>
                                <p>Situation perpetual allowance offending as principle.</p>
                                <div class="bottom">
                                    <a href="#">View Details <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Produk Hukum -->
    <!-- Start Informasi Kegiatan 
        ============================================= -->
    <div id="overview" class="overview-area bg-theme text-light default-padding">
        <!-- Side Bg -->
        <div class="side-bg">
            <img src="assets/img/circle-shape.png" alt="Thumb" />
        </div>
        <!-- End Side Bg -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>SEPUTAR INFORMASI KEGIATAN</h2>
                        <p>Learning day desirous informed expenses material returned six the. She enabled invited exposed him another. Reasonably conviction solicitude me mr at discretion reasonable. Age out full gate bed day lose.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 col-md-10 col-lg-offset-1 col-md-offset-1 text-center overview-items">
                    <div class="overview-carousel owl-carousel owl-theme">
                        <div class="item">
                            <a class="item popup-link" href="assets/img/1500x700.png">
                                <img src="assets/img/app/dashboard-1.jpg" alt="Thumb" />
                            </a>
                        </div>
                        <div class="item">
                            <a class="item popup-link" href="assets/img/1500x700.png">
                                <img src="assets/img/app/dashboard-2.jpg" alt="Thumb" />
                            </a>
                        </div>
                        <div class="item">
                            <a class="item popup-link" href="assets/img/1500x700.png">
                                <img src="assets/img/app/dashboard-3.jpg" alt="Thumb" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Informasi Kegiatan -->
    <!-- Start Menurut Para Tokoh
        ============================================= -->
    <div class="testimonials-area bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>PMII MENURUT PARA TOKOH</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="testimonial-items testimonial-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/pmii/Cak Imin.jpg" alt="Thumb" />
                            </div>
                            <div class="info">
                                <p>Komitmen kebangsaan PMII harus terus diperkuat. PMII harus menjadi garda terdepan dalam membentengi kebhinekaan.</p>
                                <p>(KONGRES PMII 2021)</p>
                                <h4>Abdul Muhaimin Iskandar</h4>
                                <span>Ketua MABINAS PB PMII</span>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/pmii/Gus Yahya.jpg" alt="Thumb" />
                            </div>
                            <div class="info">
                                <p>Komitmen kebangsaan PMII harus terus diperkuat. PMII harus menjadi garda terdepan dalam membentengi kebhinekaan.</p>
                                <h4>KH Yahya Cholil Staquf</h4>
                                <span>Ketua Umum PBNU Periode 2022-2027</span>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/pmii/kyai said.jpg" alt="Thumb" />
                            </div>
                            <div class="info">
                                <p>PMII membawa visi dan misi yang sangat mulia, yakni mempertahankan dua kebenaran, kebenaran cara beragama dan kebenaran cara berbangsa dan bernegara.</p>
                                <h4>Prof. Dr. KH. Said Aqil Siradj, M.A.</h4>
                                <span>Ketua Umum PBNU Periode 2010-2015 & 2015 - 2020</span>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/img/pmii/gus miftah.jpg" alt="Thumb" />
                            </div>
                            <div class="info">
                                <p>PMII semakin istiqamah dalam mempertahankan aqidah Ahlussunnah wal Jama'ah dan semakin konsisten dalam mencetak generasi pemimpin bangsa yang luar biasa.</p>
                                <h4>KH. Miftah Maulana Habiburrahman (Gus Miftah)</h4>
                                <span>Ulama sekaligus Alumni PMII</span>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Menurut Para Tokoh -->
    <!-- Start Google Maps 
        ============================================= -->
    <div class="maps-area">
        <div class="container-full">
            <div class="row">
                <div class="google-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- End Google Maps -->
    <!-- Start Footer 
        ============================================= -->
    <footer id="footer" class="default-padding bg-light">
        <div class="container">
            <div class="row">
                <div class="f-items">
                    <div class="col-md-4 col-sm-6 equal-height item">
                        <div class="f-item">
                            <img src="assets/img/pmii/logo-web.png" alt="Logo" style="width: 20em" />
                            <p>Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address.</p>
                            <p>
                                <i>Daftar email Anda untuk mendapatkan informasi tambahan melalui email tersebut.</i>
                            </p>
                            <div class="newsletter">
                                <form action="#">
                                    <div class="input-group stylish-input-group">
                                        <input type="email" name="email" class="form-control" placeholder="Enter your e-mail here" />
                                        <button type="submit">
                                            <i class="fa fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 equal-height item">
                        <div class="f-item link">
                            <h4>Link Terkait</h4>
                            <ul>
                                <li>
                                    <a class="smooth-menu" href="#home">Home</a>
                                </li>
                                <li>
                                    <a class="smooth-menu" href="#about">About</a>
                                </li>
                                <li>
                                    <a class="smooth-menu" href="#database">Database</a>
                                </li>
                                <li>
                                    <a class="smooth-menu" href="#produkHukum">Produk Hukum </a>
                                </li>
                                <li>
                                    <a class="smooth-menu" href="#team">Team</a>
                                </li>
                                <li>
                                    <a class="smooth-menu" href="#news">News</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 equal-height item">
                        <div class="f-item link">
                            <h4>Keluarga Besar</h4>
                            <ul>
                                <li>
                                    <a href="#">Rayon FTIK</a>
                                </li>
                                <li>
                                    <a href="#">Rayon FKIP</a>
                                </li>
                                <li>
                                    <a href="#">Rayon Fajrul Falakh</a>
                                </li>
                                <li>
                                    <a href="#">Rayon Nusantara</a>
                                </li>
                                <li>
                                    <a href="#">Rayon FEB</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 equal-height item">
                        <div class="f-item twitter-widget">
                            <h4>Contact Info</h4>
                            <p>Jl. Parung Hijau Kp. Hambulu, Desa Pondok Udik, Kec. Kemang, Kab. Bogor, Jawa Barat, Indonesia</p>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Website:</h5>
                                            <span>www.pmiiunusia.or.id</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Email:</h5>
                                            <span>pkpmiibogor@gmail.com</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="info">
                                            <h5>Phone:</h5>
                                            <span>+62 8964 2905 967</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="col-lg-6 col-md-6 col-sm-7">
                            <p>&copy; Copyright 2024. All Rights Reserved by <a href="https://lynk.id/alwanabdurrahman">Muhamad Alwan Abdurrahman</a>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-5 text-right social">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/pmii_unusiab?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Bottom -->
        </div>
    </footer>
    <!-- End Footer -->
@endsection