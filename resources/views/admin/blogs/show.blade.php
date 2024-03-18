@extends('layouts.pages')
@section('title', 'Detail Berita | PMII UNUSIA BOGOR')

@section('content')
    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light" style="background-image: url({{asset('assets/images/pmii/demo.jpg')}})">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <h1>Detail Berita</h1>
            <ul class="breadcrumb">
              <li><a href="#">Beranda</a></li>
              <li><a href="#">Berita</a></li>
              <li class="active">Detail Berita</li>
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
          <div class="col-lg-12 col-md-12">
            <div class="item">
                <div class="thumb">
                    <img src="{{ asset('storage/' . $blog->image) }}" alt="Thumbnail" />
                </div>                
              <div class="info">
                <div class="meta">
                  <ul>
                    <li>
                      <a href="#">
                        <span>{{ $blog->author }}</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fas fa-comments"></i>
                        {{-- <span>{{ $blog->comments->count() }}</span> --}}
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
                <h3>{{ $blog->title }}</h3>
                <p>{{ $blog->content }}</p>
                <div class="post-tags">
                  <span>Tags: </span>
                  @foreach ($blog->tags as $tag)
                      <a href="#">{{ $tag->name }}</a>
                  @endforeach
                </div>
                <div class="post-pagi-area">
                  <!-- Link to Previous and Next Post -->
                </div>
                <div class="comments-area">
                  <!-- Comments Area -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Blog -->
@endsection
