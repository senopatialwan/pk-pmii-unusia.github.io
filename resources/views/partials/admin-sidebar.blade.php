   <!-- SIDEBAR - START -->
   <div class="page-sidebar">
    <!-- MAIN MENU - START -->
    <div class="page-sidebar-wrapper" id="main-menu-wrapper">
        <!-- USER INFO - START -->
        <div class="profile-info row">
            <div class="profile-image col-md-4 col-sm-4 col-xs-4">
                <a href="#">
                    <img src="{{ url(asset('assets/images/pmii/alwan-2.jpeg')) }}" class="img-responsive img-circle" />
                </a>
            </div>
            <div class="profile-details col-md-8 col-sm-8 col-xs-8">
                <h3>
                    <a href="#">M Alwan Abdr</a>
                    <!-- Available statuses: online, idle, busy, away and offline -->
                    <span class="profile-status online"></span>
                </h3>
                <p class="profile-title">Administrator</p>
            </div>
        </div>
        <!-- USER INFO - END -->
        <ul class="wraplist">
            <li class="open">
                <a href="{{route('admin.dashboard')}}">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-edit"></i>
                    <span class="title">Berita</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a class="" href="{{ route('admin.blogs.index') }}">Semua berita</a>
                    </li>
                    <li>
                        <a class="" href="{{ route('admin.blogs.create') }}">Tambah berita</a>
                    </li>
                    <li>
                        <a class="" href="{{ route('admin.categories.index') }}">Category blog</a>
                    </li>                    
                    <li>
                        <a class="" href="{{ route('admin.tags.index') }}">Tags</a>
                    </li>                    
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-upload"></i>
                    <span class="title">Media</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a class="" href="blo-media.html">All Media</a>
                    </li>
                    <li>
                        <a class="" href="blo-upload.html">Upload</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-users"></i>
                    <span class="title">Struktur Pengurus</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                   
                    <li>
                        <a class="" href="{{ route('admin.pengurus.index') }}">Pengurus Komisariat</a>
                    </li>
                    <li>
                        <a class="" href="{{ route('admin.pengurus.create') }}">Tambah Pengurus</a>
                    </li>
                    
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-database"></i>
                    <span class="title">Anggota </span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a class="" href="{{route('admin.anggota.index')}}">Anggota PMII</a>
                    </li>
                    <li>
                        <a class="" href="{{route('admin.anggota.create')}}">Tambah Anggota</a>
                    </li>
                    <li>
                        <a class="" href="{{route('admin.anggota.verifikasi-kta')}}">Verifikasi KTA PMII</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-user"></i>
                    <span class="title">Pengaturan</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a class="" href="blo-users.html">Admin</a>
                    </li>
                    <li>
                        <a class="" href="blo-user-add.html">Tambah Admin</a>
                    </li>
                    <li>
                        <a class="" href="blo-user-edit.html">Edit Admin</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- MAIN MENU - END -->
    <div class="project-info">
        <div class="block1">
            <div class="data">
                <span class="title">Anggota </span>
                <span class="total">1000</span>
            </div>
            <div class="graph">
                <span class="sidebar_orders">...</span>
            </div>
        </div>
        <div class="block2">
            <div class="data">
                <span class="title">Belum Terverifikasi</span>
                <span class="total">20</span>
            </div>
            <div class="graph">
                <span class="sidebar_visitors">...</span>
            </div>
        </div>
    </div>
</div>
<!--  SIDEBAR - END -->