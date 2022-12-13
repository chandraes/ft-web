<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{route('dashboard')}}">
                <img src="{{asset('images/ft-logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{asset('images/unsri-logo.png')}}" class="header-brand-img toggle-logo" alt="logo">
                <img src="{{asset('images/unsri-logo.png')}}" class="header-brand-img light-logo" alt="logo">
                <img src="{{asset('images/ft-logo.png')}}" class="header-brand-img light-logo1" alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Main</h3>
                </li>
                <li class="slide ">
                    <a class="side-menu__item {{request()->routeIs('dashboard') ? 'active' : '' }}"
                        data-bs-toggle="slide" href="{{route('dashboard')}}"><i
                            class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                </li>
                <li class="sub-category">
                    <h3>{{__('Configuration')}}</h3>
                </li>
                <li>
                    <a class="side-menu__item {{request()->routeIs('users.index') || request()->routeIs('users.*')  ? 'active' : '' }}"
                        href="{{route('users.index')}}"><i class="side-menu__icon fa fa-users"></i><span
                            class="side-menu__label">Users</span></a>
                </li>
                <li>
                    <a class="side-menu__item {{request()->routeIs('tentang') || request()->routeIs('tentang.*')  ? 'active' : '' }}"
                        href="{{route('tentang')}}"><i class="side-menu__icon fa fa-address-card-o"></i><span
                            class="side-menu__label">About</span></a>
                </li>
                <li class="sub-category">
                    <h3>{{__('Content')}}</h3>
                </li>
                <li>
                    <a class="side-menu__item {{request()->routeIs('carousel.index') || request()->routeIs('carousel.*')  ? 'active' : '' }}"
                        href="{{route('carousel.index')}}"><i class="side-menu__icon fa fa-camera-retro"></i><span
                            class="side-menu__label">Carousels</span></a>
                </li>
                <li>
                    <a class="side-menu__item {{request()->routeIs('informasi.index') || request()->routeIs('informasi.*')  ? 'active' : '' }}"
                        href="{{route('informasi.index')}}"><i class="side-menu__icon fa fa-newspaper-o"></i><span
                            class="side-menu__label">Information</span></a>
                </li>
                <li class="slide {{
                    request()->routeIs('visi.*') || request()->routeIs('fakultas.*') || request()->routeIs('pimpinan.*')
                    || request()->routeIs('dosen.*') || request()->routeIs('pegawai.*') ? 'is-expanded' : '' }}">
                    <a class="side-menu__item
                    {{ request()->routeIs('fakultas.*') || request()->routeIs('visi.*') || request()->routeIs('dosen.*')
                        || request()->routeIs('pimpinan.*') || request()->routeIs('pegawai.*') ? 'active' : '' }}"
                        data-bs-toggle="slide" href="javascript:void(0);"><i
                            class="side-menu__icon fa fa-id-badge pl-4"></i><span
                            class="side-menu__label">Profile</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="{{route('visi.index')}}" class="slide-item {{
                            request()->routeIs('visi') || request()->routeIs('visi.*') ? 'active' : '' }}"> Visi &
                                Misi</a></li>
                        <li><a href="{{route('fakultas.index')}}" class="slide-item {{
                            request()->routeIs('fakultas') || request()->routeIs('fakultas.*') ? 'active' : '' }}">
                                Fakultas</a></li>
                        <li><a href="{{route('pimpinan.index')}}" class="slide-item {{
                            request()->routeIs('pimpinan') || request()->routeIs('pimpinan.*') ? 'active' : '' }}">
                                Pimpinan</a></li>
                        <li><a href="{{route('dosen.index')}}" class="slide-item {{
                            request()->routeIs('dosen') || request()->routeIs('dosen.*') ? 'active' : '' }}"> Dosen</a>
                        </li>
                        <li><a href="{{route('pegawai.index')}}" class="slide-item {{
                            request()->routeIs('pegawai') || request()->routeIs('pegawai.*') ? 'active' : '' }}">
                                Pegawai</a></li>
                    </ul>
                </li>
                <li>
                    <a class="side-menu__item {{request()->routeIs('lab.index') || request()->routeIs('lab.*')  ? 'active' : '' }}"
                        href="{{route('lab.index')}}"><i class="side-menu__icon fa fa-cogs"></i><span
                            class="side-menu__label">Laboratorium</span></a>
                </li>
                <li>
                    <a class="side-menu__item {{request()->routeIs('galeri.index') || request()->routeIs('galeri.*')  ? 'active' : '' }}"
                        href="{{route('galeri.index')}}"><i class="side-menu__icon fa fa-photo"></i><span
                            class="side-menu__label">Gallery</span></a>
                </li>
                <li>
                    <a class="side-menu__item {{request()->routeIs('jurnal.index') || request()->routeIs('jurnal.*')  ? 'active' : '' }}"
                        href="{{route('jurnal.index')}}"><i class="side-menu__icon fa fa-book"></i><span
                            class="side-menu__label">Jurnal</span></a>
                </li>
                <li>
                    <a class="side-menu__item {{request()->routeIs('link-terkait.index') || request()->routeIs('link-terkait.*')  ? 'active' : '' }}"
                        href="{{route('link-terkait.index')}}"><i class="side-menu__icon fa fa-link"></i><span
                            class="side-menu__label">Link Terkait</span></a>
                </li>
                <li>
                    <a class="side-menu__item {{request()->routeIs('partner.index') || request()->routeIs('partner.*')  ? 'active' : '' }}"
                        href="{{route('partner.index')}}"><i class="side-menu__icon fa fa-handshake-o"></i><span
                            class="side-menu__label">Partner</span></a>
                </li>


            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                    height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </aside>
</div>
