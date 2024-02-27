@extends('layouts.admin')
@section('title', 'Admin')

@section('content')
    <!-- START TOPBAR -->
    <div class="page-topbar">
        <div class="quick-area">
            <div class="pull-left">
                <ul class="info-menu left-links list-inline list-unstyled">
                    <li class="sidebar-toggle-wrap">
                        <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <li class="message-toggle-wrapper">
                        <a href="#" data-toggle="dropdown" class="toggle">
                            <i class="fa fa-envelope"></i>
                            <span class="badge badge-primary">7</span>
                        </a>
                        <ul class="dropdown-menu messages animated fadeIn">
                            <li class="list">
                                <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                    <li class="unread status-available">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img src="assets/images/pmii/kipli.jpg" alt="user-image" class="img-circle img-inline" />
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Zulkipli Ikhsan</strong>
                                                    <span class="time small">- 15 mins ago</span>
                                                    <span class="profile-status available pull-right"></span>
                                                </span>
                                                <span class="desc small"> Sometimes it takes a lifetime to win a battle. </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="status-away">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img src="data/profile/avatar-2.png" alt="user-image" class="img-circle img-inline" />
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Brooks Latshaw</strong>
                                                    <span class="time small">- 45 mins ago</span>
                                                    <span class="profile-status away pull-right"></span>
                                                </span>
                                                <span class="desc small"> Sometimes it takes a lifetime to win a battle. </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="status-busy">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img src="data/profile/avatar-3.png" alt="user-image" class="img-circle img-inline" />
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Clementina Brodeur</strong>
                                                    <span class="time small">- 1 hour ago</span>
                                                    <span class="profile-status busy pull-right"></span>
                                                </span>
                                                <span class="desc small"> Sometimes it takes a lifetime to win a battle. </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="status-offline">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img src="data/profile/avatar-4.png" alt="user-image" class="img-circle img-inline" />
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Aang Fauzi</strong>
                                                    <span class="time small">- 5 hours ago</span>
                                                    <span class="profile-status offline pull-right"></span>
                                                </span>
                                                <span class="desc small"> Sometimes it takes a lifetime to win a battle. </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="status-offline">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img src="data/profile/avatar-5.png" alt="user-image" class="img-circle img-inline" />
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Tasya PMII</strong>
                                                    <span class="time small">- Yesterday</span>
                                                    <span class="profile-status offline pull-right"></span>
                                                </span>
                                                <span class="desc small"> Sometimes it takes a lifetime to win a battle. </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="status-available">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img src="data/profile/avatar-1.png" alt="user-image" class="img-circle img-inline" />
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Verdell Rea</strong>
                                                    <span class="time small">- 14th Mar</span>
                                                    <span class="profile-status available pull-right"></span>
                                                </span>
                                                <span class="desc small"> Sometimes it takes a lifetime to win a battle. </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="status-busy">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img src="data/profile/avatar-2.png" alt="user-image" class="img-circle img-inline" />
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Linette Lheureux</strong>
                                                    <span class="time small">- 16th Mar</span>
                                                    <span class="profile-status busy pull-right"></span>
                                                </span>
                                                <span class="desc small"> Sometimes it takes a lifetime to win a battle. </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="status-away">
                                        <a href="javascript:;">
                                            <div class="user-img">
                                                <img src="data/profile/avatar-3.png" alt="user-image" class="img-circle img-inline" />
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Zaenal Arifin</strong>
                                                    <span class="time small">- 16th Mar</span>
                                                    <span class="profile-status away pull-right"></span>
                                                </span>
                                                <span class="desc small"> Sometimes it takes a lifetime to win a battle. </span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="external">
                                <a href="javascript:;">
                                    <span>Read All Messages</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="notify-toggle-wrapper">
                        <a href="#" data-toggle="dropdown" class="toggle">
                            <i class="fa fa-bell"></i>
                            <span class="badge badge-orange">3</span>
                        </a>
                        <ul class="dropdown-menu notifications animated fadeIn">
                            <li class="total">
                                <span class="small"> You have <strong>3</strong> new notifications. <a href="javascript;" class="pull-right">Mark all as Read</a>
                                </span>
                            </li>
                            <li class="list">
                                <ul class="dropdown-menu-list list-unstyled ps-scrollbar">
                                    <li class="unread available">
                                        <!-- available: success, warning, info, error -->
                                        <a href="javascript:;">
                                            <div class="notice-icon">
                                                <i class="fa fa-check"></i>
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Server needs to reboot</strong>
                                                    <span class="time small">15 mins ago</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="unread away">
                                        <!-- available: success, warning, info, error -->
                                        <a href="javascript:;">
                                            <div class="notice-icon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>45 new messages</strong>
                                                    <span class="time small">45 mins ago</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="busy">
                                        <!-- available: success, warning, info, error -->
                                        <a href="javascript:;">
                                            <div class="notice-icon">
                                                <i class="fa fa-times"></i>
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Server IP Blocked</strong>
                                                    <span class="time small">1 hour ago</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="offline">
                                        <!-- available: success, warning, info, error -->
                                        <a href="javascript:;">
                                            <div class="notice-icon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>10 Orders Shipped</strong>
                                                    <span class="time small">5 hours ago</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="offline">
                                        <!-- available: success, warning, info, error -->
                                        <a href="javascript:;">
                                            <div class="notice-icon">
                                                <i class="fa fa-user"></i>
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>New Comment on blog</strong>
                                                    <span class="time small">Yesterday</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="available">
                                        <!-- available: success, warning, info, error -->
                                        <a href="javascript:;">
                                            <div class="notice-icon">
                                                <i class="fa fa-check"></i>
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Great Speed Notify</strong>
                                                    <span class="time small">14th Mar</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="busy">
                                        <!-- available: success, warning, info, error -->
                                        <a href="javascript:;">
                                            <div class="notice-icon">
                                                <i class="fa fa-times"></i>
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Team Meeting at 6PM</strong>
                                                    <span class="time small">16th Mar</span>
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="external">
                                <a href="javascript:;">
                                    <span>Read All Notifications</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden-sm hidden-xs searchform">
                        <div class="input-group">
                            <span class="input-group-addon input-focus">
                                <i class="fa fa-search"></i>
                            </span>
                            <form action="#" method="post">
                                <input type="text" class="form-control animated fadeIn" placeholder="Search & Enter" />
                                <input type="submit" value="" />
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="pull-right">
                <ul class="info-menu right-links list-inline list-unstyled">
                    <li class="profile">
                        <a href="#" data-toggle="dropdown" class="toggle">
                            <img src="{{ url(asset('assets/images/pmii/alwan-2.jpeg')) }}" alt="user-image" class="img-circle img-inline" />
                            <span>M Alwan Abdr <i class="fa fa-angle-down"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu profile animated fadeIn">
                            <li>
                                <a href="#settings">
                                    <i class="fa fa-wrench"></i> Settings </a>
                            </li>
                            <li>
                                <a href="ui-profile.html">
                                    <i class="fa fa-user"></i> Profile </a>
                            </li>
                            <li>
                                <a href="#help">
                                    <i class="fa fa-info"></i> Help </a>
                            </li>
                            <li class="last">
                                <a href="ui-login.html">
                                    <i class="fa fa-lock"></i> Logout </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END TOPBAR -->
    <!-- START CONTAINER -->
    <div class="page-container row-fluid">
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
                        <a href="admin.html">
                            <i class="fa fa-dashboard"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-edit"></i>
                            <span class="title">News</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="" href="blo-blogs.html">All News</a>
                            </li>
                            <li>
                                <a class="" href="blo-blog-add.html">Add News</a>
                            </li>
                            <li>
                                <a class="" href="blo-blog-edit.html">Edit News</a>
                            </li>
                            <li>
                                <a class="" href="blo-blog-view.html">View News</a>
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
                                <a class="" href="blo-users.html">Pengurus Komisariat</a>
                            </li>
                            <li>
                                <a class="" href="blo-user-add.html">Tambah Pengurus</a>
                            </li>
                            <li>
                                <a class="" href="blo-user-edit.html">Edit Pengurus</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-database"></i>
                            <span class="title">Database</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="" href="tables-data.html">All Database</a>
                            </li>
                            <li>
                                <a class="" href="blo-category-add.html">Add Database</a>
                            </li>
                            <li>
                                <a class="" href="blo-category-edit.html">Edit Database</a>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="javascript:;">
                            <i class="fa fa-envelope"></i>
                            <span class="title">Verifikasi KTA PMII</span>
                            <span class="arrow"></span>
                            <span class="label label-orange">4</span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a class="" href="blo-mail-inbox.html">Inbox</a>
                            </li>
                            <li>
                                <a class="" href="blo-mail-view.html">View</a>
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
                        <span class="title">Database </span>
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
        <!-- START CONTENT -->
        <section id="main-content" class=" ">
            <section class="wrapper main-wrapper">
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
                                        <i class="pull-left fa fa-thumbs-up icon-md icon-rounded icon-primary"></i>
                                        <div class="stats">
                                            <h4>
                                                <strong>450K</strong>
                                            </h4>
                                            <span>Blog Page Views</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="r4_counter db_box">
                                        <i class="pull-left fa fa-user icon-md icon-rounded icon-orange"></i>
                                        <div class="stats">
                                            <h4>
                                                <strong>6243</strong>
                                            </h4>
                                            <span>New Visitors</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="r4_counter db_box">
                                        <i class="pull-left fa fa-database icon-md icon-rounded icon-purple"></i>
                                        <div class="stats">
                                            <h4>
                                                <strong>1000</strong>
                                            </h4>
                                            <span>Database</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="r4_counter db_box">
                                        <i class="pull-left fa fa-envelope icon-md icon-rounded icon-warning"></i>
                                        <div class="stats">
                                            <h4>
                                                <strong>20</strong>
                                            </h4>
                                            <span>Belum Terverifikasi</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End .row -->
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="r1_maingraph db_box">
                                        <span class="pull-left">
                                            <i class="icon-purple fa fa-square icon-xs"></i>&nbsp; <small>PAGE VIEWS</small>&nbsp; &nbsp; <i class="fa fa-square icon-xs icon-primary"></i>&nbsp; <small>UNIQUE VISITORS</small>
                                        </span>
                                        <div id="db_morris_area_graph" style="height: 272px; width: 100%"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- End .row -->
                        </div>
                    </section>
                </div>
            </section>
        </section>
        <!-- END CONTENT -->
    </div>
@endsection