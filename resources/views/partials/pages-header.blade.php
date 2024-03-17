
<body>
  <header id="home">
    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav on no-full">
      <div class="container">
        <!-- Start Atribute Navigation -->
        <div class="attr-nav button">
          <ul>
            <li>
              <a href="{{route('cetak-kta') }}">Cetak KTA</a>
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
            <!-- Pastikan path gambar benar -->
            <img src="assets/img/pmii/logo-web.png" class="logo logo-scrolled" alt="Logo" style="max-width: 10em" />
          </a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                <li class="<?php echo ($_SERVER['REQUEST_URI'] == '/') ? 'active' : ''; ?>">
                    <a href="/" class="smooth-menu">Beranda</a>
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
        
        <!-- /.navbar-collapse -->
      </div>
    </nav>
    <!-- End Navigation -->
  </header>

</body>

