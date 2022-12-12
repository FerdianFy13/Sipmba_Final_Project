@extends('layout.main')

@section('backend')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Detail Stok Darah</h1>
</div>
<div class="col-lg-10">
    <form action="{{ route('stok-darah.update', $blood->id) }}" method="post" enctype="multipart/form-data"
        class="mb-5">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="blood_group_id" class="form-label">Golongan Darah</label>
            <select class="form-select" name="blood_group_id" required readonly>
                <option selected>Pilih golongan darah yang sesuai</option>
                @foreach ($group as $groups)
                @if (old('blood_group_id', $blood->blood_group_id) == $groups->id)
                <option value="{{ $groups->id }}" selected>{{ $groups->group_name }}</option>
                @else
                <option value="{{ $groups->id }}">{{ $groups->group_name }}</option>
                @endif
                @endforeach
            </select>
            @error('blood_group_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="blood_component_id" class="form-label">Komponen Darah</label>
            <select class="form-select" name="blood_component_id" required>
                <option selected readonly>Pilih komponen darah yang sesuai</option>
                @foreach ($component as $components)
                @if (old('blood_component_id', $blood->blood_component_id) == $components->id)
                <option value="{{ $components->id }}" selected>{{ $components->component_name }}</option>
                @else
                <option value="{{ $components->id }}">{{ $components->component_name }}</option>
                @endif
                @endforeach
            </select>
            @error('blood_component_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sum" class="form-label">Jumlah</label>
            <input type="text" class="form-control @error('sum') is-invalid @enderror" id="sum" name="sum"
                value="{{ old('sum', $blood->sum) }}" required placeholder="Masukkan jumlah darah">
            @error('sum')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection