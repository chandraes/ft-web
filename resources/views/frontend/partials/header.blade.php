@php
$categoryInformations = App\Models\Informasi\CategoryInformation::all();
$linkTerkait = App\Models\LinkTerkait::all();
$about = App\Models\About::first();
@endphp

<header class="main-header header-style-one">

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">

                <!-- Logo Box -->
                <div class="pull-left logo-box">
                    <div class="logo"><a href="{{route('home')}}"><img src="{{asset('images/ft-logo.png')}}"
                                alt="ft-logo" title="FT-Logo" width="200"></a></div>
                </div>

                <div class="pull-right upper-right clearfix">

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-phone"></span></div>
                        <ul>
                            <li>Phone:</li>
                            <li><strong><a href="tel:{{!empty($about->phone) ? $about->phone : "-"}}">{{!empty($about->phone) ? $about->phone : "-"}}</a></strong></li>
                        </ul>
                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-email"></span></div>
                        <ul>
                            <li>Fax:</li>
                            <li><strong>{{!empty($about->fax) ? $about->fax : "-"}}</strong></li>
                        </ul>
                    </div>
                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-email"></span></div>
                        <ul>
                            <li>E-Mail:</li>
                            <li><strong><a href="mailto:{{!empty($about->email) ? $about->email : "-"}}">{{!empty($about->email) ? $about->email : "-"}}</a></strong></li>
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
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
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
                                        <li><a href="{{route('fakultas')}}">Fakultas</a></li>
                                        <li><a href="{{route('leader')}}">Pimpinan</a></li>
                                        <li><a href="{{route('dosen')}}">Dosen</a></li>
                                        <li><a href="{{route('employee')}}">Tendik</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Akademik</a>
                                    <ul>
                                        <li class="dropdown"><a href="Program-Sarjana.html">Program Sarjana</a>
                                            <ul>
                                                <li><a href="https://mesin.ft.unsri.ac.id/s1/">Teknik Mesin</a></li>
                                                <li><a href="http://sipil.ft.unsri.ac.id/s1/">Teknik Sipil</a></li>
                                                <li><a href="https://pertambangan.ft.unsri.ac.id/">Teknik
                                                        Pertambangan</a></li>
                                                <li><a href="http://elektro.ft.unsri.ac.id/">Teknik Elektro</a></li>
                                                <li><a href="http://kimia.ft.unsri.ac.id/s1/">Teknik Kimia</a></li>
                                                <li><a href="http://arsitektur.ft.unsri.ac.id/">Teknik Arsitektur</a>
                                                </li>
                                                <li><a href="http://geologi.ft.unsri.ac.id/">Teknik Geologi</a></li>
                                            </ul>
                                        <li class="dropdown"><a href="Program-Pascasarjana.html">Program
                                                Pascasarjana</a>
                                            <ul>
                                                <li><a href="https://mesin.ft.unsri.ac.id/s2/">Teknik Mesin</a></li>
                                                <li><a href="http://sipil.ft.unsri.ac.id/s2">Teknik Sipil</a></li>
                                                <li><a href="https://pertambangan.ft.unsri.ac.id/">Teknik
                                                        Pertambangan</a></li>
                                                <li><a href="http://kimia.ft.unsri.ac.id/s2">Teknik Kimia</a></li>
                                            </ul>
                                        <li class="dropdown"><a href="Program-doktor.html">Program Doktor</a>
                                            <ul>
                                                <li><a href="https://pps.unsri.ac.id/ilmu-teknik/">Ilmu Teknik</a></li>
                                            </ul>
                                        <li><a href="{{route('laboratory')}}">Laboratorium</a></li>
                                        <li><a href="http://www.tracerstudy.ft.unsri.ac.id/">Tracer Study</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown @if (request()->routeIs('information') || request()->routeIs('detail-information'))
                                    current
                                @endif"><a href="#">Informasi</a>
                                    <ul>
                                        @foreach ($categoryInformations as $c)
                                        <li><a
                                                href="{{route('information', ['id'=> $c->id, 'slug'=> $c->slug])}}">{{$c->name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="@if (request()->routeIs('journal'))
                                    current
                                @endif"><a href="{{route('journal')}}">Jurnal</a>

                                </li>
                                @if ($linkTerkait->count() > 0)
                                <li class="dropdown"><a href="#">Link Terkait</a>
                                    <ul>
                                        @foreach ($linkTerkait as $l)
                                        <li><a href="{{$l->link}}" target="_blank">{{$l->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endif
                                <li class="@if (request()->routeIs('gallery'))
                                    current
                                @endif"><a href="{{route('gallery')}}">Gallery</a>
                                </li>
                                <li class="@if (request()->routeIs('contact'))
                                    current
                                @endif"><a href="{{route('contact')}}">Contact Us</a>
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
                <a href="{{route('home')}}" title=""><img src="{{asset('images/ft-logo.png')}}" width="135" alt=""
                        title=""></a>
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
            <div class="nav-logo"><a href="index.html"><img src="{{asset('images/ft-logo.png')}}" alt="" title=""></a>
            </div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
<!-- End Main Header -->
