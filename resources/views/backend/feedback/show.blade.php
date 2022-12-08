@extends('layout.main')

@section('backend')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Detail Feedback</h1>
</div>
<div class="col-lg-10">
    {{-- <form action="/feedback" method="post" enctype="multipart/form-data" class="mb-5"> --}}
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Pengirim</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name', $feedback->name) }}" required placeholder="Masukkan nama lengkap anda" readonly>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Alamat Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                value="{{ old('email', $feedback->email) }}" required placeholder="Masukkan nama alamat email anda"
                readonly>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">Subjek</label>
            <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject"
                value="{{ old('subject', $feedback->subject) }}" required
                placeholder="Masukkan subjek pesan yang akan dikirim" readonly>
            @error('subject')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            {{-- <textarea class="form-control" placeholder="Masukkan pesan yang ingin anda kirim" id="message"
                name="message" required readonly value="{{ old('message', $feedback->message) }}"></textarea> --}}
            <input type="text" class="form-control @error('message') is-invalid @enderror" id="message" name="message"
                value="{{ old('message', $feedback->message) }}" required readonly>
            @error('message')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <a href="/feedback" class="btn btn-danger"><i class="bi bi-arrow-left"></i> Back</a>
        {{-- <button type="submit" class="btn btn-primary">Tambahkan</button> --}}
        {{--
    </form> --}}
</div>
@endsection