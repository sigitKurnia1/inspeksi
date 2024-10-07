<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">Monitoring Jembatan</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <img alt="image" src="{{ asset('assets/images/logo.png') }}" width="30px" class="rounded-circle mr-1">
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li class="{{ Route::is('dashboard') ? 'active' : '' }}"><a class="nav-link"
                    href="{{ route('dashboard') }}"><i class="fas fa-map"></i> <span>Dashboard</span></a></li>
            <li class="{{ Request::is('bridge*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('bridge') }}"><i
                        class="fas fa-book"></i> <span>Jembatan</span></a></li>
            <li class="dropdown {{ Request::is('laporan*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-file"></i><span>Laporan</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('laporan/a5*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('laporan.a5') }}">Form A5</a></li>
                    <li class="{{ Request::is('laporan/a6*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('laporan.a6') }}">Form A6</a></li>
                    <li class="{{ Request::is('laporan/a9*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('laporan.a9') }}">Form A9</a></li>
                    <li class="{{ Request::is('laporan/a10*') ? 'active' : '' }}"><a class="nav-link" href="{{ route('laporan.a10') }}">Form A10</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
