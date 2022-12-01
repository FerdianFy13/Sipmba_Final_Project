<!DOCTYPE html>
<html lang="en">

<head>
    {{-- meta tag --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- end meta tag --}}

    {{-- css --}}
    <!-- CSS -->
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/component.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/custom.css') }}">

    {{-- <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: inline;
        }
    </style> --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    {{-- end css --}}

    {{-- icon --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('auth/assets/img/logo.png') }}">
    <link rel="stylesheet" href="https://unpkg.com/feather-icons">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    {{-- end icon --}}

    {{-- title --}}
    <title>{{ $title }} || PMI Kabupaten Bantul</title>
    {{-- end title --}}
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            {{-- navbar --}}
            @section('navbar')
            @include('backend.partial.navbar')
            @show
            {{-- end navbar --}}

            {{-- sidebar --}}
            @section('sidebar')
            @include('backend.partial.sidebar')
            @show
            {{-- end sidebar --}}

            <div class="main-content">
                <section class="section">
                    <div class="container">
                        @yield('backend')
                    </div>
                </section>
            </div>

            {{-- footer --}}
            @section('footer')
            @include('backend.partial.footer')
            @show
            {{-- end footer --}}
        </div>
    </div>

    {{-- javascript --}}
    <script src="{{ asset('backend/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('backend/assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/page/index.js') }}"></script>
    <script src="{{ asset('backend/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom.js') }}"></script>
    {{-- <script src="{{ asset('backend/assets/js/trix.js') }}"></script> --}}
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ asset('backend/assets/js/slug.js') }}"></script> --}}
    {{-- end javascript --}}
</body>

</html>