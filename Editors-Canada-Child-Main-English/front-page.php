<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>

    <div id="content" class="site-content front-page pb-5">

        <div id="primary" class="content-area">

            <main id="main" class="site-main">





                <div class="container-fluid px-0">

                    <?php
                    //code to display the banners
                    //check that the page has banners
                    if( have_rows('banners') ):
                        //count the number of banners
                        $count = count(get_field('banners'));?>
                        <div id="banner-carousel" class="carousel slide" data-bs-ride="carousel">

                            <?php //loop through all the banners ?>
                            <?php $i=0; ?>
                            <div class="carousel-inner">
                                <?php while( have_rows('banners') ): the_row();

                                    //get the banner variables.
                                    $banner_image = get_sub_field('banner_image');
                                    $banner_colour = get_sub_field('banner_colour');
                                    $banner_title = get_sub_field('banner_title');
                                    $banner_body = get_sub_field('banner_body');
                                    $banner_cta_label = get_sub_field('banner_cta_label');
                                    $banner_cta_link = get_sub_field('banner_cta_link');

                                    ?>
                                    <div style="background-color:<?php echo $banner_colour; ?>; " class="carousel-item mt-5 pt-5 pt-md-3 pb-4 <?php if ($i == 0) {echo'active';} ?>">
                                        <div class="container">
                                            <a href="<?php echo $banner_cta_link; ?>" class="banner-link">
                                                <div class="row">
                                                    <div class="col-md-6 col-xl-4 px-4">
                                                        <?php if( $banner_title ): ?>
                                                            <h1 class="banner-title text-body fw-bold pt-0 pt-md-5"><?php echo $banner_title; ?></h1>
                                                        <?php endif; ?>
                                                        <?php if( $banner_body ): ?>
                                                            <p class="banner-body text-body text-decoration-none"><?php echo $banner_body; ?></p>
                                                        <?php endif; ?>
                                                        <?php if( $banner_cta_label ): ?>
                                                            <p class="cta-wrapper"><a href="<?php echo $banner_cta_link; ?>" class="btn btn-light rounded-pill px-5 mt-2 banner-cta"><?php echo $banner_cta_label; ?></a></p>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="col-md-6 col-xl-8">
                                                        <div class="banner-image">
                                                            <img src="<?php echo $banner_image['url']; ?>" class="pt-2 pt-md-5 pt-lg-3 pb-3 " alt="">
                                                        </div>



                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <?php $i++; ?>
                                <?php endwhile; ?>
                            </div>

                            <?php if ($count > 1) {?>
                                <!-- *Carousel arrow if needed* -->

                                <!--                                <a class="carousel-control-prev" href="#banner-carousel" role="button" data-slide="prev">-->
                                <!--                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
                                <!--                                    <span class="sr-only">Previous</span>-->
                                <!--                                </a>-->
                                <!--                                <a class="carousel-control-next" href="#banner-carousel" role="button" data-slide="next">-->
                                <!--                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
                                <!--                                    <span class="sr-only">Next</span>-->
                                <!--                                </a>-->
                            <?php } ?>


                            <?php
                            //add the indicators only if there is more than one banner
                            if ($count > 1) {?>
                                <div class="container">
                                    <div class="row">
                                        <div class="carousel-indicators mt-n5 ps-4 mx-0 position-relative justify-content-start">
                                            <?php $i=0; ?>
                                            <?php while ($i < $count) { ?>
                                                <button type="button" data-bs-target="#banner-carousel" data-bs-slide-to="<?php echo $i; ?>" class="border border-2 border-secondary rounded-circle <?php if ($i == 0) {echo'active';} ?>" aria-label="Slide <?php echo $i; ?>"></button>
                                                <?php $i++; } ?>
                                        </div>
                                    </div>

                                </div>

                            <?php } ?>


                        </div>
                    <?php endif;
                    //And that's it!!!

                    ?>

                </div>
                <div class="container">
                    <div class="row row-eq-height pt-5 pb-4">
                        <?php
                        if( have_rows('columns') ):

                            while( have_rows('columns') ): the_row();
                                $column_1_link = get_sub_field('column_1_link');
                                $column_1_text = get_sub_field('column_1_text');
                                $column_2_link = get_sub_field('column_2_link');
                                $column_2_text = get_sub_field('column_2_text');
                                $column_3_link = get_sub_field('column_3_link');
                                $column_3_text = get_sub_field('column_3_text');

                            endwhile;

                        endif;
                        ?>
                        <div class="col-lg-4 mb-4">
                            <a class="text-yellow column-link" href="<?php echo $column_1_link;?>">
                                <div class="p-5 h-100 bg-primary">

                                    <?php echo $column_1_text;?>

                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <a class="text-yellow column-link" href="<?php echo $column_2_link;?>">
                                <div class="p-5 h-100 bg-light-red">

                                    <?php echo $column_2_text;?>

                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <a class="text-yellow column-link" href="<?php echo $column_3_link;?>">
                                <div class="p-5 h-100 bg-secondary">

                                    <?php echo $column_3_text;?>

                                </div>
                            </a>

                        </div>
                    </div>

                </div>
                <div class="container">
                    <div class="row px-0 px-md-4  g-5">
                        <div class="col-lg-4 d-flex flex-column mb-4">
                            <h2 class="pb-1 fw-normal"><?php esc_html_e('Meet an Editor', 'bootscore'); ?></h2>

                            <?php
                            $args = array(
                                'post_type' => 'volunteers',
                                'orderby'   => 'rand',
                                'posts_per_page' => -1
                            );
                            $the_query = new WP_Query( $args );


                            ?>

                            <?php if ( $the_query->have_posts() ) :
                                $random_int = rand( 0, $the_query->post_count - 1 );
                                $post = $the_query->posts[$random_int];
                                setup_postdata( $post );
                                $link =  get_permalink();
                                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'medium' );
                                $excerpt = get_the_excerpt();
                                $excerpt = substr( $excerpt, 0, 600 ); // Only display first 260 characters of excerpt
                                $excerptShort = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );
//                            $profile_link = get_field( 'ode_profile_link',  $post->ID );
                                ?>
                                <div class="py-1">

                                    <a class="text-decoration-none" href="<?php echo  $link; ?>">
                                        <h5 class="text-body"><?php the_title(); ?></h5>
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('thumbnail', array('class' => 'float-xl-end rounded volunteer-thumbnail-2 ms-1 mb-3 shadow')); ?>
                                            </a>
                                        <?php endif; ?>

                                        <div class="mt-n2 text-body"><?php echo $excerptShort; ?></div>
                                    </a>
                                </div>



                                <?php wp_reset_postdata(); ?>

                            <?php endif; ?>

                            <div class="d-flex h-100 justify-content-end align-items-end pt-5 pt-xl-0">

                                <a class="fw-bold" href="<?php echo esc_url(home_url('/volunteers')); ?>"><?php esc_html_e('View all featured volunteers', 'bootscore'); ?></a>

                            </div>
                        </div>
                        <div class="col-lg-4 d-flex flex-column mb-4">
                            <h2 class="pb-1 fw-normal"><?php esc_html_e('News', 'bootscore'); ?></h2>

                            <?php
                            $args = array(
                                'post_type' => 'news',
                                'posts_per_page' => 3
                            );
                            $the_query = new WP_Query( $args );


                            ?>

                            <?php if ( $the_query->have_posts() ) :
                                $total_posts =  $the_query->found_posts;
                                $i = 0;
                                ?>

                                <?php while ( $the_query->have_posts() ) : $the_query->the_post();
                                $i++;
                                $post_date = get_the_date( 'l F j, Y' );
                                $link =  get_permalink();
                                ?>
                                <div class="py-1">
                                    <h5><a href="<?php echo $link; ?>"><?php the_title(); ?></a></h5>
                                    <p class="mt-n1 pb-1"><?php echo $post_date; ?></p>

                                    <?php    if( $i < 3 AND $i != $total_posts ) { ?>
                                        <hr />
                                    <?php  } ?>
                                </div>
                            <?php endwhile; ?>

                                <?php wp_reset_postdata(); ?>

                            <?php endif; ?>
                            <div class="d-flex h-100 justify-content-end align-items-end pt-5 pt-xl-0">
                                <a class="fw-bold" href="<?php echo esc_url(home_url('/news')); ?>"><?php esc_html_e('Read all news', 'bootscore'); ?></a>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <h2 class="pb-1 fw-normal"><?php esc_html_e('From The Blog', 'bootscore'); ?></h2>

                            <?php
                            $rss_url = get_field('rss_feed_url');
                            $rss_feed = simplexml_load_file("$rss_url");

                            if (! empty($rss_feed)) {
                                $i = 0;
                                foreach ($rss_feed->channel->item as $feed_item) {
                                    $total_posts =  $rss_feed->found_posts;
                                    if ($i >= 3)
                                        break;
                                    $feed_date = date("l F j, Y", strtotime($feed_item->pubDate));
                                    $link =  $feed_item->link;
                                    $i ++;
                                    ?>
                                    <div class="py-1">
                                        <h5><a href="<?php echo $link; ?>"><?php echo $feed_item->title; ?></a></h5>
                                        <p class="mt-n1 pb-1"><?php echo $feed_date; ?></p>

                                        <?php    if( $i  < 3 AND $i != $total_posts  ) { ?>
                                            <hr />
                                        <?php  } ?>
                                    </div>

                                    <?php

                                }
                            }
                            ?>

                        </div>


                    </div>
                    <div class="col-12 pb-5">
                        <hr />
                    </div>
                </div>


                <div class="container">

                    <!-- Hook to add something nice -->
                    <?php bs_after_primary(); ?>

                    <div class="row">
                        <div class="col-12">







                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div>





                        </div>

                    </div>

                </div>


            </main>

        </div>



    </div>

<?php
get_footer();