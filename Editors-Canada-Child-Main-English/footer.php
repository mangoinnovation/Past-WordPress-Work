<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.2.0.0
 */

?>

<footer>

    <div class="bootscore-footer footer-bg pt-3 pt-md-5 pb-4 px-4 footer-shadow">
        <div class="container">

            <!-- Top Footer Widget -->
            <?php if (is_active_sidebar('top-footer')) : ?>
                <div>
                    <?php dynamic_sidebar('top footer'); ?>
                </div>
            <?php endif; ?>

            <div class="row">

                <!-- Footer 1 Widget -->
                <div class="col-md-6 col-lg-4 col-xl-2">
                    <?php if (is_active_sidebar('footer-1')) : ?>
                        <div>
                            <?php dynamic_sidebar('footer-1'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Footer 2 Widget -->
                <div class="col-md-6 col-lg-4 col-xl-2">
                    <?php if (is_active_sidebar('footer-2')) : ?>
                        <div>
                            <?php dynamic_sidebar('footer-2'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Footer 3 Widget -->
                <div class="col-md-6 col-lg-4 col-xl-2">
                    <?php if (is_active_sidebar('footer-3')) : ?>
                        <div>
                            <?php dynamic_sidebar('footer-3'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Footer 4 Widget -->
                <div class="col-md-6 col-lg-4 col-xl-2">
                    <?php if (is_active_sidebar('footer-4')) : ?>
                        <div>
                            <?php dynamic_sidebar('footer-4'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- Footer Widgets End -->

                <!-- Footer 5 Widget -->
                <div class="col-md-6 col-lg-4 col-xl-2">
                    <?php if (is_active_sidebar('footer-5')) : ?>
                        <div>
                            <?php dynamic_sidebar('footer-5'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- Footer Widgets End -->

                <!-- Footer 6 Widget -->
                <div class="col-md-6 col-lg-4 col-xl-2">
                    <?php if (is_active_sidebar('footer-6')) : ?>
                        <div>
                            <?php dynamic_sidebar('footer-6'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- Footer Widgets End -->

            </div>

            <!-- Bootstrap 5 Nav Walker Footer Menu -->
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="footer-menu" class="nav %2$s">%3$s</ul>',
                'depth' => 1,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
            <!-- Bootstrap 5 Nav Walker Footer Menu End -->

        </div>
    </div>

    <div class="bootscore-info footer-bg text-white mt-n1 py-5">
        <div class="container">
            <div class="row">
                <div class="col-3 col-md-1">
                    <a class="navbar-brand xs ps-3 p-md-0" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/img/logo/logo-sm-light.svg" alt="logo" class="logo-footer xs"></a>
                </div>
                <div class="col-9 col-md-11">
                    <div class="ps-4 p-md-0">
                        <?php echo wp_kses_post( get_field('footer_contact_info', 'options') ); ?>
                    </div>


                </div>






            </div>


            <div class="row pt-5">
                <div class="col-lg-1">
                </div>
                <div class="col-md-6 col-lg-7 col-xl-8">
                    <small>&copy;&nbsp;<?php echo Date('Y'); ?> Editors' Association of Canada / Association canadienne des réviseurs</small>
                    <br />
                    <small><a class="text-white text-decoration-none" target="_blank" href="https://mangoinnovation.com">Designed &amp; Developed by: Mango Innovation</a></small>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="row pt-3 pt-md-0">
                        <div class="col-6 text-md-end">
                            <small><a class="text-white" href="<?php the_field('copyright_notice', 'options'); ?>"><?php the_field('copyright_text', 'options'); ?></a></small>
                        </div>
                        <div class="col-6 text-md-end">
                            <small><a class="text-white" href="<?php the_field('privacy_policy', 'options'); ?>"><?php the_field('privacy_policy_text', 'options'); ?></a></small>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

</footer>

<!-- To top button -->
<a href="#" class="btn btn-primary shadow top-button position-fixed zi-1020"><i class="fa-solid fa-chevron-up"></i><span class="visually-hidden-focusable">To top</span></a>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>