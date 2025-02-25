<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ route('admin.index') }}" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="{{ asset('Backend/assets/images/logo-light.png') }}" alt="logo-light" height="20">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>

        </div>

        <div class="d-flex">


            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect"
                    data-toggle="fullscreen">
                    <i class="ri-fullscreen-line"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <span class="d-none d-xl-inline-block ms-1">{{ auth()->user()->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a href="{{ route('home') }}" class="dropdown-item"> Main Page</a>
                    <a href="{{ route('admin.profile.edit') }}" class="dropdown-item"> Profile</a>
                    <a href="{{ route('admin.profile.password.edit') }}" class="dropdown-item"> Edit Password</a>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf

                            <button type="submit" class="dropdown-item text-danger"><i
                            class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</button>
                        </form>
                </div>
            </div>

        </div>
    </div>
</header>
