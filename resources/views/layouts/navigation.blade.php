<!-- Topbar Start -->
<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-end mb-0">
        <li class="dropdown notification-list topbar-dropdown">
            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="{{route('dashboard')}}" role="button" aria-haspopup="false" aria-expanded="false">
                <!-- <img src="{{asset('admin/assets/images/users/user-1.jpg')}}" alt="user-image" class="rounded-circle"> -->
                <span class="pro-user-name ms-1">
                    {{ Auth::user()->name }} <i class="mdi mdi-chevron-down"></i>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">

                <!-- item-->
                <a href="{{route('profile.edit')}}" class="dropdown-item notify-item">
                    <i class="fe-user"></i>
                    <span>My Account</span>
                </a>

                <div class="dropdown-divider"></div>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" class="dropdown-item notify-item">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </x-responsive-nav-link>
                </form>

            </div>
        </li>

        <li class="dropdown notification-list">
            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                <i class="fe-settings noti-icon"></i>
            </a>
        </li>

    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="{{route('dashboard')}}" class="logo logo-light text-center">
            <span class="logo-sm">
                <img src="{{asset('admin/assets/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{asset('admin/assets/images/logo-light.png')}}" alt="" height="16">
            </span>
        </a>
        <a href="{{route('dashboard')}}" class="logo logo-dark text-center">
            <span class="logo-sm">
                <img src="{{asset('admin/assets/images/logo-sm.png')}}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{asset('admin/assets/images/logo-dark.png')}}" alt="" height="16">
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
        <li>
            <button class="button-menu-mobile disable-btn waves-effect">
                <i class="fe-menu"></i>
            </button>
        </li>

        <li>
            <h4 class="page-title-main">Dashboard</h4>
        </li>

    </ul>

    <div class="clearfix"></div>

</div>
<!-- end Topbar -->