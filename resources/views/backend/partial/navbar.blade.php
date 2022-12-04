<nav class="navbar navbar-expand-lg main-navbar sticky">
    <div class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
                          collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                    <i data-feather="maximize"></i>
                </a></li>
            <li>
                <form class="form-inline mr-auto">
                    {{-- <div class="search-element">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                            data-width="200">
                        <button class="btn" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div> --}}
                </form>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                    src="{{ asset('backend/assets/img/user.png') }}" class="user-img-radious-style"> <span
                    class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
                <div class="dropdown-title">{{ auth()->user()->name }}</div>
                {{-- <a href="profile.html" class="dropdown-item has-icon"> <i class="far
                              fa-user"></i> Profile --}}
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="btn dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </a>
                    {{--
                </a> --}}
            </div>
        </li>
        {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark fw-bolder" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item text-danger" href="/dashboard"><i
                            class="bi bi-layout-text-window-reverse pr-2"></i> Dashboard</a></li>
                <li>
                    <hr class="dropdown-divider bg-dark">
                </li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button class="dropdown-item text-danger"><i class="pr-2 bi bi-box-arrow-right"></i>
                            logout</button>
                    </form>
                </li>
            </ul>
        </li> --}}
    </ul>
</nav>