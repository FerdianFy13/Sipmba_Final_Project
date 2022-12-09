@extends('layout.main')

@section('backend')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $title }}</h1>
</div>
<div class="col-lg-10">
    <form action="{{ route('two-kuisioner.update', $quiz->id) }}" method="post" enctype="multipart/form-data"
        class="mb-5">
        @csrf
        @method('patch')
        {{-- @foreach ($quiz as $kuis) --}}
        <div class="mb-3">
            {{-- <label for="user_id" class="form-label">User</label> --}}
            <input type="hidden" class="form-control @error('user_id') is-invalid @enderror" id="user_id" name="user_id"
                value="{{ auth()->user()->id }}" placeholder="Masukkan nama pertanyaan" readonly>
            @error('user_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="answer1" class="form-label">Apakah anda bersedia donor pada waktu bulan puasa?</label>
            <input type="text" class="form-control @error('answer1') is-invalid @enderror" id="answer1" name="answer1"
                value="{{ old('answer1', $quiz->answer1) }}" required placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer1')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="answer2" class="form-label">Apakah anda bersedia donor saat dibutuhkan untuk keperluan tertentu?
                (Diluar donor rutin)</label>
            <input type="text" class="form-control @error('answer2') is-invalid @enderror" id="answer2" name="answer2"
                value="{{ old('answer2', $quiz->answer2) }}" required placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer2')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="answer3" class="form-label">Donor terakhir tanggal?</label>
            <input type="date" class="form-control @error('answer3') is-invalid @enderror" id="answer3" name="answer3"
                value="{{ old('answer3', $quiz->answer3) }}" required placeholder="Masukkan jawaban Iya atau Tidak">
            @error('answer3')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="answer4" class="form-label">Sekarang donor yang ke?</label>
            <input type="text" class="form-control @error('answer4') is-invalid @enderror" id="answer4" name="answer4"
                value="{{ old('answer4', $quiz->answer4) }}" required placeholder="Masukkan jawaban berupa angka">
            @error('answer4')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- @endforeach --}}
        {{-- <a href="/one-kuisioner" class="btn btn-danger"><i class="bi bi-arrow-left"></i> Back</a> --}}
        <button type="submit" class="btn btn-primary">Update</button>

    </form>
</div>
@endsection