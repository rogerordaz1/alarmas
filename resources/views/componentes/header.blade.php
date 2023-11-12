{{-- Header blade php --}}

<header class="header header-sticky mb-4">
    <div class="container-fluid">
        <button class="header-toggler px-md-0 me-md-3" type="button"
            onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
                <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
            </svg>
        </button><a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
                <use xlink:href='{{ asset('assets/brand/coreui.svg#full') }}''></use>
            </svg></a>
        <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
        </ul>


        <ul class="header-nav ms-3">
            <li class="nav-item dropdown">
                <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#"
                    role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-md">
                        <img class="avatar-img" src=" {{ asset('assets/img/users.png') }} "
                            alt="user@email.com">
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="dropdown-header bg-light py-2">
                        <div class="fw-semibold">Account</div>
                    </div>
                    <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Logout </a>
                        </form>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link">{{Auth::user()->name}}</a></li>
        </ul>
    </div>
</header>
