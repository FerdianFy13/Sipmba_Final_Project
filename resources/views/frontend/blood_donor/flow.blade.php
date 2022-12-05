@extends('layout.app')

@section('frontend')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h2 class="fs-3 fw-bold">Alur Permintaan Darah</h2>
                        <p>Alur dan Procedure dalam mengajukan permintaan darah ke PMI Bantul.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Donor Darah</li>
                    <li>Alur Permintaan Darah</li>
                </ol>
            </div>
        </nav>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Alur-minta-darah Section ======= -->
    <section id="alur-minta-darah" class="alur-minta-donor">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                <div class="col-sm-12 p-3">
                    <div class="card p-4" style="background-color: #B93737; color: #fff;">
                        <div class="card-body">
                            <h5 class="card-title fw-bolder">Dokumen Yang Dibutuhkan</h5>
                            <p class="card-text">
                                <li>Surat Pengantar Dokter atau Rumah Sakit</li>
                                <li>Sampel Darah Pasien</li>
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mt-5">
                <div class="d-flex justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h2 class="fs-3 fw-bold">Alur Permintaan Darah</h2>
                    </div>
                </div>

                <div class="slide-container swiper">
                    <div class="slide-content">
                        <div class="card-wrapper swiper-wrapper">
                            <div class="card swiper-slide p-4">
                                <div class="bi bi-file-medical" style="font-size: 70px; color: #B93737;"></div>
                                <div class="card-content">
                                    <h2 class="name fw-bold">Penyerahan Formulir Permintaan Darah dan Sampel Darah dari
                                        Rumah Sakit.
                                    </h2>
                                </div>
                            </div>

                            <div class="card swiper-slide p-4">
                                <div class="bi bi-clipboard2-check" style="font-size: 70px; color: #B93737;"></div>
                                <div class="card-content">
                                    <h2 class="name fw-bold">Pengecekan Administrasi.</h2>
                                </div>
                            </div>

                            <div class="card swiper-slide p-4">
                                <div class="bi bi-eyedropper" style="font-size: 70px; color: #B93737;"></div>
                                <div class="card-content">
                                    <h2 class="name fw-bold">Cek Kecocokan Darah Pasien dengan Darah Donor.</h2>
                                </div>
                            </div>

                            <div class="card swiper-slide p-4">
                                <div class="bi bi-credit-card-2-back" style="font-size: 70px; color: #B93737;"></div>
                                <div class="card-content">
                                    <h2 class="name fw-bold">Pembayaran Biayaa Pengganti Pengelolaan Darah (BPPD).</h2>
                                </div>
                            </div>

                            <div class="card swiper-slide p-4">
                                <div class="bi bi-bag-check" style="font-size: 70px; color: #B93737;"></div>
                                <div class="card-content">
                                    <h2 class="name fw-bold">Penyerahan Darah Donor.</h2>
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
    <!--end section-->
</main><!-- End #main -->

@endsection