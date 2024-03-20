@extends('layouts.pages')
@section('title', 'Berita | PMII UNUSIA BOGOR')

@section('content')
    <!-- Start Breadcrumb -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url(assets/img/pmii/demo.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Berita & Opini</h1>
                    <ul class="breadcrumb">
                        <li><a href="/">Beranda</a></li>
                        <li class="active">Berita</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="filter-buttons">
                    <ul class="nav nav-tabs " role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab"
                                aria-controls="all" aria-selected="true">Semua</a>
                        </li>
                        @foreach ($categories as $category)
                            <li class="nav-item">
                                <a class="nav-link" id="{{ $category->id }}-tab" data-toggle="tab"
                                    href="#{{ $category->id }}" role="tab" aria-controls="{{ $category->id }}"
                                    aria-selected="false" style="text-transform: uppercase; color: #000;"
                                    onmouseover="this.style.color='blue'; this.style.backgroundColor='yellow';"
                                    onmouseout="this.style.color='#000'; this.style.backgroundColor='transparent';">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Blog -->
    <div class="blog-area full-width bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                </div>
                <div class="blog-items">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-4 col-md-4 col-sm-6 equal-height {{ $blog->category_id }}">
                            <div class="item">
                                <div class="thumb">
                                    <a href="{{ route('pages.blogs.show', ['title' => $blog->title]) }}">
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="Thumb" />
                                    </a>
                                </div>
                                <div class="info">
                                    <div class="content">
                                        <div class="date">{{ $blog->created_at->format('d M, Y') }}</div>
                                        <h4>
                                            <a
                                                href="{{ route('pages.blogs.show', ['title' => $blog->title]) }}">{{ $blog->title }}</a>
                                        </h4>
                                        <p>{{ Str::limit($blog->content, 70) }}</p>
                                        <a href="{{ route('pages.blogs.show', ['title' => $blog->title]) }}">Read More <i
                                                class="fas fa-angle-right"></i></a>
                                    </div>
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    {{-- <img src="{{ asset($blog->author->avatar) }}" alt="Author" /> --}}
                                                    <span>{{ $blog->author }}</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-comments"></i>
                                                    <span>{{-- {{ $blog->shares_count }} --}}</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fas fa-share-alt"></i>
                                                    <span> {{-- {{ $blog->shares_count }} --}}</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-12 col-md-12 pagi-area">
                    <nav aria-label="navigation">
                        <ul class="pagination">
                            <li>
                                <a href="#">Previous</a>
                            </li>
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
