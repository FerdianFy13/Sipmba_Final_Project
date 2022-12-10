@extends('layout.app')

@section('frontend')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h2 class="fs-3 fw-bold">Baca Artikel</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Artikel</li>
                </ol>
            </div>
        </nav>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Full Artikel/Blog Section ======= -->
    <section id="blog" class="blog  d-flex justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="card mb-3" style="border: none;">
                @if ($data->image)
                <img src="{{ asset('storage/' . $data->image) }}" class="card-img-top" alt="image" width="1024"
                    height="350">
                @else
                <img src="https://source.unsplash.com/1024x350?{{ $data->title }}" class="card-img-top" alt="image"
                    style="width:1024; height: 768;" width="1024" height="350">
                @endif
                {{-- <img src="{{ asset('frontend/assets/img/blog/blog-1.jpg') }}" class="card-img-top" alt="..."> --}}
                <div class="card-body">
                    <h5 class="card-title fw-bold fs-2">{{ $data->title }}</h5>
                    <p class="card-text"><small class=" fs-5" style="color: #B93737;">{{ $data->author }} -
                            {{$data->created_at->format('d F Y')}}</small></p>
                    <p class="card-text">{!! $data->body !!}</p>
                    <a href="/artikel" class="btn btn-danger">
                        Kembali</a>
                    {{-- <button type="submit" class="btn btn-danger">Back</button> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->

    <!-- ====== Baca Selengkapnya Section ====== -->
    {{-- <section id="blog" class="blog">
        <div class="container d-flex justify-content-center data-aos=" fade-up">
            <div class="card col-md-9">
                <div class="card-header text-center fw-bold fs-5">Baca Artikel Lainnya</div>
                <div class="card-body" style="background-color: #B93737;">
                    <div class="row posts-list p-3">
                        <div class=" col-md-6 p-4">
                            <article style="background-color: #fff;">
                                <div class="post-img">
                                    <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                                </div>

                                <h2 class="title">
                                    <a href="baca-full-artikel.html">Respon Gempa Cianjur, PMI Kirim Personel dan
                                        Bantuan</a>
                                </h2>

                                <div class="d-flex align-items-center">
                                    <div class="post-meta">
                                        <p class="post-author-list">Moch Surya</p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01">Jan 1, 2022</time>
                                        </p>
                                        <p class="button-details pt-2">
                                            <a href="baca-full-artikel.html">Baca Selengkapnya</a>
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div><!-- End post list item -->

                        <div class=" col-md-6 p-4">
                            <article style="background-color: #fff;">
                                <div class="post-img">
                                    <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                                </div>

                                <h2 class="title">
                                    <a href="baca-full-artikel.html">Respon Gempa Cianjur, PMI Kirim Personel dan
                                        Bantuan</a>
                                </h2>

                                <div class="d-flex align-items-center">
                                    <div class="post-meta">
                                        <p class="post-author-list">Moch Surya</p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01">Jan 1, 2022</time>
                                        </p>
                                        <p class="button-details pt-2">
                                            <a href="baca-full-artikel.html">Baca Selengkapnya</a>
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div><!-- End post list item -->
                    </div>
                </div>
            </div>

    </section> --}}
    <!--End Section-->

</main>
@endsection