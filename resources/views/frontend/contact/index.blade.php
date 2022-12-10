@extends('layout.app')

@section('frontend')
<main id="main">
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h2 class="fs-3 fw-bold">Kontak</h2>
                        <p>Butuh bantuan? Silahkan hubungi melalui kontak yang tertera pada halaman.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Kontak</li>
                </ol>
            </div>
        </nav>
    </div>

    <section id="contact" class="contact">
        <div class="">
            @if (session()->has('success'))
            <div class="alert alert-success col-md-12" role="alert">
                {{ session('success') }}
            </div>
            @endif

            {{-- session alert confirm for delete this layout all my data --}}
            @if (session()->has('delete'))
            <div class="alert alert-danger col-md-12" role="alert">
                {{ session('delete') }}
            </div>
            @endif

            {{-- session alert confirm for update this layout all my data --}}
            @if (session()->has('update'))
            <div class="alert alert-info col-md-12" role="alert">
                {{ session('update') }}
            </div>
            @endif
        </div>
        <div class="container aos-init aos-animate" data-aos="fade-up">

            <div class="row gx-lg-0 gy-4">

                <div class="col-lg-4">

                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Lokasi:</h4>
                                <p>Jalan Jend. Sudirman No.1, Babadan, Bantul, Kec. Bantul, Kabupaten Bantul, Daerah
                                    Istimewa Yogyakarta 55711</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>pmikab.bantul@gmail.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Telepon:</h4>
                                <p>(0274) 367987</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-clock flex-shrink-0"></i>
                            <div>
                                <h4>Jam Buka:</h4>
                                <p>Senin-Minggu: 24 Jam</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>

                </div>

                <div class="col-lg-8">
                    <h4 class="fw-bold ms-5 mt-3">Hubungi Kami,</h4>
                    <div class="card ms-5">
                        <form action="/kontak" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-4">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Nama Pengirim" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Alamat Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek"
                                    required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Pesan"
                                    required></textarea>
                            </div>
                            {{-- <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div> --}}
                            <div class="text-center mt-4"><button type="submit" class="btn btn-danger">Kirim Pesan</button></div>
                            {{-- <button type="submit" class="text-center justify-content-center">Kirim Pesan</button>
                            --}}
                        </form>
                    </div>
                </div><!-- End Contact Form -->
            </div>

        </div>
    </section>
</main>
@endsection