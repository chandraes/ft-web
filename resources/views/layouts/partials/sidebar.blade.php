<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{route('dashboard')}}">
                <img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{asset('assets/images/brand/logo-1.png')}}" class="header-brand-img toggle-logo" alt="logo">
                <img src="{{asset('assets/images/brand/logo-2.png')}}" class="header-brand-img light-logo" alt="logo">
                <img src="{{asset('assets/images/brand/logo-3.png')}}" class="header-brand-img light-logo1" alt="logo">
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
                <li class="sub-category">
                    <h3>{{__('Content')}}</h3>
                </li>
                <li>
                    <a class="side-menu__item {{request()->routeIs('carousel.index') || request()->routeIs('carousel.*')  ? 'active' : '' }}"
                        href="{{route('carousel.index')}}"><i class="side-menu__icon fa fa-camera-retro"></i><span
                            class="side-menu__label">Carousels</span></a>
                </li>
                <li class="slide {{
                    request()->routeIs('visi.*') || request()->routeIs('fakultas.*') || request()->routeIs('pimpinan.*')
                    || request()->routeIs('dosen.*') ? 'is-expanded' : '' }}">
                    <a class="side-menu__item
                    {{ request()->routeIs('fakultas.*') || request()->routeIs('visi.*') ? 'active' : '' }}" data-bs-toggle="slide"
                        href="javascript:void(0);"><i class="side-menu__icon fa fa-id-badge pl-4"></i><span
                            class="side-menu__label">Profile</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="{{route('visi.index')}}" class="slide-item {{
                            request()->routeIs('visi') || request()->routeIs('visi.*') ? 'active' : '' }}"> Visi & Misi</a></li>
                        <li><a href="{{route('fakultas.index')}}" class="slide-item {{
                            request()->routeIs('fakultas') || request()->routeIs('fakultas.*') ? 'active' : '' }}"> Fakultas</a></li>
                        <li><a href="{{route('pimpinan.index')}}" class="slide-item {{
                            request()->routeIs('pimpinan') || request()->routeIs('pimpinan.*') ? 'active' : '' }}"> Pimpinan</a></li>
                        <li><a href="{{route('dosen.index')}}" class="slide-item {{
                            request()->routeIs('dosen') || request()->routeIs('dosen.*') ? 'active' : '' }}"> Dosen</a></li>
                        <li><a href="chat.html" class="slide-item"> Pegawai</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i
                            class="side-menu__icon fe fe-package"></i><span class="side-menu__label">Elements</span><i
                            class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Elements</a></li>
                        <li><a href="alerts.html" class="slide-item"> Alerts</a></li>
                        <li><a href="buttons.html" class="slide-item"> Buttons</a></li>
                        <li><a href="colors.html" class="slide-item"> Colors</a></li>
                        <li><a href="avatarsquare.html" class="slide-item"> Avatar-Square</a></li>
                        <li><a href="avatar-round.html" class="slide-item"> Avatar-Rounded</a></li>
                        <li><a href="avatar-radius.html" class="slide-item"> Avatar-Radius</a></li>
                        <li><a href="dropdown.html" class="slide-item"> Drop downs</a></li>
                        <li><a href="list.html" class="slide-item"> List</a></li>
                        <li><a href="tags.html" class="slide-item"> Tags</a></li>
                        <li><a href="pagination.html" class="slide-item"> Pagination</a></li>
                        <li><a href="navigation.html" class="slide-item"> Navigation</a></li>
                        <li><a href="typography.html" class="slide-item"> Typography</a></li>
                        <li><a href="breadcrumbs.html" class="slide-item"> Breadcrumbs</a></li>
                        <li><a href="badge.html" class="slide-item"> Badges</a></li>
                        <li><a href="panels.html" class="slide-item"> Panels</a></li>
                        <li><a href="thumbnails.html" class="slide-item"> Thumbnails</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i
                            class="side-menu__icon fe fe-file"></i><span class="side-menu__label">Advanced
                            Elements</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Advanced Elements</a></li>
                        <li><a href="mediaobject.html" class="slide-item"> Media Object</a></li>
                        <li><a href="accordion.html" class="slide-item"> Accordions</a></li>
                        <li><a href="tabs.html" class="slide-item"> Tabs</a></li>
                        <li><a href="chart.html" class="slide-item"> Charts</a></li>
                        <li><a href="modal.html" class="slide-item"> Modal</a></li>
                        <li><a href="tooltipandpopover.html" class="slide-item"> Tooltip and popover</a></li>
                        <li><a href="progress.html" class="slide-item"> Progress</a></li>
                        <li><a href="carousel.html" class="slide-item"> Carousels</a></li>
                        <li><a href="headers.html" class="slide-item"> Headers</a></li>
                        <li><a href="footers.html" class="slide-item"> Footers</a></li>
                        <li><a href="users-list.html" class="slide-item"> User List</a></li>
                        <li><a href="search.html" class="slide-item">Search</a></li>
                        <li><a href="crypto-currencies.html" class="slide-item"> Crypto-currencies</a></li>
                    </ul>
                </li>
                <li class="sub-category">
                    <h3>Charts & Tables</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i
                            class="side-menu__icon fe fe-pie-chart"></i><span class="side-menu__label">Charts</span><i
                            class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Charts</a></li>
                        <li><a href="chart-chartist.html" class="slide-item">Chart Js</a></li>
                        <li><a href="chart-flot.html" class="slide-item"> Flot Charts</a></li>
                        <li><a href="chart-echart.html" class="slide-item"> ECharts</a></li>
                        <li><a href="chart-morris.html" class="slide-item"> Morris Charts</a></li>
                        <li><a href="chart-nvd3.html" class="slide-item"> Nvd3 Charts</a></li>
                        <li><a href="charts.html" class="slide-item"> C3 Bar Charts</a></li>
                        <li><a href="chart-line.html" class="slide-item"> C3 Line Charts</a></li>
                        <li><a href="chart-donut.html" class="slide-item"> C3 Donut Charts</a></li>
                        <li><a href="chart-pie.html" class="slide-item"> C3 Pie charts</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i
                            class="side-menu__icon fe fe-clipboard"></i><span
                            class="side-menu__label">Tables</span><span class="badge bg-secondary side-badge">2</span><i
                            class="angle fa fa-angle-right hor-rightangle"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Tables</a></li>
                        <li><a href="tables.html" class="slide-item">Default table</a></li>
                        <li><a href="datatable.html" class="slide-item"> Data Tables</a></li>
                    </ul>
                </li>
                <li class="sub-category">
                    <h3>Pages</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i
                            class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">Pages</span><i
                            class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Pages</a></li>
                        <li><a href="profile.html" class="slide-item"> Profile</a></li>
                        <li><a href="editprofile.html" class="slide-item"> Edit Profile</a></li>
                        <li><a href="email.html" class="slide-item"> Mail-Inbox</a></li>
                        <li><a href="emailservices.html" class="slide-item"> Mail-Compose</a></li>
                        <li><a href="gallery.html" class="slide-item"> Gallery</a></li>
                        <li><a href="about.html" class="slide-item"> About Company</a></li>
                        <li><a href="services.html" class="slide-item"> Services</a></li>
                        <li><a href="faq.html" class="slide-item"> FAQS</a></li>
                        <li><a href="terms.html" class="slide-item"> Terms</a></li>
                        <li><a href="invoice.html" class="slide-item"> Invoice</a></li>
                        <li><a href="pricing.html" class="slide-item"> Pricing Tables</a></li>
                        <li><a href="empty.html" class="slide-item"> Empty Page</a></li>
                        <li><a href="construction.html" class="slide-item"> Under Construction</a></li>
                        <li><a href="switcher.html" class="slide-item"> Theme Style</a></li>
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span
                                    class="sub-side-menu__label">Blog</span><i
                                    class="sub-angle fa fa-angle-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li><a href="blog.html" class="sub-slide-item">Blog</a></li>
                                <li><a href="blog-details.html" class="sub-slide-item">Blog Details</a></li>
                                <li><a href="blog-post.html" class="sub-slide-item">Blog Post</a></li>
                            </ul>
                        </li>
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span
                                    class="sub-side-menu__label">Maps</span><i
                                    class="sub-angle fa fa-angle-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li><a href="maps1.html" class="sub-slide-item">Leaflet Maps</a></li>
                                <li><a href="maps2.html" class="sub-slide-item">Mapel Maps</a></li>
                                <li><a href="maps.html" class="sub-slide-item">Vector Maps</a></li>
                            </ul>
                        </li>
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span
                                    class="sub-side-menu__label">E-Commerce</span><i
                                    class="sub-angle fa fa-angle-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li><a href="shop.html" class="sub-slide-item">Shop</a></li>
                                <li><a href="shop-description.html" class="sub-slide-item">Shopping Details</a></li>
                                <li><a href="cart.html" class="sub-slide-item">Shopping Cart</a></li>
                                <li><a href="wishlist.html" class="sub-slide-item">Wishlist</a></li>
                                <li><a href="checkout.html" class="sub-slide-item">Checkout</a></li>
                            </ul>
                        </li>
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span
                                    class="sub-side-menu__label">File Manager</span><i
                                    class="sub-angle fa fa-angle-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li><a href="file-manager.html" class="sub-slide-item">File Manager</a></li>
                                <li><a href="filemanager-list.html" class="sub-slide-item">File Manager List</a></li>
                                <li><a href="filemanager-details.html" class="sub-slide-item">File Details</a></li>
                                <li><a href="file-attachments.html" class="sub-slide-item">File Attachments</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sub-category">
                    <h3>Custom & Error Pages</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i
                            class="side-menu__icon fe fe-settings"></i><span class="side-menu__label">Custom
                            Pages</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Custom Pages</a></li>
                        <li><a href="login.html" class="slide-item"> Login</a></li>
                        <li><a href="register.html" class="slide-item"> Register</a></li>
                        <li><a href="forgot-password.html" class="slide-item"> Forgot Password</a></li>
                        <li><a href="lockscreen.html" class="slide-item"> Lock screen</a></li>
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span
                                    class="sub-side-menu__label">Error Pages</span><i
                                    class="sub-angle fa fa-angle-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li><a class="sub-slide-item" href="400.html">400</a></li>
                                <li><a class="sub-slide-item" href="401.html">401</a></li>
                                <li><a class="sub-slide-item" href="403.html">403</a></li>
                                <li><a class="sub-slide-item" href="404.html">404</a></li>
                                <li><a class="sub-slide-item" href="500.html">500</a></li>
                                <li><a class="sub-slide-item" href="503.html">503</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                        <i class="side-menu__icon fe fe-sliders"></i>
                        <span class="side-menu__label">Submenus</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Submenus</a></li>
                        <li><a href="javascript:void(0);" class="slide-item">Level-1</a></li>
                        <li class="sub-slide">
                            <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0);"><span
                                    class="sub-side-menu__label">Level-2</span><i
                                    class="sub-angle fa fa-angle-right"></i></a>
                            <ul class="sub-slide-menu">
                                <li><a class="sub-slide-item" href="javascript:void(0);">Level-2.1</a></li>
                                <li><a class="sub-slide-item" href="javascript:void(0);">Level-2.2</a></li>
                                <li class="sub-slide2">
                                    <a class="sub-side-menu__item2" href="javascript:void(0);"
                                        data-bs-toggle="sub-slide2"><span
                                            class="sub-side-menu__label2">Level-2.3</span><i
                                            class="sub-angle2 fa fa-angle-right"></i></a>
                                    <ul class="sub-slide-menu2">
                                        <li><a href="javascript:void(0);" class="sub-slide-item2">Level-2.3.1</a></li>
                                        <li><a href="javascript:void(0);" class="sub-slide-item2">Level-2.3.2</a></li>
                                        <li><a href="javascript:void(0);" class="sub-slide-item2">Level-2.3.3</a></li>
                                    </ul>
                                </li>
                                <li><a class="sub-slide-item" href="javascript:void(0);">Level-2.4</a></li>
                                <li><a class="sub-slide-item" href="javascript:void(0);">Level-2.5</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sub-category">
                    <h3>Forms & Icons</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i
                            class="side-menu__icon fe fe-file-text"></i><span class="side-menu__label">Forms</span><span
                            class="badge bg-success side-badge">5</span><i
                            class="angle fa fa-angle-right hor-rightangle"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Forms</a></li>
                        <li><a href="form-elements.html" class="slide-item"> Form Elements</a></li>
                        <li><a href="form-advanced.html" class="slide-item"> Form Advanced</a></li>
                        <li><a href="wysiwyag.html" class="slide-item"> Form Editor</a></li>
                        <li><a href="form-wizard.html" class="slide-item"> Form Wizard</a></li>
                        <li><a href="form-validation.html" class="slide-item"> Form Validation</a></li>
                    </ul>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i
                            class="side-menu__icon fe fe-command"></i><span class="side-menu__label">Icons</span><i
                            class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu-label1"><a href="javascript:void(0)">Icons</a></li>
                        <li><a href="icons.html" class="slide-item"> Font Awesome</a></li>
                        <li><a href="icons2.html" class="slide-item"> Material Design Icons</a></li>
                        <li><a href="icons3.html" class="slide-item"> Simple Line Icons</a></li>
                        <li><a href="icons4.html" class="slide-item"> Feather Icons</a></li>
                        <li><a href="icons5.html" class="slide-item"> Ionic Icons</a></li>
                        <li><a href="icons6.html" class="slide-item"> Flag Icons</a></li>
                        <li><a href="icons7.html" class="slide-item"> pe7 Icons</a></li>
                        <li><a href="icons8.html" class="slide-item"> Themify Icons</a></li>
                        <li><a href="icons9.html" class="slide-item">Typicons Icons</a></li>
                        <li><a href="icons10.html" class="slide-item">Weather Icons</a></li>
                        <li><a href="icons11.html" class="slide-item">Bootstrap Icons</a></li>
                    </ul>
                </li>
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                    height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </aside>
</div>
