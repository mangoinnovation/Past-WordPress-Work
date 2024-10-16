<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Bootscore
 */

get_header();
?>
    <div id="content" class="site-content container py-5 mt-5">
        <div id="primary" class="content-area">

            <!-- Hook to add something nice -->
            <?php bs_after_primary(); ?>

            <div class="row">
                <div class="col">

                    <main id="main" class="site-main">

                        <?php if (have_posts()) : ?>

                            <header class="page-header mb-4">
                                <h1>
                                    <?php
                                    /* translators: %s: search query. */
                                    printf(esc_html__('Search', 'bootscore'));
                                    ?>
                                </h1>
                                <div class="row">
                                    <div class="col-md-4 col-xl-2"">
                                        <h5 class="pt-4 ms-lg-5"> <?php printf(esc_html__('Enter your keywords', 'bootscore'));   ?></h5>
                                    </div>
                                    <div class="col-md-8 col-xl-10">
                                        <!-- Search Button Outline Secondary Right -->
                                        <form class="searchform input-group py-3 py-md-4" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                                            <button type="submit" class="input-group-text btn btn-link text-secondary border-0 bg-transparent"><i class="fa-solid fa-magnifying-glass"></i><span class="visually-hidden-focusable">Search</span></button>
                                            <input type="text" name="s" class="form-control border border-secondary rounded-pill" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder', 'bootscore' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'bootscore' ) ?>" />

                                        </form>

                                    </div>


                                </div>



                            </header>

                            <h2 class="pb-4">
                                <?php
                                /* translators: %s: search query. */
                                printf(esc_html__('Search results', 'bootscore'));
                                ?>

                            </h2>

                            <?php
                            /* Start the Loop */
                            while (have_posts()) :
                                the_post();

                                /**
                                 * Run the loop for the search to output the results.
                                 * If you want to overload this in a child theme then include a file
                                 * called content-search.php and that will be used instead.
                                 */
                                get_template_part('template-parts/content', 'search');

                            endwhile;

                            bootscore_pagination();

                        else :

                            get_template_part('template-parts/content', 'none');

                        endif;
                        ?>

                    </main><!-- #main -->

                </div><!-- col -->

            </div><!-- row -->

        </div><!-- #primary -->
    </div><!-- #content -->
<?php
get_footer();
