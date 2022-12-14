<div class="main-sidebar sidebar sidebar-style-1">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"> <img alt="SIPMBA" src="{{ asset('auth/assets/img/logo.png') }}" class="header-logo" />
                {{-- <a href="index.html"> <img alt="SIPMBA" src="{{ asset('frontend/assets/img/logo-pmi.png') }}"
                        class="header-logo" /> --}}
                    <span class="logo-name">SIPMBA</span>
                </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown {{ Request::is('dashboard*') ? 'active' : '' }}">
                <a href="/dashboard" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </li>
            <li class="{{ Request::is('data-permintaan-darah*') ? 'active' : '' }}">
                <a href="/data-permintaan-darah" class="nav-link"><i class="fas fa-user"></i><span>Data Permintaan
                        Darah</span></a>
            </li>
            <li class="dropdown {{ Request::is('data-petugas*') ? 'active' : '' }}">
                <a href="/data-petugas" class="nav-link"><i class="fas fa-users"></i><span>Data
                        Petugas</span></a>
            </li>
            <li
                class="dropdown {{ Request::is('data-pendonor*', 'one-kuisioner*', 'two-kuisioner*') ? 'active' : 'text-light'}}">
                <a href="/data-pendonor" class="menu-toggle nav-link has-dropdown"><i
                        class="fas fa-chart-bar"></i><span>Data Pendonor</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link text-dark fw-bold" href="/data-pendonor">Formulir Identitas Diri</a></li>
                    <li><a class="nav-link text-dark fw-bold" href="/one-kuisioner">Formulir Kuisioner 1</a></li>
                    <li><a class="nav-link text-dark fw-bold" href="/two-kuisioner">Formulir Kuisioner 2</a></li>
                </ul>
            </li>
            <li class="menu-header">Input</li>
            <li class="dropdown {{ Request::is('stok-darah*') ? 'active' : '' }}">
                <a href="/stok-darah" class="nav-link"><i class="fas fa-chart-line"></i><span>Stok Darah</span></a>
            </li>
            <li class="dropdown {{ Request::is('kuisioner*') ? 'active' : '' }}">
                <a href="/kuisioner" class="nav-link"><i class="fas fa-layer-group"></i><span>Kuisioner</span></a>
            </li>
            <li class="dropdown {{ Request::is('berita*') ? 'active' : '' }}">
                <a href="/berita" class="nav-link"><i class="fas fa-file-invoice"></i><span>Berita</span></a>
            </li>
            <li class="dropdown {{ Request::is('event*') ? 'active' : '' }}">
                <a href="/event" class="nav-link"><i class="fas fa-calendar-alt"></i><span>Event</span></a>
            </li>
            <li class="dropdown {{ Request::is('feedback*') ? 'active' : '' }}">
                <a href="/feedback" class="nav-link"><i class="fas fa-comments"></i><span>Feedback</span></a>
            </li>
        </ul>
    </aside>
</div>