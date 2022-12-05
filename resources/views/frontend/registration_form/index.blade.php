@extends('layout.app')

@section('frontend')
<section id="hero" class="hero">
    <div class="container position-relative">
        <div class="row" data-aos="fade-in">
            <div class="text-lg-start">
                <h4>Donor Darah</h4>
                <p>Silahkan mengisi Formulir Donor Darah untuk melakukan pendonoran. Pastikan data yang diisi telah
                    benar!</p>
            </div>

            <div class="card">
                <div class="card-header fw-bold p-3">Formulir Donor Darah - Identitas Diri</div>
                <div class="card-body container">
                    <form class="container">
                        <div class="form-group">
                            <label for="staticEmail2" class="label fw-semibold ">NIK/Passport/SIM</label>
                            <input type="text" readonly class="form-control mt-2" id="" value="">
                        </div>

                        <div class="form-group mt-2">
                            <label for="staticEmail2" class="label fw-semibold">Nama Lengkap</label>
                            <input type="text" readonly class="form-control mt-2" id="" value="">
                        </div>

                        <div class="form-group mt-2">
                            <label for="staticEmail2" class="label fw-semibold">Tempat,Tanggal Lahir</label>
                            <input type="text" readonly class="form-control mt-2" id="" value="">
                        </div>

                        <div class="form-group mt-2">
                            <label for="staticEmail2" class="label fw-semibold">Umur</label>
                            <input type="text" readonly class="form-control mt-2" id="" value="">
                        </div>

                        <div class="form-group mt-2">
                            <label for="staticEmail2" class="label fw-semibold">Pekerjaan</label>
                            <input type="text" readonly class="form-control mt-2" id="" value="">
                        </div>

                        <div class="form-group mt-2">
                            <label for="staticEmail2" class="label fw-semibold">No Telepon/HP</label>
                            <input type="text" readonly class="form-control mt-2" id="" value="">
                        </div>

                        <div class="form-group mt-2">
                            <label for="staticEmail2" class="label fw-semibold">Jenis Kelamin</label>
                            <input type="text" readonly class="form-control mt-2" id="" value="">
                        </div>

                        <div class="form-group mt-2">
                            <label for="staticEmail2" class="label fw-semibold">Alamat</label>
                            <input type="text" readonly class="form-control mt-2" id="" value="">
                        </div>
                    </form>
                </div>
                <div class="card-footer text-end">
                    <a href="form-donor-KT1.html" class="btn btn-danger m-3">Selanjutnya</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection