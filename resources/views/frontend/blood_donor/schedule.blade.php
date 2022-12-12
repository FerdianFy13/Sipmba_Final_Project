@extends('layout.app')

@section('frontend')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center" style="background-image: url('');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h2 class="fs-3 fw-bold">Informasi Stok Darah</h2>
                        <p>Jadwal dan Lokasi Donor Darah.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Donor Darah</li>
                    <li>Jadwal Mobilisasi Donor</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->

    <section id="alur-donor" class="alur-donor">
        <div class="container aos-init aos-animate ">
            <div class="d-flex justify-content-center">
                <div class="col-lg-7 text-center">
                    <h2 class="fs-3 fw-bold">Jadwal Mobilisasi Donor</h2>
                </div>
            </div>
            <div class="table-responsive col-md-12 mt-2">
                <table class="table table-striped table-light table-sm table-bordered border-secondary mt-3">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">No</th>
                            <th scope="col">Nama Event</th>
                            <th scope="col">Tempat</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Narahubung</th>
                            <th scope="col">Kouta Donor</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($event as $events)
                        <tr>
                            <td class="text-center">{{ ($event->currentPage() - 1) * ($event->perPage()) +
                                $loop->iteration }}</td>
                            <td>{{ $events->name }}</td>
                            <td>{{ Str::limit($events->place, 20) }}</td>
                            <td>{{ Str::limit($events->alamat, 25) }}</td>
                            <td>{{ $events->call }}</td>
                            <td class="text-center">{{ $events->qouta }}</td>
                            <td class="text-center">{{ $events->date }}</td>
                            <td class="text-center">{{ $events->time }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center mt-3 mb-3">
                {{ $event->links() }}
            </div>
        </div>
    </section>
    <!-- ======= jadwal-darah Section ======= -->

    <!-- jadwal-stok-darah section -->
</main>
@endsection