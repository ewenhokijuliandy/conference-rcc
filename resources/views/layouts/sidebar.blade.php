<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
    {{-- <body data-layout="horizontal" data-sidebar="dark"> --}}
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{ url('/') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/rcc_logo.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/rcc_logo.png') }}" alt="" height="22">
                <span class="logo-txt">
                    <img src="{{ URL::asset('assets/images/logo-rcc-1.jpg') }}" alt="" width="150">
                </span>
            </span>
        </a>

        <a href="{{ url('/') }}" class="logo logo-light">
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/rcc_logo.png') }}" alt="" height="22"> <span class="logo-txt">RCC</span>
            </span>
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/rcc_logo.png') }}" alt="" height="22">
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('home') }}">
                        <i class="bx bx-info-circle icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboards">Information</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('submission') }}">
                        <i class="bx bxs-file icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboards">Submission</span>
                    </a>
                </li>
                @auth
                @if(auth()->user()->role == 'admin')
                <li>
                    <a href="{{ route('admin.papers') }}">
                        <i class="bx bxs-file-plus icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboards">Papers</span>
                    </a>
                </li>
                @endif
                @endauth

                <li class="menu-title" data-key="t-menu">Authentication</li>
                <li>
                    <a href="{{ route('profile') }}">
                        <i class="bx bx-user-circle icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboards">Profile</span>
                        <span class="badge rounded-pill bg-success">Coming Soon!</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('login') }}">
                        <i class="bx bx-log-in-circle icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboards">Login</span>
                        <span class="badge rounded-pill bg-danger" data-key="t-hot">Beta</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}">
                        <i class="bx bx-power-off icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboards">Logout</span>
                        <span class="badge rounded-pill bg-danger" data-key="t-hot">Beta</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
