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
                <p>Pendaftaran Donor Darah Berhasil Dilakukan. Silahkan masuk ke ruang afta pmi bantul sesuai dengan
                    nomor antrian yang didapatkan!</p>
            </div>

            <div class="card">
                <div class="card-header fw-bold p-3">Pendaftaran Berhasil !</div>
                <div class="card-tittle fw-bold pt-5 text-center"> Nomor Antrian</div>
                {{-- <span class="text-center pt-3">Antrian akan hangus dalam 3 Menit</span> --}}
                <div class="card-body">
                    <h1 class="text-center mb-3" style="font-size: 150px;">{{ auth()->user()->id }}</h1>
                    <div class="text-center mb-5">
                        <a href="{{ route('logout') }}" class="btn btn-danger">
                            Kembali Menu Utama</a>
                        {{-- <button type="submit" class="btn btn-danger">Kirim</button> --}}
                        {{-- <a href="{{ route('logout') }}" class="btn btn-danger"><i class="bi bi-arrow-right"></i>
                            Kirim</a> --}}
                    </div>
                    <div class="card-footer p-5 text-end">
                    </div>
                </div>
                {{-- <a href="{{ route('logout') }}" class="btn btn-danger m-3">Kembali</a> --}}
            </div>
        </div>
</section>
@endsection