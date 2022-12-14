@extends('layout.main')

@section('backend')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Update Data Petugas</h1>
</div>
<div class="col-lg-10">
    <form action="{{ route('data-petugas.update', $data->id) }}" method="post" enctype="multipart/form-data"
        class="mb-5">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="name class=" form-label">Nama Lengkap</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name', $data->name) }}" required>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control  @error('slug') is-invalid @enderror" id="slug" name="slug" readonly
                required value="{{ old('slug', $data->slug) }}">
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">NIK</label>
            <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik"
                value="{{ old('nik', $data->nik) }}" required>
            @error('nik')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="pmi_id" class="form-label">ID PMI</label>
            <input type="text" class="form-control @error('pmi_id') is-invalid @enderror" id="pmi_id" name="pmi_id"
                value="{{ old('pmi_id', $data->pmi_id) }}" required>
            @error('pmi_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="born" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control @error('born') is-invalid @enderror" id="born" name="born"
                value="{{ old('born', $data->born) }}" required>
            @error('born')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date"
                value="{{ old('date', $data->date) }}" required>
            @error('date')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="category_id" required>
                @foreach ($categories as $category)
                @if (old('category_id', $data->category_id) == $category->id)
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
                value="{{ old('alamat', $data->alamat) }}" required>
            @error('alamat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                value="{{ old('email', $data->email) }}" required>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="telepon" class="form-label">Telepon</label>
            <input type="text" class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon"
                value="{{ old('telepon', $data->telepon) }}" required>
            @error('telepon')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="job" class="form-label">Jabatan</label>
            <input type="text" class="form-control @error('') is-invalid @enderror" id="job" name="job"
                value="{{ old('job', $data->job) }}" required>
            @error('job')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar Petugas</label>
            <input type="hidden" name="oldImage" value="{{ $data->image }}">
            @if ($data->image)
            <img src="{{ asset('storage/' . $data->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
            <img class="img-preview img-fluid mb-3 col-sm-5">
            @endif
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"
                onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
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