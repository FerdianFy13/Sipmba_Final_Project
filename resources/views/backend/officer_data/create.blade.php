@extends('layout.main')

@section('backend')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambahkan Data Petugas</h1>
</div>
<div class="col-lg-10">
    <form action="/data-petugas" method="post" enctype="multipart/form-data" class="mb-5">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name') }}" required placeholder="Masukkan nama lengkap anda">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control  @error('slug') is-invalid @enderror" id="slug" name="slug" readonly
                required value="{{ old('slug') }}">
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">NIK</label>
            <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik"
                value="{{ old('nik') }}" required placeholder="Masukkan Nomor Induk Kependudukan anda">
            @error('nik')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="pmi_id" class="form-label">ID PMI</label>
            <input type="text" class="form-control @error('pmi_id') is-invalid @enderror" id="pmi_id" name="pmi_id"
                value="{{ old('pmi_id') }}" required placeholder="Masukkan ID PMI anda">
            @error('pmi_id')
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
            <label for="date" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date"
                value="{{ old('date') }}" required placeholder="Masukkan tanggal lahir anda">
            @error('date')
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
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"
                value="{{ old('alamat') }}" required placeholder="Masukkan alamat anda">
            @error('alamat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                value="{{ old('email') }}" required placeholder="Masukkan alamat email anda">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="telepon" class="form-label">Telepon</label>
            <input type="text" class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon"
                value="{{ old('telepon') }}" required placeholder="Masukkan nomor telepon anda">
            @error('telepon')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="job" class="form-label">Jabatan</label>
            <input type="text" class="form-control @error('') is-invalid @enderror" id="job" name="job"
                value="{{ old('job') }}" required placeholder="Masukkan jabatan anda">
            @error('job')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar Petugas</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"
                onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
    </form>
</div>
<script>
    const title = document.querySelector('#name')
        const slug = document.querySelector('#slug')
    
        title.addEventListener("change", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
            // fetch('/berita/checkSlug?title=' + title.value)
            // .then((response) => response.json())
            // .then((data) => (slug.value = data.slug))
        });

        function previewImage() {
        const image = document.querySelector('#image')
        const previewImages = document.querySelector('.img-preview')

        previewImages.style.display = 'block'

        const ofReader = new FileReader()
        ofReader.readAsDataURL(image.files[0])

        ofReader.onload = function (oFREvent) {
            previewImages.src = oFREvent.target.result
        }
    }
</script>
@endsection