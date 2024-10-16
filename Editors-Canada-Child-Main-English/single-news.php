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

          <header class="entry-header">
            <?php the_post(); ?>
            <?php bootscore_category_badge(); ?>
            <h1><?php the_title(); ?></h1>
            <p class="entry-meta">
              <small class="meta">
                <b class="pe-1">Date Posted:</b>

                <span class="pe-2"><?php echo  $post_date = get_the_date( 'l F j, Y' ); ?> </span>

                  <b class="px-2">News type:</b>
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



              </small>
            </p>
            <?php bootscore_post_thumbnail(); ?>
          </header>

          <div class="entry-content">
            <?php the_content(); ?>
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