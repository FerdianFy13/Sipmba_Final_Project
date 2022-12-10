@extends('layout.app')

@section('frontend')
<div class="col-md-12 mt-2">
</div>
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
                <h4 class="mt-5">Donor Darah</h4>
                <p>Silahkan mengisi Formulir Donor Darah untuk melakukan pendonoran. Pastikan data yang diisi telah
                    benar!</p>
            </div>
            <div class="card">
                <div class="card-header fw-bold p-3">Formulir Donor Darah - Identitas Diri</div>
                <div class="card-body container">
                    <form action="/kuisioner2" method="post" enctype="multipart/form-data" class="mb-5">
                        @csrf
                        {{-- @foreach ($quiz as $kuis) --}}
                        <div class="mb-3">
                            <label for="answer1" class="form-label">Apakah anda bersedia donor pada waktu bulan
                                puasa?</label>
                            <input type="text" class="form-control @error('answer1') is-invalid @enderror" id="answer1"
                                name="answer1" value="{{ old('answer1') }}" required
                                placeholder="Masukkan jawaban Iya atau Tidak">
                            @error('answer1')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="answer2" class="form-label">Apakah anda bersedia donor saat dibutuhkan untuk
                                keperluan tertentu?
                                (Diluar donor rutin)</label>
                            <input type="text" class="form-control @error('answer2') is-invalid @enderror" id="answer2"
                                name="answer2" value="{{ old('answer2') }}" required
                                placeholder="Masukkan jawaban Iya atau Tidak">
                            @error('answer2')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="answer3" class="form-label">Donor terakhir tanggal?</label>
                            <input type="date" class="form-control @error('answer3') is-invalid @enderror" id="answer3"
                                name="answer3" value="{{ old('answer3') }}" required
                                placeholder="Masukkan jawaban Iya atau Tidak">
                            @error('answer3')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="answer4" class="form-label">Sekarang donor yang ke?</label>
                            <input type="text" class="form-control @error('answer4') is-invalid @enderror" id="answer4"
                                name="answer4" value="{{ old('answer4') }}" required
                                placeholder="Masukkan jawaban berupa angka">
                            @error('answer4')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        {{-- @endforeach --}}
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
                        <div class="text-end mt-2">
                            <a href="{{ route('logout') }}" class="btn btn-primary">
                                Kembali Menu Utama</a>
                            <button type="submit" class="btn btn-danger">Kirim</button>
                            {{-- <a href="{{ route('logout') }}" class="btn btn-danger"><i
                                    class="bi bi-arrow-right"></i>
                                Kirim</a> --}}
                        </div>
                        {{-- <button type="submit" class="btn btn-primary">Tambahkan</button> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection