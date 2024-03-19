<footer id="footer" class="default-padding bg-light">
    <div class="container">
        <div class="row">
            <div class="f-items">
                <div class="col-md-4 col-sm-6 equal-height item">
                    <div class="f-item">
                        <img src="{{asset('assets/img/pmii/logo-web.png')}}" alt="Logo" style="width: 20em" />
                        <p>Website Resmi Pengurus Komisariat Universitas Nahdlatul Ulama Indonesia Cabang Kabupaten Bogor.</p>
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
                            <li class="<?php echo ($_SERVER['REQUEST_URI'] == '/') ? 'active' : ''; ?>">
                                <a class="smooth-menu" href="/">Beranda</a>
                            </li>
                            <li class="<?php echo (Route::currentRouteName() == 'tentang') ? 'active' : ''; ?>">
                                <a class="smooth-menu" href="{{ route('tentang') }}">Tentang</a>
                            </li>
                            <li class="<?php echo (Route::currentRouteName() == 'anggota') ? 'active' : ''; ?>">
                                <a class="smooth-menu" href="{{ route('anggota') }}">Anggota</a>
                            </li>
                            <li class="<?php echo (Route::currentRouteName() == 'produk-hukum') ? 'active' : ''; ?>">
                                <a class="smooth-menu" href="{{ route('produk-hukum') }}">Produk Hukum</a>
                            </li>
                            <li class="<?php echo (Route::currentRouteName() == 'tim') ? 'active' : ''; ?>">
                                <a class="smooth-menu" href="{{ route('tim') }}">Pengurus Komisariat</a>
                            </li>
                            <li class="dropdown dropdown-right <?php echo (Route::currentRouteName() == 'blog') ? 'active' : ''; ?>">
                                <a class="smooth-menu <?php echo (Route::currentRouteName() == 'blog') ? 'active' : ''; ?>" href="{{ route('blog') }}">Berita</a>
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
                                <a href="https://www.tiktok.com/@pk.pmii.unusia.ka?_t=8kmMsBB2Y78&_r=1">
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