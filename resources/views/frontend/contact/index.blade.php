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
                                <h4>Location:</h4>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-clock flex-shrink-0"></i>
                            <div>
                                <h4>Open Hours:</h4>
                                <p>Mon-Sat: 11AM - 23PM</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>

                </div>

                <div class="col-lg-8">
                    <form action="/kontak" method="post" enctype="multipart/form-data" class="php-email-form">
                        @csrf
                        <h4 class="fw-bold">Hubungi Kami,</h4>
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
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                        {{-- <button type="submit" class="text-center justify-content-center">Kirim Pesan</button> --}}
                    </form>
                </div><!-- End Contact Form -->
            </div>

        </div>
    </section>
</main>
@endsection