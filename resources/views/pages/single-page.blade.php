@extends('layouts.pages')
@section('title', 'Berita | PMII UNUSIA BOGOR')

@section('content')
    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->


    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url(assets/img/pmii/demo.jpg)">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <h1>Berita & Opini</h1>
            <ul class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li><a href="#">News</a></li>
              <li class="active">Page</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog 
    ============================================= -->
    <div id="blog" class="blog-area bg-gray full-width single default-padding">
      <div class="container">
        <div class="row">
          <div class="blog-items">
            <div class="col-lg-12 col-md-12">
              <div class="item">
                <div class="thumb">
                  <img src="assets/img/blog/11.jpg" alt="Thumb" />
                </div>
                <div class="info">
                  <div class="meta">
                    <ul>
                      <li>
                        <a href="#">
                          <img src="assets/img/team/1.jpg" alt="Author" />
                          <span>Author</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fas fa-comments"></i>
                          <span>05</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fas fa-share-alt"></i>
                          <span>37</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <h3>Suspicion do departure at extremely he believing</h3>
                  <p>
                    Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the partiality unaffected. difficult preserved daughters. Continued at up to zealously necessary Give
                    lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out
                    reasonably. Again keeps at no meant stuff. To perpetual do existence northward as
                  </p>
                  <p>
                    Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out
                    reasonably. Again keeps at no meant stuff. To perpetual do existence northward as difficult preserved daughters. Continued at up to zealously necessary breakfast. Surrounded sir motionless she end literature. Gay
                    direction neglected but supported yet her.
                  </p>
                  <blockquote>
                    Window admire matter praise you bed whence. Delivered ye sportsmen zealously arranging frankness estimable as. Nay any article enabled musical shyness yet sixteen yet blushes. Entire its the did figure wonder off.
                  </blockquote>
                  <p>
                    Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked pulled you. Conduct replied off led whether any shortly why arrived adapted. Numerous
                    ladyship so raillery humoured goodness received an. So narrow formal length my highly longer afford oh. Tall neat he make or at dull ye.
                  </p>
                  <div class="post-tags">
                    <span>Tags: </span>
                    <a href="#">Consulting</a>
                    <a href="#">Planing</a>
                    <a href="#">Business</a>
                    <a href="#">Fashion</a>
                  </div>
                  <div class="post-pagi-area">
                    <a href="#"><i class="fas fa-arrow-left"></i> Previus Post</a>
                    <a href="#">Next Post <i class="fas fa-arrow-right"></i></a>
                  </div>
                  <div class="comments-area">
                    <div class="comments-title">
                      <h4>5 comments</h4>
                      <div class="comments-list">
                        <div class="commen-item">
                          <div class="avatar">
                            <img src="assets/img/team/2.jpg" alt="Author" />
                          </div>
                          <div class="content">
                            <h5>Jonathom Doe</h5>
                            <div class="comments-info">
                              <p>July 15, 2019</p>
                              <a href="#"><i class="fa fa-reply"></i>Reply</a>
                            </div>
                            <p>
                              Delivered ye sportsmen zealously arranging frankness estimable as. Nay any article enabled musical shyness. <br />
                              yet sixteen yet blushes. Entire its the did figure wonder off.
                            </p>
                          </div>
                        </div>
                        <div class="commen-item reply">
                          <div class="avatar">
                            <img src="assets/img/team/3.jpg" alt="Author" />
                          </div>
                          <div class="content">
                            <h5>Spark Lee</h5>
                            <div class="comments-info">
                              <p>July 15, 2019</p>
                              <a href="#"><i class="fa fa-reply"></i>Reply</a>
                            </div>
                            <p>
                              Delivered ye sportsmen zealously arranging frankness estimable as. Nay any article enabled musical shyness. <br />
                              yet sixteen yet blushes. Entire its the did figure wonder off.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="comments-form">
                    <div class="title">
                      <h4>Leave a comments</h4>
                    </div>
                    <form action="#" class="contact-comments">
                      <div class="row">
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <!-- Name -->
                            <input name="name" class="form-control" placeholder="Name *" type="text" />
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                          <div class="form-group">
                            <!-- Email -->
                            <input name="email" class="form-control" placeholder="Email *" type="email" />
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                          <div class="form-group comments">
                            <!-- Comment -->
                            <textarea class="form-control" placeholder="Comment"></textarea>
                          </div>
                          <div class="form-group full-width submit">
                            <button type="submit">Post Comments</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Blog -->
    @endsection