@php
    $categoryInformations = App\Models\Informasi\CategoryInformation::all();
@endphp

<header class="main-header header-style-one">

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">

                <!-- Logo Box -->
                <div class="pull-left logo-box">
                    <div class="logo"><a href="{{route('home')}}"><img src="{{asset('images/ft-logo.png')}}" alt="ft-logo" title="FT-Logo" width="200"></a></div>
                </div>

                <div class="pull-right upper-right clearfix">

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-phone"></span></div>
                        <ul>
                            <li>Requesting a Call:</li>
                            <li><strong><a href="tel:+301-357-1234">(301) 357 1234</a></strong></li>
                        </ul>
                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-clock-1"></span></div>
                        <ul>
                            <li>Sunday - Friday:</li>
                            <li><strong>9am - 8pm</strong></li>
                        </ul>
                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-location-1"></span></div>
                        <ul>
                            <li>1428 Callison Laney Building</li>
                            <li><strong>California</strong></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--Header Lower-->
    <div class="header-lower">

        <div class="auto-container">
            <div class="clearfix">

                <div class="nav-outer clearfix">
                    <!-- Nav Btn -->
                    <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu"></span></div>

                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu show navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="@if (request()->routeIs('home'))
                                    current
                                @endif"><a href="{{route('home')}}">Home</a>

                                </li>
                                <li class="dropdown
                                @if (request()->routeIs('vision') || request()->routeIs('leader'))
                                    current
                                @endif"><a href="#">Profile</a>
                                    <ul>
                                        <li><a href="{{route('vision')}}">Visi dan Misi</a></li>
                                        <li><a href="Fakultas.html">Fakultas</a></li>
                                        <li><a href="{{route('leader')}}">Pimpinan</a></li>
                                        <li><a href="{{route('dosen')}}">Dosen</a></li>
                                        <li><a href="{{route('employee')}}">Tendik</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Akademik</a>
                                    <ul>
                                        <li class="dropdown"><a href="Program-Sarjana.html">Program Sarjana</a>
                                        <ul>
                                            <li><a href="teknik_mesin.html">Teknik Mesin</a></li>
                                            <li><a href="teknik_sipil.html">Teknik Sipil</a></li>
                                            <li><a href="teknik_tambang.html">Teknik Pertambangan</a></li>
                                            <li><a href="teknik_elektro.html">Teknik Elektro</a></li>
                                            <li><a href="teknik_kimia.html">Teknik Kimia</a></li>
                                            <li><a href="teknik_arsitektur.html">Teknik Arsitektur</a></li>
                                            <li><a href="teknik_geologi.html">Teknik Geologi</a></li>
                                        </ul>
                                        <li class="dropdown"><a href="Program-Pascasarjana.html">Program Pascasarjana</a>
                                        <ul>
                                            <li><a href="teknik_psmesin.html">Teknik Mesin</a></li>
                                            <li><a href="teknik_pssipil.html">Teknik Sipil</a></li>
                                            <li><a href="teknik_pstambang.html">Teknik Pertambangan</a></li>
                                            <li><a href="teknik_pskimia.html">Teknik Kimia</a></li>
                                        </ul>
                                        <li class="dropdown"><a href="Program-doktor.html">Program Doktor</a>
                                        <ul>
                                            <li><a href="ilmu_teknik.html">Ilmu Teknik</a></li>
                                        </ul>
                                        <li><a href="Laboratorium">Laboratorium</a></li>
                                        <li><a href="Informasi-beasiswa.html">Informasi Beasiswa</a></li>
                                        <li><a href="Tracert-study.html">Tracer Study</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown @if (request()->routeIs('information') || request()->routeIs('detail-information'))
                                    current
                                @endif"><a href="#">Informasi</a>
                                    <ul>
                                        @foreach ($categoryInformations as $c)
                                        <li><a href="{{route('information', ['id'=> $c->id, 'name'=> $c->name])}}">{{$c->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Shop</a>
                                    <ul>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-single.html">Shop Details</a></li>
                                        <li><a href="shoping-cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="{{route('login')}}">Login</a></li>
                                        {{-- <li><a href="{{route('register')}}">Register</a></li> --}}
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Contact</a>
                                    <ul>
                                        <li><a href="contact.html">Contact us 01</a></li>
                                        <li><a href="contact-2.html">Contact us 02</a></li>
                                        <li><a href="contact-3.html">Contact us 03</a></li>
                                    </ul>
                                </li>
                             </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Options Box -->
                    <div class="options-box clearfix">

                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="search-box-btn"><span class="fa fa-search"></span></div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Header Lower -->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{{route('home')}}" title=""><img src="{{asset('images/ft-logo.png')}}" width="135" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->

                <!-- Options Box -->
                <div class="options-box clearfix">

                    <!--Search Box-->
                    <div class="search-box-outer">
                        <div class="search-box-btn"><span class="fa fa-search"></span></div>
                    </div>

                </div>

            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="{{asset('assets_front/images/logo.png')}}" alt="" title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
<!-- End Main Header -->
