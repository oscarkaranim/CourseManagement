<!-- ===============================
			Navigation Start
		====================================-->
<nav class="navbar navbar-expand-lg bb-1 navbar-light bg-white fixed-top" id="mainNav">

    <!-- Start Header -->
    <header class="header-logo bg-white bb-1 br-1">
        <a class="nav-link text-center mr-lg-3 hidden-xs" id="sidenavToggler"><i class="ti-align-left"></i></a>
        <a class="gredient-cl navbar-brand" href="{{route('home')}}">Degree Program Management</a>
    </header>
    <!-- End Header -->

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="ti-align-left"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">

        <!-- =============== Start Side Menu ============== -->
        <div class="navbar-side">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">


                <!-- Start projects -->
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Projects">
                    <a class="nav-link" href="{{route('degreeprogramindex')}}">
                        <i class="ti i-cl-2 ti-list"></i>
                        <span class="nav-link-text">Available Courses</span>
                    </a>
                </li>
                <!-- End Projects -->
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Report">
                    <a class="nav-link" href="{{route('addnewprogram')}}">
                        <i class="ti i-cl-11 ti-plus"></i>
                        <span class="nav-link-text">Add Course</span>
                    </a>
                </li>



            </ul>
        </div>
        <!-- =============== End Side Menu ============== -->



        <!-- =============== Header Rightside Menu ============== -->
        <ul class="navbar-nav ml-auto">



            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-0 user-img a-topbar__nav a-nav" id="userDropdown" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{asset('assets/dist/img/user-20.png')}}" alt="user-img" width="36" class="img-circle">
                    <b class="f-size-17">{{ Auth::user()->name }}</b>
                </a>



            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off" ></i> Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>

        </ul>
        <!-- =============== End Header Rightside Menu ============== -->
    </div>
</nav>
<!-- =====================================================
                    End Navigations
======================================================= -->
<div class="content-wrapper">

