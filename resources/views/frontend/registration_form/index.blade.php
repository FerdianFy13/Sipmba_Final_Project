@extends('layout.app')

@section('frontend')
<div class="container">
    <h1>Welcome to registration formulir</h1>
    {{-- <h2>Selamat Datang Superadmin</h2> --}}
    {{-- <form action="/logout" method="post">
        @csrf
        <button type="submit" class="btn btn-primary">Logout</button>
    </form> --}}
    <a href="profile.html" class="dropdown-item has-icon"> <i class="far
        fa-user"></i> Profile
        <div class="dropdown-divider"></div>
        <a href="{{ route('logout') }}" class="btn dropdown-item has-icon text-danger">
            <i class="fas fa-sign-out-alt"></i>
            Logout
        </a>
    </a>
</div>
@endsection