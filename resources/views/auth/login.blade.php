@extends('layout.auth')

@section('auth')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card w-60 p-5 mt-3" style="border-radius: 20px">
            <div class="card-body">
                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if (session()->has('failed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('failed') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <main class="form-signin">
                    <form action="/login" method="POST">
                        @csrf
                        {{-- <img class="mt-2 mb-4" src="{{ asset('auth/assets/img/logo.png') }}" alt="logo" width="120"
                            height="120" style="display:block; margin:auto;"> --}}
                        {{-- <h3 class="h3 mb-3 fw-normal text-center">Selamat Datang</h3> --}}
                        <h3 class="h3 mb-3 fw-bold text-start">Masuk</h3>
                        <h4 class="h4 mb-4 fw-normal text-start">Selamat Datang, silahkan masuk untuk melanjutkan!</h4>
                        {{-- <h4 class="h4 mb-4 fw-normal text-center">PMI Kabupaten Bantul</h4> --}}
                        <div class="form-floating">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required
                                style="border-radius: 10px">
                            <label for="email">Email</label>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Password" required style="border-radius: 10px">
                            <label for="password">Kata Sandi</label>
                        </div>
                        <button class="w-100 btn btn-lg mt-3 text-light"
                            style="background-color: #b93737; border-radius: 10px;" type="submit"><i
                                class="bi bi-box-arrow-in-right me-2"></i>Masuk</button>
                    </form>
                    <small class="mt-3 d-block text-center text-dark">Tidak memiliki akun? <a href="/daftar"
                            class="text-decoration-none text-danger">Daftar Sekarang!</a></small>
                </main>
            </div>
        </div>
    </div>
</div>
@endsection