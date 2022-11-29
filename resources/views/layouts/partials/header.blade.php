<div class="app-header header sticky">
    <div class="container-fluid main-container">
        <div class="d-flex align-items-center">
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0);"></a>
            <div class="responsive-logo">
                <a href="index.html" class="header-logo">
                    <img src="{{asset('assets/images/brand/logo-3.png')}}" class="mobile-logo logo-1" alt="logo">
                    <img src="{{asset('assets/images/brand/logo.png')}}" class="mobile-logo dark-logo-1" alt="logo">
                </a>
            </div>
            <!-- sidebar-toggle-->
            <a class="logo-horizontal " href="index.html">
                <img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{asset('assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1"
                    alt="logo">
            </a>
            <!-- LOGO -->

            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                <!-- SEARCH -->
                <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fe fe-more-vertical text-dark"></span>
                    </button>
                <div class="navbar navbar-collapse responsive-navbar p-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                        <div class="d-flex order-lg-2">
                            <div class="dropdown d-md-flex">
                                {{-- <a class="nav-link nav-link-bg">
                                   <span>Logout</span>
                                </a> --}}
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button type="submit" class="nav-link border py-2 px-4 m-1 active"><i class="mdi mdi-account-off mr-2"></i> Logout</button>
                                </form>
                            </div>
                            <div class="dropdown d-md-flex">
                                <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                    <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                    <span class="light-layout"><i class="fe fe-sun"></i></span>
                                </a>
                            </div>

                            <!-- Theme-Layout -->
                            {{-- <div class="dropdown d-md-flex">
                                <a class="nav-link icon full-screen-link nav-link-bg">
                                    <i class="fe fe-minimize fullscreen-button" id="myvideo"></i>
                                </a>
                            </div> --}}

                            <!-- SIDE-MENU -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- PAGE-HEADER -->
 <div class="page-header">
    <div>
        <h1 class="page-title">{{ ucfirst(request()->segment(2)) }}</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
            <li class="breadcrumb-item active">
                {{ ucfirst(request()->segment(2)) }} @if (request()->segment(3))   @endif
            </li>
            @if (request()->segment(3))
            <li class="breadcrumb-item active">
                {{ ucfirst(request()->segment(3)) }}
            </li>
            @endif
        </ol>
    </div>
</div>
