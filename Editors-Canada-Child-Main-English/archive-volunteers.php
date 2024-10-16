<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>

    <div id="content" class="site-content container py-5 mt-5">
        <div id="primary" class="content-area">

            <?php bs_after_primary(); ?>

            <div class="row">
                <div class="col">

                    <main id="main" class="site-main">

                        <header class="page-header mb-4">
                            <h1>Featured Volunteers</h1>

                            <div class="archive-description">
                            The featured volunteer recognizes the contributions of our dedicated people who keep Editors Canada going. Volunteers are the backbone of the association and we are grateful for the many members and affiliates who answer the call when help is needed.
                            </div>
                            <hr />
                        </header>

                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>

                                <div class="card horizontal border-0 mb-4">
                                    <div class="row g-0">



                                        <div class="col">
                                            <div class="card-body">

                                                <?php if ( has_post_thumbnail() ) : ?>
                                                        <a href="<?php the_permalink(); ?>">
                                                            <?php the_post_thumbnail('medium', array('class' => 'card-img volunteer-thumbnail shadow')); ?>
                                                        </a>
                                                <?php endif; ?>

                                                <a class="" href="<?php the_permalink(); ?>">
                                                    <?php the_title('<h2 class="blog-post-title h5">', '</h2>'); ?>
                                                </a>


                                                <p class="card-text">
                                                    <a class="text-body text-decoration-none" href="<?php the_permalink(); ?>">
                                                        <?php echo strip_tags(get_the_excerpt()); ?>
                                                    </a>
                                                </p>

                                                <p class="card-text">
                                                    <a class="read-more" href="<?php the_permalink(); ?>">
                                                        <?php _e('Read more', 'bootscore'); ?><i class="fa-solid fa-chevron-right ps-1"></i>
                                                    </a>
                                                </p>

                                                <?php bootscore_tags(); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <footer class="entry-footer">
                            <?php bootscore_pagination(); ?>
                        </footer>
                        <div class="rss-feed pt-3">
                            <a class="rss-feed-icon fs-1" href="<?php echo esc_url(home_url()); ?>/volunteers/feed/"  title="Subscribe to Featured Volunteers">
                                <i class="fa-solid fa-square-rss"></i>
                            </a>

                        </div>

                    </main>

                </div>

            </div>

        </div>
    </div>

<?php
get_footer();
