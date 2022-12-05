<!DOCTYPE html>
<html lang="en">

<head>
    {{-- meta tag --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- end meta tag --}}

    {{-- css --}}
    {{--
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    --}}
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    {{--
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('dist/css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/node_modules/color-calendar/dist/css/theme-basic.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/node_modules/color-calendar/dist/css/theme-glass.css') }}">
    {{-- end css --}}

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    {{-- end font --}}

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
    {{-- navbar --}}
    @section('navbar')
    @include('frontend.partial.navbar')
    @show
    {{-- end navbar --}}

    {{-- content --}}
    @yield('frontend')
    {{-- end content --}}

    {{-- footer --}}
    @section('footer')
    @include('frontend.partial.footer')
    @show
    {{-- end footer --}}

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    {{-- javascript --}}
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
    <script src="{{ asset('frontend/node_modules/color-calendar/dist/bundle.js') }}"></script>
    {{-- end javascript --}}
</body>

</html>