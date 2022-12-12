@extends('layout.main')

@section('backend')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambahkan Kuisioner</h1>
</div>
<div class="col-lg-10">
    <form action="/event" method="post" enctype="multipart/form-data" class="mb-5">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Event</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name') }}" required placeholder="Masukkan nama event kegiatan">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="place" class="form-label">Tempat Event</label>
            <input type="text" class="form-control @error('place') is-invalid @enderror" id="place" name="place"
                value="{{ old('place') }}" required placeholder="Masukkan nama tempat eveent kegiatan">
            @error('place')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat Event</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"
                value="{{ old('alamat') }}" required placeholder="Masukkan alamat event kegiatan">
            @error('alamat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Tanggal Event</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date"
                value="{{ old('date') }}" required>
            @error('date')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="time" class="form-label">Waktu Event</label>
            <input type="text" class="form-control @error('time') is-invalid @enderror" id="time" name="time"
                value="{{ old('time') }}" required placeholder="Masukkan waktu event kegiatan">
            @error('time')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="call" class="form-label">Narahubung Event</label>
            <input type="text" class="form-control @error('call') is-invalid @enderror" id="call" name="call"
                value="{{ old('call') }}" required placeholder="Masukkan Nomer Handphone">
            @error('call')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="qouta" class="form-label">Kouta Donor</label>
            <input type="text" class="form-control @error('qouta') is-invalid @enderror" id="qouta" name="qouta"
                value="{{ old('qouta') }}" required placeholder="Masukkan jumlah kouta donor">
            @error('qouta')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
    </form>
</div>
@endsection