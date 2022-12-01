@extends('layout.main')

@section('backend')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Update Artikel</h1>
</div>
<div class="col-lg-10">
    <form action="{{ route('berita.update', $news->id) }}" method="post" enctype="multipart/form-data" class="mb-5">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title', $news->title) }}" required autofocus>
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control  @error('slug') is-invalid @enderror" id="slug" name="slug" readonly
                required value="{{ old('slug', $news->slug) }}">
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Penulis</label>
            <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author"
                value="{{ old('author', $news->author) }}" required>
            @error('author')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar Berita</label>
            <input type="hidden" name="oldImage" value="{{ $news->image }}">
            @if ($news->image)
            <img src="{{ asset('storage/' . $news->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
        <div class="mb-3">
            <label for="body" class="form-label">Isi Berita</label>
            @error('body')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body', $news->body) }}">
            <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
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