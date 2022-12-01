<div class="main-sidebar navbar-nav sidebar sidebar-style-1">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"> <img alt="SIPMBA" src="{{ asset('auth/assets/img/logo.png') }}" class="header-logo" />
                <span class="logo-name">SIPMBA</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown {{ Request::is('dashboard*') ? 'active' : '' }}">
                <a href="/dashboard" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="{{ Request::is('data-permintaan-darah*') ? 'active' : '' }}">
                <a href="index.html" class="nav-link"><i data-feather="user-plus"></i><span>Data Permintaan
                        Darah</span></a>
            </li>
            <li class="dropdown {{ Request::is('data-petugas*') ? 'active' : '' }}">
                <a href="#" class="nav-link"><i data-feather="users"></i><span>Data Petugas</span></a>
            </li>
            <li class="dropdown {{ Request::is('data-pendonor*') ? 'active' : '' }}">
                <a href="#" class="nav-link"><i data-feather="bar-chart-2"></i><span>Data Pendonor</span></a>
            </li>
            <li class="menu-header">Input</li>
            <li class="dropdown {{ Request::is('stok-darah*') ? 'active' : '' }}">
                <a href="#" class="nav-link"><i data-feather="bar-chart"></i><span>Stok Darah</span></a>
            </li>
            <li class="dropdown {{ Request::is('kuisioner*') ? 'active' : '' }}">
                <a href="/kuisioner" class="nav-link"><i data-feather="layers"></i><span>Kuisioner</span></a>
            </li>
            <li class="dropdown {{ Request::is('berita*') ? 'active' : '' }}">
                <a href="/berita" class="nav-link"><i data-feather="file-text"></i><span>Berita</span></a>
            </li>
        </ul>
    </aside>
</div>