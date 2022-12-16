@extends('layout.main')

@section('backend')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Informasi {{ $title }}</h1>
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

{{-- <div class="container px-5 pt-"> --}}
    <div class="col-md-12 mt-4">
        <div class="card-group">
            <div class="card me-3">
                <div class="card-body">
                    <h6 class="card-title text-danger fs-1">{{ $bloodStock }}</h6>
                    <h5 class="card-text">Jumlah Stok Darah</h5>
                </div>
            </div>
            <div class="card ms-3 me-3">
                <div class="card-body">
                    <h6 class="card-title text-danger fs-1">{{ $bloodIn }}</h6>
                    <h5 class="card-text">Jumlah Darah Masuk</h5>
                </div>
            </div>
            <div class="card ms-3">
                <div class="card-body">
                    <h6 class="card-title text-danger fs-1">{{ $bloodOut }}</h6>
                    <h5 class="card-text">Jumlah Darah Keluar</h5>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="col-md-12 mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 21rem;">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-danger mt-3 fs-1">{{ $bloodStock }}</h6>
                        <h5 class="card-title">Jumlah Stok Darah</h5>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 21rem;">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 mt-3 text-danger fs-1">{{ $bloodIn }}</h6>
                        <h5 class="card-title">Jumlah Darah Masuk</h5>

                    </div>
                </div>
            </div>
            <div class="col-md-4 ms-2">
                <div class="card" style="width: 21rem;">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 mt-3 text-danger fs-1">{{ $bloodOut }}</h6>
                        <h5 class="card-title">Jumlah Darah Keluar</h5>
                    </div>
                </div>
            </div>
        </div> --}}
        {{--
    </div> --}}
</div>

<div class="table-responsive col-md-12">
    <a href="/stok-darah/create" class="btn btn-warning mb-2 mt-4">Tambahkan Stok Darah</a>
    <table class="table table-striped table-secondary table-sm table-bordered border-light mt-3">
        <thead>
            <tr class="text-center">
                <th scope="col">No</th>
                <th scope="col">Golongan Darah</th>
                <th scope="col">Komponen</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Tanggal Update</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stock as $bloods)
            <tr>
                <td class="text-center">{{
                    ($stock->currentPage() - 1) * ($stock->perPage()) + $loop->iteration }}</td>
                <td class="text-center">{{ $bloods->bloodGroup->group_name}}</td>
                <td>{{ $bloods->bloodComponent->component_name }}</td>
                {{-- <td>{{ $bloods->name_officer }}</td> --}}
                <td class="text-center">{{ $bloods->sum }}</td>
                <td class="text-center">{{ $bloods->updated_at->format('d/m/Y') }}</td>
                <td class="text-center">
                    <a href="{{ route('stok-darah.show', $bloods->id) }}}}" class="badge bg-primary"><i
                            class="bi bi-eye"></i></a>
                    <a href="{{ route('stok-darah.edit', $bloods->id) }}" class="badge bg-success"><i
                            class="bi bi-pencil-square"></i></></a>
                    <form action="{{ route('stok-darah.destroy', $bloods->id) }}}}" method="post" class="d-inline">
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
    {{ $stock->links() }}
</div>
</div>
@endsection