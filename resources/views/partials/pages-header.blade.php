
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
                    <a href="/" class="smooth-menu">Home</a>
                </li>
                <li class="<?php echo (Route::currentRouteName() == 'about') ? 'active' : ''; ?>">
                    <a class="smooth-menu" href="{{ route('about') }}">About</a>
                </li>
                <li class="<?php echo (Route::currentRouteName() == 'database') ? 'active' : ''; ?>">
                    <a class="smooth-menu" href="{{ route('database') }}">Database</a>
                </li>
                <li class="<?php echo (Route::currentRouteName() == 'produk-hukum') ? 'active' : ''; ?>">
                    <a class="smooth-menu" href="{{ route('produk-hukum') }}">Produk Hukum</a>
                </li>
                <li class="<?php echo (Route::currentRouteName() == 'tim') ? 'active' : ''; ?>">
                    <a class="smooth-menu" href="{{ route('tim') }}">Team</a>
                </li>
                <li class="dropdown dropdown-right <?php echo (Route::currentRouteName() == 'blog') ? 'active' : ''; ?>">
                    <a class="dropdown-toggle smooth-menu <?php echo (Route::currentRouteName() == 'blog') ? 'active' : ''; ?>" data-toggle="dropdown" href="{{ route('blog') }}">News</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('blog') }}" class="<?php echo (Route::currentRouteName() == 'blog') ? 'active' : ''; ?>">Berita</a></li>
                        <li><a href="{{ route('blog') }}" class="<?php echo (Route::currentRouteName() == 'blog') ? 'active' : ''; ?>">Opini</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        
        <!-- /.navbar-collapse -->
      </div>
    </nav>
    <!-- End Navigation -->
  </header>

</body>

