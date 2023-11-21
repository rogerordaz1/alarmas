{{-- Navbar --}}
<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        ETECSA PR
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('assets/brand/coreui.svg#signet') }} "></use>
        </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item">
            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ route('home') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer') }} "></use>
                </svg>Panel de Control</a>
        </li>
        <li class="nav-item {{ request()->is('/alarmas') ? 'active' : '' }}"><a class="nav-link"
                href="{{ route('alarmas.index') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-bell') }}"></use>
                </svg>Alarmas</a></li>

        @can('dashboard.users.index')
            <li class="nav-item {{ request()->is('/users') || request()->is('/users/*') ? 'active' : '' }}">
                <a class="nav-link " href="{{ route('users.index') }}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer') }} "></use>
                    </svg>Gestion de Usuarios</a>
            </li>
        @endcan
        @can('dashboard.servicios.index')
            <li class="nav-item {{ request()->is('/servicios') || request()->is('/servicios/*') ? 'active' : '' }}">
                <a class="nav-link " href="{{ route('servicios.index') }}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer') }} "></use>
                    </svg>Gestion de Servicios</a>
            </li>
        @endcan
        @can('dashboard.equipos.index')
            <li class="nav-item {{ request()->is('/equipos') || request()->is('/equipos/*') ? 'active' : '' }}">
                <a class="nav-link " href="{{ route('equipos.index') }}">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
                    </svg>Gestion de Equipos</a>
            </li>
        @endcan
    </ul>

</div>
