@extends('layout.main')

@section('backend')
<div class="col-md-12">
    <article>
        <h2 class="mb-3 text-dark fw-bold text-center">{{ $news->title }}</h2>
        <p>By <a class="text-decoration-none text-danger">{{ $news->author
                }}
            </a> </p>
        {{-- @if ($news->image) --}}
        <div style="max-height:400px; overflow:hidden;">
            <img src=" {{ asset('storage/' . $news->image) }}" class="img-fluid mt-3 col-sm-5">
        </div>
        {{-- @else
        <img src="https://source.unsplash.com/1200x300?{{ $news->title }}" class="img-fluid mt-3">
        @endif --}}
        <p class="card-text mt-1"><small class="text-muted">Create {{ $news->created_at->format('l, d F Y')
                }}</small></p>
        <p style="text-align: justify;">{!! $news->body !!}</p>
        {{-- <a href="/portofolio?catgory={{ $news->category->slug }}" class="text-decoration-none text-danger">read
            more
            {{ $news->category->name }}</a> --}}
        <a href="/berita" class="btn btn-danger"><i class="bi bi-arrow-left"></i> Back</a>
        <br>
    </article>
</div>
@endsection