@extends('layout.auth')

@section('auth')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card w-60 p-5 mt-3" style="border-radius: 20px">
            <div class="card-body">
                <main class="form-registration">
                    <form action="/daftar" method="POST">
                        @csrf
                        {{-- <img class="mt-2 mb-4" src="{{ asset('auth/assets/img/logo.png') }}" alt="logo" width="120"
                            height="120" style="display:block; margin:auto;"> --}}
                        <h3 class="h3 mb-3 fw-bold text-start">Daftar Akun</h3>
                        <h4 class="h5 mb-4 fw-normal text-start text-justify">Selamat Datang, Silahkan lengkapi data
                            sesuai dengan
                            KTP untuk melanjutkan!</h4>
                        <div class="form-floating">
                            <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik"
                                id="nik" placeholder="NIK" autofocus required value="{{ old('nik') }}"
                                style="border-radius: 10px">
                            <label for="nik">NIK</label>
                            @error('nik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name"
                                id="name" placeholder="name" required value="{{ old('name') }}"
                                style="border-radius: 10px">
                            <label for="name">Nama Lengkap</label>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email"
                                id="email" placeholder="name@gmail.com" required value="{{ old('email') }}"
                                style="border-radius: 10px">
                            <label for="email">Email</label>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" id="password" placeholder="Password" required
                                value="{{ old('password') }}" style="border-radius: 10px">
                            <label for="password">Kata Sandi</label>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button class="w-100 btn btn-lg text-light mt-3"
                            style="background-color: #b93737; border-radius: 10px;" type="submit"
                            style="border-radius: 20px"><i class="bi bi-box-arrow-in-right me-2"></i>Daftar</button>
                    </form>
                    <small class="mt-3 d-block text-center text-dark">Sudah memiliki akun? <a href="/login"
                            class="text-decoration-none text-danger">Masuk</a></small>
                    {{-- <p class="mt-5 mb-3 text-muted">&copy; Ferdi 2020 – 2021</p> --}}
                </main>
            </div>
        </div>
    </div>
</div>
@endsection