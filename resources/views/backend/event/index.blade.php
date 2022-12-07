@extends('layout.main')

@section('backend')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ $title }}</h1>
</div>
{{-- <h1 class="mx-3 border-bottom">News</h1> --}}
{{-- session alert confirm for insert this layout all my data --}}

<div class="col-md-12 mt-2">
    @if (session()->has('success'))
    <div class="alert alert-success col-md-12" role="alert">
        {{ session('success') }}
    </div>
    @endif

    {{-- session alert confirm for delete this layout all my data --}}
    @if (session()->has('delete'))
    <div class="alert alert-danger col-md-12" role="alert">
        {{ session('delete') }}
    </div>
    @endif

    {{-- session alert confirm for update this layout all my data --}}
    @if (session()->has('update'))
    <div class="alert alert-info col-md-12" role="alert">
        {{ session('update') }}
    </div>
    @endif
</div>

<div class="table-responsive col-md-12">
    <a href="/event/create" class="btn btn-warning mb-2">Tambahkan Event</a>
    <table class="table table-striped table-secondary table-sm table-bordered border-light mt-3">
        <thead>
            <tr class="text-center">
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Tempat</th>
                <th scope="col">Alamat</th>
                <th scope="col">Narahubung</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Waktu</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($event as $events)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $events->name }}</td>
                <td>{{ $events->place }}</td>
                <td>{{ $events->alamat }}</td>
                <td>{{ $events->call }}</td>
                {{-- <td>{!! Str::limit($events->body, 20) !!}</td> --}}
                <td class="text-center">{{ $events->date }}</td>
                <td class="text-center">{{ $events->time }}</td>
                <td class="text-center">
                    <a href="{{ route('event.show', $events->id) }}}}" class="badge bg-primary"><i
                            class="bi bi-eye"></i></a>
                    <a href="{{ route('event.edit', $events->id) }}" class="badge bg-success"><i
                            class="bi bi-pencil-square"></i></></a>
                    <form action="{{ route('event.destroy', $events->id) }}}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0"
                            onclick="return confirm('Are you sure you want to delete this?')"><i
                                class="bi bi-x-circle"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="d-flex justify-content-center mt-3 mb-3">
    {{-- {{ $news->links() }} --}}
</div>
</div>
@endsection