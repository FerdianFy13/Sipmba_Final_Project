@extends('layout.main')

@section('backend')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambahkan Data Pendonor</h1>
</div>
<div class="col-lg-10">
    <form action="/data-pendonor" method="post" enctype="multipart/form-data" class="mb-5">
        @csrf
        <div class="">
            <label for="staticEmail2" class="label fw-bolder ">Formulir Identitas Diri</label>
        </div>
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik"
                value="{{ old('nik') }}" required placeholder="Masukkan Nomor Induk Kependudukan anda">
            @error('nik')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name') }}" required placeholder="Masukkan nama Lengkap anda">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="born" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control @error('born') is-invalid @enderror" id="born" name="born"
                value="{{ old('born') }}" required placeholder="Masukkan tempat lahir anda">
            @error('born')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="day" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control @error('day') is-invalid @enderror" id="day" name="day"
                value="{{ old('day') }}" required placeholder="Masukkan tanggal lahir anda">
            @error('day')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Umur</label>
            <input type="text" class="form-control @error('age') is-invalid @enderror" id="age" name="age"
                value="{{ old('age') }}" required placeholder="Masukkan umur anda">
            @error('age')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="job" class="form-label">Pekerjaan</label>
            <input type="text" class="form-control @error('job') is-invalid @enderror" id="job" name="job"
                value="{{ old('job') }}" required placeholder="Masukkan pekerjaan anda">
            @error('job')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="call" class="form-label">Telepon</label>
            <input type="text" class="form-control @error('call') is-invalid @enderror" id="call" name="call"
                value="{{ old('call') }}" required placeholder="Masukkan nomor telepon anda">
            @error('call')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="category_id" required>
                <option selected>Pilih jenis kelamin yang sesuai</option>
                @foreach ($categories as $category)
                @if (old('category_id') == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->gender }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->gender }}</option>
                @endif
                @endforeach
            </select>
            @error('category_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="place" class="form-label">Alamat</label>
            <input type="text" class="form-control @error('place') is-invalid @enderror" id="place" name="place"
                value="{{ old('place') }}" required placeholder="Masukkan alamat anda">
            @error('place')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- <div class="">
            <label for="staticEmail2" class="label fw-bolder ">Formulir Kuisioner</label>
        </div>
        <div class="mb-3">
            <label for="option1" class="form-label">Apakah anda pernah donor darah sebelumnya?</label>
            <input type="text" class="form-control @error('option1') is-invalid @enderror" id="option1" name="option1"
                value="{{ old('option1') }}" required placeholder="Masukkan jawaban Iya atau Tidak">
            @error('option1')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="option2" class="form-label">Apakah anda bersedia untuk donor darah?</label>
            <input type="text" class="form-control @error('option2') is-invalid @enderror" id="option2" name="option2"
                value="{{ old('option2') }}" required placeholder="Masukkan jawaban Iya atau Tidak">
            @error('option2')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="option3" class="form-label">Apakah anda bersedia donor saat dibutuhkan untuk keperluan
                tertentu?</label>
            <input type="text" class="form-control @error('option3') is-invalid @enderror" id="option3" name="option3"
                value="{{ old('option3') }}" required placeholder="Masukkan jawaban Iya atau Tidak">
            @error('option3')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Donor terakhir tanggal?</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date"
                value="{{ old('date') }}" required placeholder="">
            @error('date')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div> --}}
        <button type="submit" class="btn btn-primary">Tambahkan</button>
    </form>
</div>
@endsection