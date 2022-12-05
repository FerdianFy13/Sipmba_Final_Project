<header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="/" class="d-flex align-items-center">
            <img src="{{ asset('frontend/assets/img/logo-pmi.png') }}" alt="logo" width="20%">
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="/" class="{{ Request::is('/*') ? 'active' : '' }}">Beranda</a></li>
                <li><a href="/artikel" class="{{ Request::is('artikel*') ? 'active' : '' }}">Artikel</a></li>
                <li class="dropdown">
                    <a href="/procedure-syarat-donor"
                        class="{{ Request::is('procedure-syarat-donor*', 'informasi-stok-darah*', 'jadwal-mobilisasi-donor*', 'alur-permintaan-darah*') ? 'active' : '' }}"><span>Donor
                            Darah</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="/procedure-syarat-donor"
                                class="{{ Request::is('procedure-syarat-donor*') ? 'active' : '' }}">Prosedur & Syarat
                                Donor</a></li>
                        <li><a href="/informasi-stok-darah"
                                class="{{ Request::is('informasi-stok-darah*') ? 'active' : '' }}">Informasi Stok
                                Darah</a></li>
                        <li><a href="/jadwal-mobilisasi-donor"
                                class="{{ Request::is('jadwal-mobilisasi-donor*') ? 'active' : '' }}">Jadwal Mobilisasi
                                Donor</a></li>
                        <li><a href="/alur-permintaan-darah"
                                class="{{ Request::is('alur-permintaan-darah*') ? 'active' : '' }}">Alur Pemintaan
                                Darah</a></li>
                    </ul>
                </li>
                <li><a href=" /profil" class="{{ Request::is('profil*') ? 'active' : '' }}">Profil</a></li>
                <li><a href="/kontak" class="{{ Request::is('kontak*') ? 'active' : '' }}">Kontak</a></li>
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('home/form-pendaftaran*') ? 'active' : '' }}"
                        href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Welcome {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-danger" href="#">Profil</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item text-danger" href="{{ route('logout') }}"></i>
                                Logout</a></li>
                    </ul>
                </li>
                @else
                <li><a href="/login" class="{{ Request::is('login*', 'home/form-pendaftaran*') ? 'active' : '' }}"><span
                            class="bi bi-box-arrow-in-right" style="font-size: 21px ;"></span></a></li>
                @endauth
            </ul>
        </nav>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
</header>