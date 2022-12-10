@extends('layout.app')

@section('frontend')
<!-- ======= Hero Section | Landing ======= -->
<section id="hero" class="hero">
    <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div
                class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2>Selamat Datang di PMI</h2>
                <h2>Kabupaten Bantul</h2>
                <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque
                    eum quaerat.
                </p>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="/form-pendaftaran" class="btn-get-started">Donor Sekarang</a>
                    <a href="page-donordarah/info-stok.html" class=" btn-watch-video d-flex align-items-center">
                        <i class="bi-info-circle"></i><span>Informasi Stok Darah</span></a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('frontend/assets/img/blog/blog-1.jpg') }}" class="d-block w-100"
                                alt="image blog1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('frontend/assets/img/blog/blog-1.jpg') }}" class="d-block w-100"
                                alt="image blog2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('frontend/assets/img/blog/blog-3.jpg') }}" class="d-block w-100"
                                alt="image blog3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Services | 4 Layanan-->
    <div class="icon-boxes position-relative">
        <div class="container position-relative">
            <div class="row gy-4 mt-5">

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-calendar-week"></i></div>
                        <h4 class="title"><a href="/jadwal-mobilisasi-donor" class="stretched-link">Event Donor
                                Darah</a></h4>
                    </div>
                </div>
                <!--End Jadwal -->

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-box-seam"></i></div>
                        <h4 class="title"><a href="/informasi-stok-darah" class="stretched-link">Stok
                                Darah</a></h4>
                    </div>
                </div>
                <!--End Stok Darah -->

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bi-book"></i></div>
                        <h4 class="title"><a href="/procedure-syarat-donor" class="stretched-link">Prosedur & Syarat
                                Donor Darah</a></h4>
                    </div>
                </div>
                <!--End Prosedur & Alur Donor -->

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-bounding-box-circles"></i></div>
                        <h4 class="title"><a href="/alur-permintaan-darah" class="stretched-link">Alur Permintaan
                                Darah</a></h4>
                    </div>
                </div>
                <!--End Alur Permintaan Darah-->

            </div>
        </div>
    </div>

    </div>
</section>
<!-- End Hero Section - Landing -->


<!-- ======= Artikel Terkini Section ======= -->
<section id="recent-artikel" class="recent-artikel">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Artikel Terkini</h2>
        </div>

        @foreach ($news as $data)
        <div class="row gy-12">
            <div class="card" style="max-width: 100%;">
                <div class="row gy-0">
                    @if ($data->image)
                    <div class="col-md-4 p-4">
                        <img src="{{ asset('storage/' . $data->image) }}" class="img-fluid rounded" alt="image"
                            style="width:1024; height: 768;" width="1024" height="768">
                    </div>
                    @else
                    <div class="col-md-4 p-4">
                        <img src="https://source.unsplash.com/1024x768?{{ $data->title }}" class="img-fluid rounded"
                            alt="image" style="width:1024; height: 768;" width="1024" height="768">
                    </div>
                    @endif
                    {{-- <div class="col-md-4 p-4">
                        <img src="{{ asset('frontend/assets/img/portfolio/branding-1.jpg') }}" class="img-fluid rounded"
                            alt="image" style="width:1024; height: 768;">
                    </div> --}}
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title pt-4">{{ $data->title }}</h5>
                            <p class="card-text"><small class="text-muted">{{ $data->author }} - {{
                                    $data->created_at->format('l, d F Y') }}
                                </small></p>
                            <p class="card-text">{!! Str::limit($data->body, 130) !!}</p>
                            <p class="button-details pt-2">
                                <a href="/home/detail/{{ $data->slug }}">Baca Selengkapnya</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        {{-- <div class="row gy-12 pt-4">
            <div class="card" style="max-width: 100%;">
                <div class="row gy-0">
                    <div class="col-md-4 p-4">
                        <img src="{{ asset('frontend/assets/img/portfolio/branding-1.jpg') }}" class="img-fluid rounded"
                            alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title pt-4">Judul Artikel</h5>
                            <p class="card-text"><small class="text-muted">Moch Surya - Senin, 21 November 2022
                                </small></p>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="button-details pt-2">
                                <a href="baca-full-artikel.html">Baca Selengkapnya</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gy-12 pt-4">
            <div class="card" style="max-width: 100%;">
                <div class="row gy-0">
                    <div class="col-md-4 p-4">
                        <img src="{{ asset('frontend/assets/img/portfolio/branding-1.jpg') }}" class="img-fluid rounded"
                            alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title pt-4">Judul Artikel</h5>
                            <p class="card-text"><small class="text-muted">Moch Surya - Senin, 21 November 2022
                                </small></p>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="button-details pt-2">
                                <a href="baca-full-artikel.html">Baca Selengkapnya</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>
<!-- End Artikel Terkini Section -->
{{-- <h1>Beranda</h1> --}}
@endsection