<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.2.0.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-16x16.png">
<!--    <link rel="manifest" href="--><?php //echo get_stylesheet_directory_uri(); ?><!--/img/favicon/site.webmanifest">-->
    <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#f00">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="bootstrap" viewBox="0 0 512 408" fill="currentcolor">
        <path d="M106.342 0c-29.214 0-50.827 25.58-49.86 53.32.927 26.647-.278 61.165-8.966 89.31C38.802 170.862 24.07 188.707 0 191v26c24.069 2.293 38.802 20.138 47.516 48.37 8.688 28.145 9.893 62.663 8.965 89.311C55.515 382.42 77.128 408 106.342 408h299.353c29.214 0 50.827-25.58 49.861-53.319-.928-26.648.277-61.166 8.964-89.311 8.715-28.232 23.411-46.077 47.48-48.37v-26c-24.069-2.293-38.765-20.138-47.48-48.37-8.687-28.145-9.892-62.663-8.964-89.31C456.522 25.58 434.909 0 405.695 0H106.342zm236.559 251.102c0 38.197-28.501 61.355-75.798 61.355h-87.202a2 2 0 01-2-2v-213a2 2 0 012-2h86.74c39.439 0 65.322 21.354 65.322 54.138 0 23.008-17.409 43.61-39.594 47.219v1.203c30.196 3.309 50.532 24.212 50.532 53.085zm-84.58-128.125h-45.91v64.814h38.669c29.888 0 46.373-12.03 46.373-33.535 0-20.151-14.174-31.279-39.132-31.279zm-45.91 90.53v71.431h47.605c31.12 0 47.605-12.482 47.605-35.941 0-23.46-16.947-35.49-49.608-35.49h-45.602z"/>
    </symbol>
    <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
    </symbol>
</svg>


<div id="page" class="site">

    <header id="masthead" class="site-header">

        <div class="fixed-top bg-white">

            <!--    Top Nav -->
            <nav id="nav-main" class="navbar navbar-expand-xl bg-transparent pt-4 z-2">

                <div class="container">


                    <div class="header-actions d-flex w-100 ps-xl-5 ms-xl-5">
                        <div class="ms-xl-4 ps-md-4  ps-xl-5 me-auto d-none d-md-flex">
                            <div class="social-links">
                                <?php while( have_rows('social_links', 'options') ): the_row(); ?>
                                    <a class="social-link btn btn-link btn-sm text-white rounded-circle me-2" target="_blank" href="<?php the_sub_field('url'); ?>">
                                        <i class="<?php the_sub_field('icon_class'); ?> fa-lg">
                                            <span class="sr-only"><?php the_sub_field('label'); ?></span>
                                        </i>
                                    </a>
                                <?php endwhile; ?>
                            </div>

                                <div class="dropdown ps-4 mt-n3" id="HideDiv">
                                    <button class="btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="true" data-bs-toggle="dropdown" data-bs-display="static" aria-label="Toggle theme (light)">
                                        <svg class="bi-2 my-1 theme-icon-active"><use href="#sun-fill"></use></svg>
                                        <span class="d-none ms-2" id="bd-theme-text">Dark Mode</span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end  shadow-lg border-0 px-1  mt-n5 mt-xl-n2" aria-labelledby="bd-theme-text" data-bs-popper="static">
                                        <li>
                                            <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light" aria-pressed="true">
                                                <svg class="bi me-2 theme-icon"><use href="#sun-fill"></use></svg>
                                                Light Mode
                                                <svg class="bi ms-2 d-none"><use href="#check2"></use></svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                                                <svg class="bi me-2 theme-icon"><use href="#moon-stars-fill"></use></svg>
                                                Dark Mode
                                                <svg class="bi ms-2 d-none"><use href="#check2"></use></svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
                                                <svg class="bi me-2 theme-icon"><use href="#circle-half"></use></svg>
                                                Auto Mode
                                                <svg class="bi ms-2 d-none"><use href="#check2"></use></svg>
                                            </button>
                                        </li>
                                    </ul>
                                 </div>
                            </div>
                        <!-- Top Nav Widget -->
                        <div class="top-nav-widget ms-n5 ms-md-0 me-auto me-md-4 me-lg-0">
                            <div class="d-flex">
                                <?php if (is_active_sidebar('top-nav')) : ?>
                                    <div>
                                        <?php dynamic_sidebar('top-nav'); ?>
                                    </div>
                                <?php endif; ?>

                                <div class="dropdown xs d-md-none ps-4 mt-n2">
                                    <button class="btn btn-link nav-link py-2 px-0 px-lg-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="true" data-bs-toggle="dropdown" data-bs-display="static" aria-label="Toggle theme (light)">
                                        <svg class="bi-2 my-1 theme-icon-active"><use href="#sun-fill"></use></svg>
                                        <span class="d-none ms-2" id="bd-theme-text">Dark Mode</span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end  shadow-lg border-0 px-1 mt-n2" aria-labelledby="bd-theme-text" data-bs-popper="static">
                                        <li>
                                            <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light" aria-pressed="true">
                                                <svg class="bi me-2 theme-icon"><use href="#sun-fill"></use></svg>
                                                Light Mode
                                                <svg class="bi ms-2 d-none"><use href="#check2"></use></svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                                                <svg class="bi me-2 theme-icon"><use href="#moon-stars-fill"></use></svg>
                                                Dark Mode
                                                <svg class="bi ms-2 d-none"><use href="#check2"></use></svg>
                                            </button>
                                        </li>
                                        <li>
                                            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
                                                <svg class="bi me-2 theme-icon"><use href="#circle-half"></use></svg>
                                                Auto Mode
                                                <svg class="bi ms-2 d-none"><use href="#check2"></use></svg>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="xs d-md-none ps-5 ps-lg-0 ms-2 ms-lg-0">
                                <div class="social-links">
                                    <?php while( have_rows('social_links', 'options') ): the_row(); ?>
                                        <a class="social-link btn btn-link btn-sm text-white rounded-circle me-2" target="_blank" href="<?php the_sub_field('url'); ?>">
                                            <i class="<?php the_sub_field('icon_class'); ?> fa-lg">
                                                <span class="sr-only"><?php the_sub_field('label'); ?></span>
                                            </i>
                                        </a>
                                    <?php endwhile; ?>
                                </div>
                            </div>

                        </div>

                        <!-- Searchform Large -->
                        <div class="d-none d-xl-block ms-1 ms-md-2 top-nav-search-lg">
                            <?php if (is_active_sidebar('top-nav-search')) : ?>
                                <div>
                                    <?php dynamic_sidebar('top-nav-search'); ?>
                                </div>
                            <?php endif; ?>
                        </div>



                        <!-- Navbar Toggler -->
                        <button class="btn btn-lg text-secondary d-xl-none p-0 me-4 me-md-0 mb-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-navbar" aria-controls="offcanvas-navbar">
                            <i class="fa-solid fa-bars fa-2xl"></i><span class="visually-hidden-focusable">Menu</span>
                        </button>

                        <!-- Offcanvas Navbar -->
                        <div class="offcanvas offcanvas-end xs d-xl-none bg-secondary ps-5" tabindex="-1" id="offcanvas-navbar">
                            <div class="offcanvas-header text-white ms-n5">
                                <span class="h5 mb-0"><?php esc_html_e('Menu', 'bootscore'); ?></span>
                                <button type="button" class="btn btn-link text-reset text-yellow text-decoration-none" data-bs-dismiss="offcanvas" aria-label="Close"><?php esc_html_e('Close  | X |', 'bootscore'); ?></button>
                            </div>
                            <div class="offcanvas-body d-block border-start border-2 border-white">
                                <!-- Bootstrap 5 Nav Walker Main Menu -->
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'main-menu',
                                    'container' => false,
                                    'menu_class' => 'nav-item',
                                    'fallback_cb' => '__return_false',
                                    'items_wrap' => '<ul id="bootscore-navbar" class="navbar-nav nav-pills nav-fill  %2$s">%3$s</ul>',
                                    'depth' => 2,
                                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                                ));
                                ?>
                                <!-- Bootstrap 5 Nav Walker Main Menu End -->
                            </div>
                        </div>


                    </div><!-- .header-actions -->

                </div><!-- .container -->

            </nav><!-- Top Nav -->

            <nav id="nav-main" class="navbar navbar-expand-xl custom-shadow bg-transparent mobile-bg pt-2 pt-lg-0  py-mb-0 mt-md-n4 mt-xl-n5 z-1">

                <div class="container">

                    <!-- Navbar Brand -->
                    <a class="navbar-brand xs d-md-none" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/logo-sm-light.svg" alt="logo" class="logo-mobile xs d-md-none"></a>

                    <a class="navbar-brand md d-none d-md-block pe-4 pe-lg-0 py-0 me-auto me-xl-0" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/logo-light.svg" alt="logo" class="logo-mobile md d-none d-md-block d-xl-none"></a>

                    <a class="navbar-brand md d-none d-xl-block mt-n4 me-0 pe-xl-4 light-mode" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/logo.svg" alt="logo" class="logo md d-none d-xl-block"></a>

                    <a class="navbar-brand md d-none d-xl-block mt-n4 me-0 pe-xl-4 dark-mode" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/logo-light.svg" alt="logo" class="logo md d-none d-xl-block"></a>
                    <!-- Offcanvas Navbar -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-navbar">
                        <div class="offcanvas-header bg-light">
                            <span class="h5 mb-0"><?php esc_html_e('Menu', 'bootscore'); ?></span>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body d-md-block">
                            <!-- Bootstrap 5 Nav Walker Main Menu -->
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'main-menu',
                                'container' => false,
                                'menu_class' => 'nav-item',
                                'fallback_cb' => '__return_false',
                                'items_wrap' => '<ul id="bootscore-navbar" class="navbar-nav nav-pills nav-fill  %2$s">%3$s</ul>',
                                'depth' => 2,
                                'walker' => new bootstrap_5_wp_nav_menu_walker()
                            ));
                            ?>
                            <!-- Bootstrap 5 Nav Walker Main Menu End -->
                        </div>
                    </div>


                    <div class="header-actions d-flex align-items-center me-4 me-md-0 mt-3 mt-md-4">
                        <!-- Search Toggler Mobile -->
                        <button class="btn btn-outline-light d-xl-none ms-1 ms-md-2 top-nav-search-md mt-n5" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-search" aria-expanded="false" aria-controls="collapse-search">
                            <i class="fa-solid fa-magnifying-glass"></i><span class="visually-hidden-focusable">Search</span>
                        </button>


                    </div><!-- .header-actions -->

                </div><!-- .container -->

            </nav><!-- .navbar -->

            <!-- Top Nav Search Mobile Collapse -->
            <div class="collapse container d-xl-none pe-4 pe-md-0 mt-n5" id="collapse-search">
                <?php if (is_active_sidebar('top-nav-search')) : ?>
                    <div class="mt-n5 d-flex justify-content-end search-light">
                        <?php dynamic_sidebar('top-nav-search'); ?>
                    </div>
                <?php endif; ?>
            </div>

        </div><!-- .fixed-top .bg-light -->

    </header><!-- #masthead -->