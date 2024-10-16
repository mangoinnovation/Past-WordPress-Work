<?php
/**
 * Template Post Type: post
 */

get_header();
?>

    <div id="content" class="site-content container py-5 mt-4">
        <div id="primary" class="content-area">

            <!-- Hook to add something nice -->
            <?php bs_after_primary(); ?>

            <?php the_breadcrumb(); ?>

            <div class="row">
                <div class="col-12">

                    <main id="main" class="site-main">

                        <header class="entry-header mt-3">
                            <?php the_post(); ?>
                            <?php bootscore_category_badge(); ?>
                            <h1><?php the_title(); ?></h1>
                            <?php the_post_thumbnail('large', array('class' => 'rounded volunteer-thumbnail')); ?>
                        </header>

                        <div class="entry-content mt-3">
                            <?php

                            the_content();

                            $Author_Name = get_field( 'write_up_author_name',  $post->ID );
                            $Author_Name_url = get_field( 'author_name_url',  $post->ID );

                            if ($Author_Name): ?>
                            <a href="<?php echo  $Author_Name_url; ?>">
                                ~<?php echo $Author_Name; ?>
                            </a>
                            <?php endif; ?>
                        </div>

                        <div class="mb-3">
                            <?php
                            $profile_link = get_field( 'ode_profile_link',  $post->ID );
                            $volunteer_website_url = get_field( 'volunteer_website_url',  $post->ID );

                            if ($profile_link || $volunteer_website_url || have_rows('social_links_2')): ?>
                                <h4 class="mb-3">Volunteer Contact Info</h4>
                            <?php
                            endif;


                            if ($profile_link): ?>
                                 <a  class="me-5" href="<?php echo  $profile_link; ?>"><i class="fa-solid fa-up-right-from-square me-2"></i> ODE Profile Link</a>

                            <?php
                            endif;

                            if ($volunteer_website_url):?>

                                <a href="<?php echo  $volunteer_website_url; ?>"><i class="fa-solid fa-link me-2"></i> Website Link</a>

                            <?php endif; ?>
                            <br />

                            <div class="social-links mt-3">
                                <?php while( have_rows('social_links_2') ): the_row(); ?>
                                    <a class="social-link btn btn-link btn-sm text-white rounded-circle me-2" target="_blank" href="<?php the_sub_field('url'); ?>">
                                        <i class="<?php the_sub_field('icon_class'); ?> fa-lg">
                                            <span class="sr-only"><?php the_sub_field('label'); ?></span>
                                        </i>
                                    </a>
                                <?php endwhile; ?>
                            </div>

                        </div>

                        <footer class="entry-footer clear-both">
                            <div class="pt-4 mb-4">
                                <?php bootscore_tags(); ?>
                            </div>
                            <nav aria-label="bS page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <?php previous_post_link('%link'); ?>
                                    </li>
                                    <li class="page-item">
                                        <?php next_post_link('%link'); ?>
                                    </li>
                                </ul>
                            </nav>
                            <?php comments_template(); ?>
                        </footer>

                    </main>

                </div>

            </div>

        </div>
    </div>

<?php
get_footer();