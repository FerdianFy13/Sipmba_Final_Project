@extends('layout.main')

@section('backend')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Update Data Permintaan Darah</h1>
</div>
<div class="col-lg-8">
    <form action="{{ route('data-permintaan-darah.update', $bloods->id) }}" method="post" enctype="multipart/form-data"
        class="mb-5">
        @csrf
        @method('patch')
        <div class="">
            <label for="staticEmail2" class="label fw-bolder ">Formulir Data Permintaan Darah</label>
        </div>
        <div class="mb-3">
            <label for="hospital" class="form-label">Rumah Sakit</label>
            <input type="text" class="form-control @error('hospital') is-invalid @enderror" id="hospital"
                name="hospital" value="{{ old('hospital', $bloods->hospital) }}" required
                placeholder="Masukkan nama rumah sakit">
            @error('hospital')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="name_request" class="form-label">Nama Pemohon</label>
            <input type="text" class="form-control @error('name_request') is-invalid @enderror" id="name_request"
                name="name_request" value="{{ old('name_request',$bloods->name_request) }}" required
                placeholder="Masukkan nama pemohon permintaan darah">
            @error('name_request')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="call_officer" class="form-label">Nomor Telepon Pemohon</label>
            <input type="text" class="form-control @error('call_officer') is-invalid @enderror" id="call_officer"
                name="call_officer" value="{{ old('call_officer', $bloods->call_officer) }}" required
                placeholder="Masukkan nomor telepon pemohon permintaan darah">
            @error('call_officer')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="name_officer" class="form-label">Nama Petugas</label>
            <input type="text" class="form-control @error('name_officer') is-invalid @enderror" id="name_officer"
                name="name_officer" value="{{ old('name_officer', $bloods->name_officer) }}" required
                placeholder="Masukkan nama petugas">
            @error('name_officer')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Tanggal</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date"
                value="{{ old('date',$bloods->date) }}" required placeholder="Masukkan tanggal permintaan darah">
            @error('date')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="time" class="form-label">Waktu</label>
            <input type="text" class="form-control @error('time') is-invalid @enderror" id="time" name="time"
                value="{{ old('time', $bloods->time) }}" required placeholder="Masukkan waktu permintaan darah">
            @error('time')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="">
            <label for="staticEmail2" class="label fw-bolder ">Formulir Golongan Darah</label>
        </div>
        <div class="mb-3">
            <label for="sum" class="form-label">Jumlah Permintaan Darah</label>
            <input type="text" class="form-control @error('sum') is-invalid @enderror" id="sum" name="sum"
                value="{{ old('sum', $bloods->sum) }}" required placeholder="Masukkan jumlah permintaan darah">
            @error('sum')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="">
            <label for="staticEmail2" class="label fw-bolder ">Golongan Darah</label>
        </div>
        <div class="row">
            <div class="col-lg-3 text-center">
                <div class="mb-3">
                    <label for="blooda1" class="form-label">A+</label>
                    <input type="text" class="form-control @error('blooda1') is-invalid @enderror" id="blooda1"
                        name="blooda1" value="{{ old('blooda1', $bloods->blooda1) }}" required
                        placeholder="Masukkan jumlah permintaan darah">
                    @error('blooda1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                {{-- <h1>ff</h1> --}}
            </div>
            <div class="col-lg-3 text-center">
                <div class="mb-3">
                    <label for="blooda2" class="form-label">A-</label>
                    <input type="text" class="form-control @error('blooda2') is-invalid @enderror" id="blooda2"
                        name="blooda2" value="{{ old('blooda2', $bloods->blooda2) }}" required
                        placeholder="Masukkan jumlah permintaan darah">
                    @error('blooda2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                {{-- <h1>ff</h1> --}}
            </div>
            <div class="col-lg-3 text-center">
                {{-- <h1>ff</h1> --}}
                <div class="mb-3">
                    <label for="bloodb1" class="form-label">B+</label>
                    <input type="text" class="form-control @error('bloodb1') is-invalid @enderror" id="bloodb1"
                        name="bloodb1" value="{{ old('bloodb1', $bloods->bloodb1) }}" required
                        placeholder="Masukkan jumlah permintaan darah">
                    @error('bloodb1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-3 text-center">
                {{-- <h1>ff</h1> --}}
                <div class="mb-3">
                    <label for="bloodb2" class="form-label">B-</label>
                    <input type="text" class="form-control @error('bloodb2') is-invalid @enderror" id="bloodb2"
                        name="bloodb2" value="{{ old('bloodb2', $bloods->bloodb2) }}" required
                        placeholder="Masukkan jumlah permintaan darah">
                    @error('bloodb2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 text-center">
                <div class="mb-3">
                    <label for="bloodc1" class="form-label">AB+</label>
                    <input type="text" class="form-control @error('bloodc1') is-invalid @enderror" id="bloodc1"
                        name="bloodc1" value="{{ old('bloodc1', $bloods->bloodc1) }}" required
                        placeholder="Masukkan jumlah permintaan darah">
                    @error('bloodc1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                {{-- <h1>ff</h1> --}}
            </div>
            <div class="col-lg-3 text-center">
                <div class="mb-3">
                    <label for="bloodc2" class="form-label">AB-</label>
                    <input type="text" class="form-control @error('bloodc2') is-invalid @enderror" id="bloodc2"
                        name="bloodc2" value="{{ old('bloodc2', $bloods->bloodc2) }}" required
                        placeholder="Masukkan jumlah permintaan darah">
                    @error('bloodc2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                {{-- <h1>ff</h1> --}}
            </div>
            <div class="col-lg-3 text-center">
                {{-- <h1>ff</h1> --}}
                <div class="mb-3">
                    <label for="bloodd1" class="form-label">O+</label>
                    <input type="text" class="form-control @error('bloodd1') is-invalid @enderror" id="bloodd1"
                        name="bloodd1" value="{{ old('bloodd1', $bloods->bloodd1) }}" required
                        placeholder="Masukkan jumlah permintaan darah">
                    @error('bloodd1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-3 text-center">
                {{-- <h1>ff</h1> --}}
                <div class="mb-3">
                    <label for="bloodd2" class="form-label">O-</label>
                    <input type="text" class="form-control @error('bloodd2') is-invalid @enderror" id="bloodd2"
                        name="bloodd2" value="{{ old('bloodd2', $bloods->bloodd2) }}" required
                        placeholder="Masukkan jumlah permintaan darah">
                    @error('bloodd2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection