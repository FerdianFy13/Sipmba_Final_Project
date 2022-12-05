<div class="main-sidebar sidebar sidebar-style-1">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"> <img alt="SIPMBA" src="{{ asset('auth/assets/img/logo.png') }}" class="header-logo" />
                <span class="logo-name">SIPMBA</span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown {{ Request::is('dashboard*') ? 'active' : '' }}">
                <a href="/dashboard" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </li>
            <li class="{{ Request::is('data-permintaan-darah*') ? 'active' : '' }}">
                <a href="index.html" class="nav-link"><i class="fas fa-user"></i><span>Data Permintaan
                        Darah</span></a>
            </li>
            <li class="dropdown {{ Request::is('data-petugas*') ? 'active' : '' }}">
                <a href="/data-petugas" class="nav-link"><i class="fas fa-users"></i><span>Data
                        Petugas</span></a>
            </li>
            <li class="dropdown {{ Request::is('data-pendonor*') ? 'active' : '' }}">
                <a href="#" class="nav-link"><i class="fas fa-chart-bar"></i><span>Data Pendonor</span></a>
            </li>
            <li class="menu-header">Input</li>
            <li class="dropdown {{ Request::is('stok-darah*') ? 'active' : '' }}">
                <a href="#" class="nav-link"><i class="fas fa-chart-line"></i><span>Stok Darah</span></a>
            </li>
            <li class="dropdown {{ Request::is('kuisioner*') ? 'active' : '' }}">
                <a href="/kuisioner" class="nav-link"><i class="fas fa-layer-group"></i><span>Kuisioner</span></a>
            </li>
            <li class="dropdown {{ Request::is('berita*') ? 'active' : '' }}">
                <a href="/berita" class="nav-link"><i class="fas fa-file-invoice"></i><span>Berita</span></a>
            </li>
        </ul>
    </aside>
</div>