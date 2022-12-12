@extends('layout.main')

@section('backend')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Detail Stok Darah</h1>
</div>
<div class="col-lg-10">
    {{-- <form action="/stok-darah" method="post" enctype="multipart/form-data" class="mb-5"> --}}
        @csrf
        <div class="mb-3">
            <label for="blood_group_id" class="form-label">Golongan Darah</label>
            <input type="text" class="form-control @error('sum') is-invalid @enderror" id="sum" name="sum"
                value="{{ old('blood_group_id', $blood->bloodGroup->group_name) }}" required
                placeholder="Masukkan komponen darah yang sesuai" readonly>
            @error('blood_group_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="blood_component_id" class="form-label">Komponen Darah</label>
            <input type="text" class="form-control @error('sum') is-invalid @enderror" id="sum" name="sum"
                value="{{ old('blood_component_id', $blood->bloodComponent->component_name) }}" required
                placeholder="Masukkan komponen darah yang sesuai" readonly>
            @error('blood_component_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sum" class="form-label">Jumlah</label>
            <input type="text" class="form-control @error('sum') is-invalid @enderror" id="sum" name="sum"
                value="{{ old('sum', $blood->sum) }}" required placeholder="Masukkan jumlah darah" readonly>
            @error('sum')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{-- <button type="submit" class="btn btn-primary">Tambahkan</button> --}}
        <a href="/stok-darah" class="btn btn-danger"><i class="bi bi-arrow-left"></i> Back</a>
    </form>
</div>
@endsection