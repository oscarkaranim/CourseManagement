<!-- ===============================
			Navigation Start
		====================================-->
<nav class="navbar navbar-expand-lg bb-1 navbar-light bg-white fixed-top" id="mainNav">

    <!-- Start Header -->
    <header class="header-logo bg-white bb-1 br-1">
        <a class="nav-link text-center mr-lg-3 hidden-xs" id="sidenavToggler"><i class="ti-align-left"></i></a>
        <a class="gredient-cl navbar-brand" href="{{route('home')}}">Course Management</a>
    </header>
    <!-- End Header -->

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="ti-align-left"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">

        <!-- =============== Start Side Menu ============== -->
        <div class="navbar-side">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

                <!-- Start Dashboard-->
                <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#Dashboard" data-parent="#exampleAccordion">
                        <i class="ti i-cl-1 ti-dashboard"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="Dashboard">
                        <li>
                            <a href="{{route('home')}}">Staff Dashboard</a>
                        </li>


                    </ul>
                </li>
                <!-- End Dashboard -->

                <!-- Start Advance Apps -->
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Advance Apps">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#advance-apps" data-parent="#exampleAccordion">
                        <i class="ti i-cl-9 ti ti-desktop"></i>
                        <span class="nav-link-text">Add New Course</span>
                    </a>

                </li>
                <!-- End Advance Apps -->

                <!-- Start projects -->
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Projects">
                    <a class="nav-link" href="#">
                        <i class="ti i-cl-2 ti-layers"></i>
                        <span class="nav-link-text">Course List</span>
                    </a>
                </li>



            </ul>
        </div>
        <!-- =============== End Side Menu ============== -->


   <div></div>
        <ul class="navbar-nav ml-auto">

        </ul>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-0 user-img a-topbar__nav a-nav" id="userDropdown" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('assets/dist/img/user-20.png')}}" alt="user-img" width="36" class="img-circle">
                    <b class="f-size-17">{{ Auth::user()->name }}</b>
                </a>

                <ul class="dropdown-menu dropdown-user animated flipInX" aria-labelledby="userDropdown">
                    <li class="dropdown-header green-bg">
                        <div class="header-user-pic">
                            <img src="{{asset('assets/dist/img/user-20.png')}}" alt="user-img" width="36" class="img-circle">
                        </div>
                        <div class="header-user-det">
                            <span class="a-dropdown__header-title">{{ Auth::user()->name }}</span>
                            <span class="a-dropdown__header-subtitle">Administrator</span>
                        </div>
                    </li>
                    <li><a class="dropdown-item" href="#"><i class="ti-user"></i> My Profile</a></li>

                    <li><a class="dropdown-item" href="#"><i class="ti-settings"></i> Account Setting</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off" ></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>

    </div></nav>
</nav>
<!-- =====================================================
                    End Navigations
======================================================= -->
<div class="content-wrapper">

