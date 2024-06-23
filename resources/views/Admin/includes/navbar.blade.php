@section('style')
<style>
    #sidebar-menu>ul>li>a i {
        line-height:unset;
    }
    #sidebar-menu #side-menu li a{
        display: flex;
    }
</style>
@endsection
    
    {{-- Topbar Start --}}
    <div class="navbar-custom">
        <ul class="list-unstyled topnav-menu float-end mb-0">
            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ URL::asset('Assets/images/logo/republic.png') }}" alt="user-image" class="rounded-circle">
                    <span class="pro-user-name ms-1"> {{ auth()->user()->name }} <i class="mdi mdi-chevron-down"></i></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0 text-center">Welcome {{ auth()->user()->name }} !</h6>
                    </div>
    
                    <div class="dropdown-divider"></div>
    
                    <!-- item-->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn--transparent" type="submit">Log Out</button>
                    </form>
                </div>
            </li>
        </ul>
    
        <!-- LOGO -->
        <div class="logo-box">
            <a href="{{ url('/admin/dashboard') }}" class="logo logo-light text-center">
                <span class="logo-sm">
                    <img src="{{ URL::asset('Assets/images/logo/republic.png') }}" height="45">
                </span>
                <span class="logo-lg">
                    <img src="{{ URL::asset('Assets/images/logo/republic.png') }}" height="16">
                </span>
            </a>
            <a href="{{ url('/admin/dashboard') }}" class="logo logo-dark text-center">
                <span class="logo-sm">
                    <img src="{{ URL::asset('Assets/images/logo/republic.png') }}" height="45">
                </span>
                <span class="logo-lg text-dark fs-4">
                    <img src="{{ URL::asset('Assets/images/logo/republic.png') }}" height="55">
                </span>
            </a>
        </div>
    
        <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
            <li>
                <button class="button-menu-mobile disable-btn waves-effect">
                    <i class="fe-menu"></i>
                </button>
            </li>
    
            <!-- <li>
                <h4 class="page-title-main">Dashboard</h4>
            </li> -->
    
        </ul>
    
        <div class="clearfix"></div>
    
    </div>
    {{-- end Topbar --}}
    
    {{-- Start Side Bard --}}
    <div class="left-side-menu" style="background-color: rgba(0, 0, 0, 0.5)">
        <div class="h-100" data-simplebar>
            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <ul id="side-menu">
                    <li>
                        <a href="{{ url('/admindashboard') }}">
                            <i class="mdi mdi-view-dashboard-outline"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/cms') }}">
                            <i class="mdi mdi-newspaper-variant"></i>
                            <span> CMS </span>
                        </a>
                    </li>
                    <li class="master">
                        <a href="#master" data-bs-toggle="collapse">
                            <i class="mdi mdi-chart-pie"></i>
                            <span> Master </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="master">
                            <ul class="nav-second-level">
                                <li class="branch-master">
                                    <a href="{{ url('admin/master/branch') }}">Branch</a>
                                </li>
                                <li class="category-master">
                                    <a href="{{ url('admin/master/category') }}">Category</a>
                                </li>
                            </ul>
                        </div>
                    </li>
    
                    
                    <li class="system-user">
                        <a href="#system-user" data-bs-toggle="collapse">
                            <i class="mdi mdi-account-circle"></i>
                            <span> System Users </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="system-user">
                            <ul class="nav-second-level">
                                <li class="system-user-list">
                                    <a href="{{ url('admin/system-user') }}">
                                        <span> System Users </span>
                                    </a>
                                </li>
                                <li class="role-privileges">
                                    <a href="{{ url('/admin/roles-privileges') }}">
                                        <span> Role Privileges </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="setting">
                        <a href="#setting" data-bs-toggle="collapse">
                            <i class="mdi mdi-chart-pie"></i>
                            <span> Settings </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="setting">
                            <ul class="nav-second-level">
                                <li class="general-setting">
                                    <a href="{{ url('/admin/general-setting') }}">
                                        <span> General Settings</span>
                                    </a>
                                </li>
                                <li class="visual-setting">
                                    <a href="{{ url('/admin/visual-setting') }}">
                                        <span> Visual Settings</span>
                                    </a>
                                </li>
                                <li class="change-password">
                                    <a href="{{ url('/admin/change-password') }}">
                                        <span> Change Password</span>
                                    </a>
                                </li>
                                <li class="logout">
                                    <a href="{{ url('admin/logout') }}">
                                        <span> Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    {{-- End Side Bar --}}
    