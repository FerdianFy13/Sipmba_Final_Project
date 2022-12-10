@extends('layout.app')

@section('frontend')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h2 class="fs-3 fw-bold">Informasi Stok Darah</h2>
                        <p>Informasi stok darah pada halaman ini merupakan stok darah realtime.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Donor Darah</li>
                    <li>Informasi Stok Darah</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= info-stok-darah Section ======= -->
    <section id="info-stok" class="info-stok">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                <div class="col-sm-12 p-3">
                    <div class="card p-4" style="background-color: #B93737; color: #fff; border-radius: 15px;">
                        <div class="card-body">
                            <h5 class="card-title text-center fw-bolder">Informasi Stok Darah</h5>
                            <h6 class="card-subtitle text-center mb-4">24 November 2022</h6>
                            <div class="table-responsive-md p-3" style="background-color: #fff; border-radius: 15px;">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Golongan Darah</th>
                                            <th scope="col">A</th>
                                            <th scope="col">B</th>
                                            <th scope="col">AB</th>
                                            <th scope="col">O</th>
                                            <th scope="col">Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <th class="text-start">AHF</th>
                                            <td>15</td>
                                            <td>25</td>
                                            <td>30</td>
                                            <td>40</td>
                                            <td>110</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <th class="text-start">Plasma Konvaselen</th>
                                            <td>15</td>
                                            <td>25</td>
                                            <td>30</td>
                                            <td>40</td>
                                            <td>110</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <th class="text-start">FFP</th>
                                            <td>15</td>
                                            <td>25</td>
                                            <td>30</td>
                                            <td>40</td>
                                            <td>110</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <th class="text-start">PCR</th>
                                            <td>15</td>
                                            <td>25</td>
                                            <td>30</td>
                                            <td>40</td>
                                            <td>110</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <th class="text-start">PRC</th>
                                            <td>15</td>
                                            <td>25</td>
                                            <td>30</td>
                                            <td>40</td>
                                            <td>110</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <th class="text-start">TC</th>
                                            <td>15</td>
                                            <td>25</td>
                                            <td>30</td>
                                            <td>40</td>
                                            <td>110</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <th class="text-start">WB</th>
                                            <td>15</td>
                                            <td>25</td>
                                            <td>30</td>
                                            <td>40</td>
                                            <td>110</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="card-footer text-center p-4">
                                <a href="/form-pendaftaran" class="mx-2">
                                    <button type="button" class="btn btn-outline-light"">Donor</button>
                  </a>
                  <a href=" /alur-permintaan-darah">
                                        <button type="button" class="btn btn-outline-light">Minta Darah</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>
    <!-- End info-stok-darah section -->


</main><!-- End #main -->
@endsection