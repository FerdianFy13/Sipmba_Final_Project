@extends('layout.main')

@section('backend')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Update Event</h1>
</div>
<div class="col-lg-10">
    <form action="{{ route('event.update', $events->id) }}" method="post" enctype="multipart/form-data" class="mb-5">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label fo r="name" class="form-label">Nama Event</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name', $events->name) }}" required>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="place" class="form-label">Tempat Event</label>
            <input type="text" class="form-control @error('place') is-invalid @enderror" id="place" name="place"
                value="{{ old('place', $events->place) }}" required>
            @error('place')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Tanggal Event</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date"
                value="{{ old('date', $events->date) }}" required>
            @error('date')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="time" class="form-label">Waktu Event</label>
            <input type="text" class="form-control @error('time') is-invalid @enderror" id="time" name="time"
                value="{{ old('time', $events->time) }}" required>
            @error('time')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection