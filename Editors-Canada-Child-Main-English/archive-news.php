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
            <h1>Editors Canada news</h1>
            <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
          </header>

          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

              <div class="card horizontal border-0 mb-4">
                <div class="row g-0">

                  <?php if ( has_post_thumbnail() ) : ?>
                    <div class="col-lg-6 col-xl-5 col-xxl-4">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium', array('class' => 'card-img-lg-start')); ?>
                      </a>
                    </div>
                  <?php endif; ?>

                  <div class="col">
                    <div class="card-body">


                      <a class="" href="<?php the_permalink(); ?>">
                        <?php the_title('<h2 class="blog-post-title h5">', '</h2>'); ?>
                      </a>


                        <p class="meta small mb-2">
                          <b class="pe-2">Date Posted:</b>

                          <span><?php echo  $post_date = get_the_date( 'l F j, Y' ); ?> </span>

                          <b class="px-2">News type:</b>
                          <span>

                         <?php
                            $news_id = get_the_ID();
                            $taxonomy = 'news_type';
                            $terms = get_the_terms($news_id, $taxonomy) ; // Get all terms of a taxonomy

                        if ( $terms && !is_wp_error( $terms ) ) :
                        $total_posts =  sizeof ($terms);
                        $i = 0;
                         ?>

                         <?php foreach ( $terms as $term ) {

                            $i++;

                            ?>

                            <a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a>

                            <?php    if( $i != $total_posts ) { ?>
                             ,
                            <?php  } ?>

                            <?php } ?>
                            <?php endif;?>

                            </span>
                        </p>

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
                <a class="rss-feed-icon fs-1" href="<?php echo esc_url(home_url()); ?>/news/feed/"  title="Subscribe to National e-news updates">
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
