@extends('layout.app')

@section('frontend')
<main id="main">
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h2 class="fs-3 fw-bold">Artikel</h2>
                        <p>Halaman Artikel merupakan halaman yang berisi mengenai kegiatan, edukasi, dan juga berita
                            terbaru dari
                            PMI Kabupaten Bantul.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Artikel</li>
                </ol>
            </div>
        </nav>
    </div>

    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4 posts-list">
                @foreach ($news as $data)
                <div class="col-xl-4 col-md-6">
                    <article>
                        @if ($data->image)
                        <div class="post-img">
                            <img src="{{ asset('storage/' . $data->image) }}" alt="" class="img-fluid">
                        </div>
                        @else
                        <div class="post-img">
                            <img src="https://source.unsplash.com/336x252?{{ $data->title }}" alt="" class="img-fluid">
                        </div>
                        @endif

                        <h2 class="title">
                            <a href="/artikel/detail/{{ $data->slug }}">{{ $data->title }}</a>
                        </h2>

                        <div class="d-flex align-items-center">
                            <div class="post-meta">
                                <p class="post-author-list">{{ $data->author }}</p>
                                <p class="post-date">
                                    <time datetime="2022-01-01">{{ $data->created_at }}</time>
                                </p>
                                <p class="button-details pt-2">
                                    <a href="/artikel/detail/{{ $data->slug }}">Baca Selengkapnya</a>
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-3 mb-3 text-danger">
                {{ $news->links() }}
            </div>
    </section>
</main>
@endsection