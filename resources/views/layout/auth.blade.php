<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} || PMI Kabupaten Bantul</title>

    <!-- CSS -->
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('auth/assets/css/style.css') }}">

    {{-- font --}}
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    {{-- Icon --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('auth/assets/img/logo.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    {{-- Feather Icons --}}
    <link rel="stylesheet" href="https://unpkg.com/feather-icons">

</head>

<body>
    <div class="container mt-5 mb-5">
        @yield('auth')
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>

    {{-- Option 2: Dashboard JS --}}
    {{-- <script src="{{ asset('template_bootstrap/js/dashboard.js') }}"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
</body>

</html>