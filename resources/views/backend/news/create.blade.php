@extends('layout.main')

@section('backend')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambahkan Artikel</h1>
</div>
<div class="col-lg-10">
    <form action="/berita" method="post" enctype="multipart/form-data" class="mb-5">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title') }}" required placeholder="Masukkan judul artikel">
            @error('title')
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
            <label for="author" class="form-label">Penulis</label>
            <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author"
                value="{{ old('author') }}" required placeholder="Masukkan nama penulis artikel">
            @error('author')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar Berita</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"
                onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Isi Berita</label>
            <input type="hidden" class="form-control @error('body') is-invalid @enderror" id="body" name="body"
                value="{{ old('body') }}" required>
            @error('body')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
    </form>
</div>
<script>
    // function slug() {
        const title = document.querySelector('#title')
        const slug = document.querySelector('#slug')
    
        title.addEventListener("change", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
            fetch('/berita/checkSlug?title=' + title.value)
            .then((response) => response.json())
            .then((data) => (slug.value = data.slug))
        });

        // sluggable
        // title.addEventListener('change', function () {
        //   fetch('/berita/checkSlug?title=' + title.value)
        //     .then((response) => response.json())
        //     .then((data) => (slug.value = data.slug))
        // })
    // }

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