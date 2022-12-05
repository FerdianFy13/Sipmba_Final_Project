@extends('layout.app')

@section('frontend')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h2 class="fs-3 fw-bold">Procedure & Syarat Donor Darah</h2>
                        <p>Baca Prosedur dan Syarat sebelum melakukan Donor Darah.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Donor Darah</li>
                    <li>Prosedur & Syarat Donor Darah</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Alur-darah Section ======= -->
    <section id="alur-donor" class="alur-donor">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                <div class="col-sm-6 p-3">
                    <div class="card p-4" style="background-color: #B93737; color: #fff;">
                        <div class="card-body">
                            <h5 class="card-title fw-bolder">Syarat Pendonor</h5>
                            <h6 class="card-subtitle mb-2">Umum</h6>
                            <p class="card-text">
                                <li>Berumur 17 Tahun ke Atas</li>
                                <li>Berat badan diatas 45 Kilogram</li>
                                <li>Tekanan darah sistolik : 90-160 mm Hg</li>
                                <li>Tekanan darah diastolik : 60-100 mm Hg</li>
                                <li>Nadi 60-100/menit secara teratur</li>
                                <li>Kadar hemoglobin 12.5 g/dl hingga 17 g/dl</li>
                                <li>Telah sarapan/ makan sebelum pengambilan darah</li>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 p-3">
                    <div class="card p-4" style="background-color: #B93737; color: #fff;">
                        <div class="card-body">
                            <h5 class="card-title fw-bolder">Ketentuan Sebelum Donor</h5>
                            <h6 class="card-subtitle mb-2">Umum</h6>
                            <p class="card-text">
                                <li>Berumur 17 Tahun ke Atas</li>
                                <li>Berat badan diatas 45 Kilogram</li>
                                <li>Tekanan darah sistolik : 90-160 mm Hg</li>
                                <li>Tekanan darah diastolik : 60-100 mm Hg</li>
                                <li>Nadi 60-100/menit secara teratur</li>
                                <li>Kadar hemoglobin 12.5 g/dl hingga 17 g/dl</li>
                                <li>Telah sarapan/ makan sebelum pengambilan darah</li>
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-5">
                <div class="d-flex justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h2 class="fs-3 fw-bold">Alur Donor Darah</h2>
                    </div>
                </div>

                <div class="slide-container swiper">
                    <div class="slide-content">
                        <div class="card-wrapper swiper-wrapper">
                            <div class="card swiper-slide p-4">
                                <div class="bi bi-box-arrow-in-right " style="font-size: 70px; color: #B93737;"></div>
                                <div class="card-content">
                                    <h2 class="name fw-bold">Masuk atau Daftar Akun.</h2>
                                </div>
                            </div>

                            <div class="card swiper-slide p-4">
                                <div class="bi bi-file-earmark-text" style="font-size: 70px; color: #B93737;"></div>
                                <div class="card-content">
                                    <h2 class="name fw-bold">Mengisi Formulir Donor Darah dan Cetak Antrian.</h2>
                                </div>
                            </div>

                            <div class="card swiper-slide p-4">
                                <div class="bi bi-clipboard2-check" style="font-size: 70px; color: #B93737;"></div>
                                <div class="card-content">
                                    <h2 class="name fw-bold">Cek kelayakan Donor di Ruang Afta PMI Bantul .</h2>
                                </div>
                            </div>

                            <div class="card swiper-slide p-4">
                                <div class="bi bi-droplet" style="font-size: 70px; color: #B93737;"></div>
                                <div class="card-content">
                                    <h2 class="name fw-bold">Proses Pengambilan Darah.</h2>
                                </div>
                            </div>

                            <div class="card swiper-slide p-4">
                                <div class="bi bi-check2-square" style="font-size: 70px; color: #B93737;"></div>
                                <div class="card-content">
                                    <h2 class="name fw-bold">Donor Selesai.</h2>
                                </div>
                            </div>



                        </div>
                    </div>

                    <div class="swiper-button-next swiper-navBtn"></div>
                    <div class="swiper-button-prev swiper-navBtn"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>

        </div>
    </section>
    <!--end of section-->
</main><!-- End #main -->
@endsection