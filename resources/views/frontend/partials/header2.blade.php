<header class="main-header header-style-one">
    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">

                <!-- Logo Box -->
                <div class="pull-left logo-box">
                    <div class="logo"></div>
                </div>

                <div class="pull-right upper-right clearfix">
                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-phone"></span></div>
                        <ul>
                            <li></li>
                            <li><strong><a href="tel:<?php echo esc_attr(montro_phone_number($options->get('phone_number_v1'))); ?>"><?php echo wp_kses($options->get('phone_number_v1'), $allowed_html); ?></a></strong></li>
                        </ul>
                    </div>
                    <?php } ?>

                    <?php if( $options->get('show_working_hours_v1') ){ ?>
                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-clock-1"></span></div>
                        <ul>
                            <li><?php echo wp_kses($options->get('working_hours_title_v1'), $allowed_html); ?></li>
                            <li><strong><?php echo wp_kses($options->get('working_hours_v1'), $allowed_html); ?></strong></li>
                        </ul>
                    </div>
                    <?php } ?>

                    <?php if( $options->get('show_address_v1') ){ ?>
                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-location-1"></span></div>
                        <ul>
                            <li><?php echo wp_kses($options->get('address_v1'), $allowed_html); ?></li>
                            <li><strong><?php echo wp_kses($options->get('address_city_v1'), $allowed_html); ?></strong></li>
                        </ul>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--Header Lower-->
    <div class="header-lower">
        <div class="auto-container">
            <div class="clearfix">
                <div class="nav-outer clearfix <?php if( $options->get('sidebar_info_v1') ) echo 'pad-left'; ?>">
                    <?php if( $options->get('sidebar_info_v1') ){ ?>
                    <!-- Nav Btn -->
                    <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu"></span></div>
                    <?php } ?>

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
                                <?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'container_id' => 'navbar-collapse-1',
                                    'container_class'=>'navbar-collapse collapse navbar-right',
                                    'menu_class'=>'nav navbar-nav',
                                    'fallback_cb'=>false,
                                    'items_wrap' => '%3$s',
                                    'container'=>false,
                                    'depth'=>'3',
                                    'walker'=> new Bootstrap_walker()
                                ) ); ?>
                             </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Options Box -->
                    <div class="options-box clearfix">
                        <?php if( $options->get('show_search_v1') ){ ?>
                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="search-box-btn"><span class="fa fa-search"></span></div>
                        </div>
                        <?php } ?>

                        <?php if( $options->get('show_button_v1') ){ ?>
                        <div class="btn-box">
                            <a href="<?php echo esc_url($options->get('button_link_v1')); ?>" class="theme-btn btn-style-one"><span class="txt"><?php echo wp_kses($options->get('button_name_v1'), $allowed_html); ?></span></a>
                        </div>
                        <?php } ?>
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
                <?php echo montro_logo( $logo_type, $sticky_logo, $sticky_logo_dimension, $logo_text, $logo_typography ); ?>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->

                <!-- Options Box -->
                <div class="options-box clearfix">
                    <?php if( $options->get('show_search_v1') ){ ?>
                    <!--Search Box-->
                    <div class="search-box-outer">
                        <div class="search-box-btn"><span class="fa fa-search"></span></div>
                    </div>
                    <?php } ?>

                    <?php if( $options->get('show_button_v1') ){ ?>
                    <div class="btn-box">
                        <a href="<?php echo esc_url($options->get('button_link_v1')); ?>" class="theme-btn btn-style-one"><span class="txt"><?php echo wp_kses($options->get('button_name_v1'), $allowed_html); ?></span></a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><?php echo montro_logo( $logo_type, $mobile_logo, $mobile_logo_dimension, $logo_text, $logo_typography ); ?></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
<!-- End Main Header -->

<?php if( $options->get('sidebar_info_v1') ){ ?>
<!-- Sidebar Cart Item -->
<div class="xs-sidebar-group info-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">
                    X
                </a>
            </div>

            <div class="sidebar-textwidget">
                <!-- Sidebar Info Content -->
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <div class="logo">
                            <?php echo montro_logo( $logo_type, $sidebar_logo, $sidebar_logo_dimension, $logo_text, $logo_typography ); ?>
                        </div>
                        <div class="content-box">
                            <h2><?php echo wp_kses($options->get('sidebar_about_title_v1'), $allowed_html); ?></h2>
                            <p class="text"><?php echo wp_kses($options->get('sidebar_about_text_v1'), $allowed_html); ?></p>

                            <?php if( $options->get('show_sidebar_button_v1') ){ ?>
                            <a href="<?php echo esc_url($options->get('sidebar_button_link_v1')); ?>" class="theme-btn btn-style-two"><span class="txt"><?php echo wp_kses($options->get('sidebar_button_name_v1'), $allowed_html); ?></span></a>
                            <?php } ?>
                        </div>
                        <div class="contact-info">
                            <h2><?php echo wp_kses($options->get('sidebar_contact_title_v1'), $allowed_html); ?></h2>
                            <ul class="list-style-one">
                                <?php if( $options->get('sidebar_address_v1') ){ ?>
                                <li><span class="icon fa fa-location-arrow"></span><?php echo wp_kses($options->get('sidebar_address_v1'), $allowed_html); ?></li>
                                <?php } ?>

                                <?php if( $options->get('sidebar_phone_number_v1') ){ ?>
                                <li><span class="icon fa fa-phone"></span><?php echo wp_kses($options->get('sidebar_phone_number_v1'), $allowed_html); ?></li>
                                <?php } ?>

                                <?php if( $options->get('sidebar_email_address_v1') ){ ?>
                                <li><span class="icon fa fa-envelope"></span><?php echo sanitize_email($options->get('sidebar_email_address_v1')); ?></li>
                                <?php } ?>

                                <?php if( $options->get('sidebar_working_hours_v1') ){ ?>
                                <li><span class="icon fa fa-clock-o"></span><?php echo wp_kses($options->get('sidebar_working_hours_v1'), $allowed_html); ?></li>
                                <?php } ?>
                            </ul>
                        </div>

                        <?php if($options->get( 'show_sidebar_social_media_v1' )) {
                        $icons = $options->get( 'icons_social_share' );
                        if ( ! empty( $icons ) ) { ?>
                        <!-- Social Box -->
                        <ul class="social-box">
                            <?php foreach ( $icons as $h_icon ) {
                            $social_icons = json_decode( urldecode( montro_set( $h_icon, 'data' ) ) );
                            if ( montro_set( $social_icons, 'enable' ) == '' ) {
                                continue;
                            }
                            $icon_class = explode( '-', montro_set( $social_icons, 'icon' ) ); ?>
                            <li><a href="<?php echo esc_url(montro_set( $social_icons, 'url' )); ?>" style="background-color:<?php echo esc_attr(montro_set( $social_icons, 'background' )); ?>; color: <?php echo esc_attr(montro_set( $social_icons, 'color' )); ?>" class="fa <?php echo esc_attr( montro_set( $social_icons, 'icon' ) ); ?>" aria-hidden="true" target="_blank"></a></li>
                            <?php } ?>
                        </ul>
                        <?php } } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
