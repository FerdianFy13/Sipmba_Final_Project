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
                            <h6 class="card-subtitle text-center mb-4">{{ date('l, d F Y') }}</h6>
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
                                        {{-- AHF --}}
                                        <tr>
                                            <th class="text-center">1</th>
                                            <th class="text-start">AHF
                                            </th>
                                            <td>{{ $ahfBloodA }}</td>
                                            <td>{{ $ahfBloodB }}</td>
                                            <td>{{ $ahfBloodAB }}</td>
                                            <td>{{ $ahfBloodO }}</td>
                                            <td>{{ $ahfBloodA + $ahfBloodB + $ahfBloodAB + $ahfBloodO }}</td>
                                        </tr>
                                        {{-- end AHF --}}

                                        {{-- Plasma Konvaselen --}}
                                        <tr>
                                            <th class="text-center">2</th>
                                            <th class="text-start">Plasma Konvaselen
                                            </th>
                                            <td>{{ $plasmaBloodA }}</td>
                                            <td>{{ $plasmaBloodB }}</td>
                                            <td>{{ $plasmaBloodAB }}</td>
                                            <td>{{ $plasmaBloodO }}</td>
                                            <td>{{ $plasmaBloodA + $plasmaBloodB + $plasmaBloodAB + $plasmaBloodO }}
                                            </td>
                                        </tr>
                                        {{-- end Plasma Konvaselen --}}

                                        {{-- FFP --}}
                                        <tr>
                                            <th class="text-center">3</th>
                                            <th class="text-start">FFP
                                            </th>
                                            <td>{{ $ffpBloodA }}</td>
                                            <td>{{ $ffpBloodB }}</td>
                                            <td>{{ $ffpBloodAB }}</td>
                                            <td>{{ $ffpBloodO }}</td>
                                            <td>{{ $ffpBloodA + $ffpBloodB + $ffpBloodAB + $ffpBloodO }}
                                            </td>
                                        </tr>
                                        {{-- end FFP --}}

                                        {{-- PCR --}}
                                        <tr>
                                            <th class="text-center">4</th>
                                            <th class="text-start">PCR
                                            </th>
                                            <td>{{ $pcrBloodA }}</td>
                                            <td>{{ $pcrBloodB }}</td>
                                            <td>{{ $pcrBloodAB }}</td>
                                            <td>{{ $pcrBloodO }}</td>
                                            <td>{{ $pcrBloodA + $pcrBloodB + $pcrBloodAB + $pcrBloodO }}
                                            </td>
                                        </tr>
                                        {{-- end PCR --}}

                                        {{-- prc --}}
                                        <tr>
                                            <th class="text-center">5</th>
                                            <th class="text-start">PRC
                                            </th>
                                            <td>{{ $prcBloodA }}</td>
                                            <td>{{ $prcBloodB }}</td>
                                            <td>{{ $prcBloodAB }}</td>
                                            <td>{{ $prcBloodO }}</td>
                                            <td>{{ $prcBloodA + $prcBloodB + $prcBloodAB + $prcBloodO }}
                                            </td>
                                        </tr>
                                        {{-- end prc --}}

                                        {{-- TC --}}
                                        <tr>
                                            <th class="text-center">6</th>
                                            <th class="text-start">TC
                                            </th>
                                            <td>{{ $tcBloodA }}</td>
                                            <td>{{ $tcBloodB }}</td>
                                            <td>{{ $tcBloodAB }}</td>
                                            <td>{{ $tcBloodO }}</td>
                                            <td>{{ $tcBloodA + $tcBloodB + $tcBloodAB + $tcBloodO }}
                                            </td>
                                        </tr>
                                        {{-- end TC --}}

                                        {{-- WB --}}
                                        <tr>
                                            <th class="text-center">7</th>
                                            <th class="text-start">WB
                                            </th>
                                            <td>{{ $wbBloodA }}</td>
                                            <td>{{ $wbBloodB }}</td>
                                            <td>{{ $wbBloodAB }}</td>
                                            <td>{{ $wbBloodO }}</td>
                                            <td>{{ $wbBloodA + $wbBloodB + $wbBloodAB + $wbBloodO }}
                                            </td>
                                        </tr>
                                        {{-- end WB --}}
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