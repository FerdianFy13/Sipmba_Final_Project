@extends('layout.app')

@section('frontend')
<section id="hero" class="hero">
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
    <div class="container position-relative">
        <div class="row" data-aos="fade-in">
            <div class="text-lg-start">
                <h4>Donor Darah</h4>
                <p>Silahkan mengisi Formulir Donor Darah untuk melakukan pendonoran. Pastikan data yang diisi telah
                    benar!</p>
            </div>

            <div class="card">
                <div class="card-header fw-bold p-3">Formulir Donor Darah - Konfirmasi</div>
                <div class="card-body container">
                    <form action="/konfirmasi" method="post" enctype="multipart/form-data" class="container">
                        @csrf
                        <div class="form-group">
                            <label for="staticEmail2" class="label fw-semibold ">INFORMED CONSENT DONOR</label>
                            <h6 class="mt-2">Yth. Unit Transfusi Darah PMI Kabupaten Bantul</h6>
                            <h6 class="mt-4">Saya telah mendapatkan dan membaca semua informasi yang diberikan serta
                                menjawab
                                pertanyaan dengan jujur.</h6>
                            <h6 class="mt-4">Saya mengerti dan bersedia menyumbangkan darah dengan volume sesuai standar
                                yang
                                diberlakukan dan setuju diambil contoh darahnya untuk keperluan pemeriksaan laboratorium
                                berupa uji
                                golongan darah. HIV,Hepatitis B,Hepatitis C,Sifilis, dan infeksi lainnya yang diperlukan
                                serta untuk
                                kepentingan penelitian. Bila terjadi hasil pemerika=saan laboeatorium perlu ditindak
                                lanjuti. Maka
                                saya setuju untuk diberikan kabar tertulis.</h6>
                            <h6 class="mt-4">Jika komponen plasma tidak terpakai untuk transfusi. Saya setuju dapat
                                dijadika produk
                                plasma untuk pengobatan/dimusnahkan.</h6>

                        </div>

                        <div class="form-group">
                            <div class="col-md-4 d-inline">
                                <div class="form-check form-check-inline mt-4">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="value"
                                        value="Saya telah membaca dan menyetujui
                                        semua
                                        pertanyaan dan pernyataan pada prosedur donor darah">
                                    <h6 class="form-check-label" for="inlineCheckbox1">Saya telah membaca dan menyetujui
                                        semua
                                        pertanyaan dan pernyataan pada prosedur donor darah</h6>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            {{-- <label for="user_id" class="form-label">User</label> --}}
                            <input type="hidden" class="form-control @error('user_id') is-invalid @enderror"
                                id="user_id" name="user_id" value="{{ auth()->user()->id }}"
                                placeholder="Masukkan nama pertanyaan">
                            @error('user_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="card-footer text-end">
                            <a href="{{ route('logout') }}" class="btn btn-danger m-3">Kembali</a>
                            <button type="submit" class="btn btn-danger">Kirim</button>
                            {{-- <a class="btn btn-danger m-3">Konfirmasi</a> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection