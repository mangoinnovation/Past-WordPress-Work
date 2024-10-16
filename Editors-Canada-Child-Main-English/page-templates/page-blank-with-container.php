<?php

/**
 * Template Name: Blank with container
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>

<div id="content" class="site-content container py-5 mt-5">
  <div id="primary" class="content-area">

    <!-- Hook to add something nice -->
    <?php bs_after_primary(); ?>

    <main id="main" class="site-main">

      <?php the_breadcrumb(); ?>

      <div class="entry-content">
        <?php the_post(); ?>
        <?php the_content(); ?>
      </div>

    </main>

  </div>
</div>

<?php
get_footer();