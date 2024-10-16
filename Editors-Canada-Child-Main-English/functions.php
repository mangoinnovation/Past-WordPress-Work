<?php

// style and scripts
add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
function bootscore_child_enqueue_styles() {

  // style.css
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

  // Compiled main.css
  $modified_bootscoreChildCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/css/main.css'));
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', array('parent-style'), $modified_bootscoreChildCss);

  // custom.js
    wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', false, '', true);
    // custom.js
    wp_enqueue_script('color-modes-js', get_stylesheet_directory_uri() . '/js/color-modes.js', false, '', true);
    wp_enqueue_script('color-modes-js', get_stylesheet_directory_uri() . '/js/color-modes.js', false, '', true);
}

function localize_vars() {
    return array(
        'stylesheet_directory' => get_stylesheet_directory_uri()
    );
}

//wp_enqueue_script( 'my_script', plugins_url( 'my_plugin/my_script.js' ), array( 'jquery' ) );
//wp_localize_script( 'my_script', 'my_unique_name', localize_vars() );

register_nav_menus([
    'tertiary' => 'Top Nav Menu'
]);
// Footer 5 Start
register_sidebar(array(
    'name'          => esc_html__('Footer 5', 'bootscore'),
    'id'            => 'footer-5',
    'description'   => esc_html__('Add widgets here.', 'bootscore'),
    'before_widget' => '<div class="footer_widget mb-4">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widget-title h4">',
    'after_title'   => '</h2>'
));
// Footer 5 End

// Footer 6 Start
register_sidebar(array(
    'name'          => esc_html__('Footer 6', 'bootscore'),
    'id'            => 'footer-6',
    'description'   => esc_html__('Add widgets here.', 'bootscore'),
    'before_widget' => '<div class="footer_widget mb-4">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widget-title h4">',
    'after_title'   => '</h2>'
));
// Footer 6 End


/* ACF - Theme Options */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Theme Options',
        'menu_title' => 'Theme Options',
        'menu_slug' => 'theme-options',
        'capability' => 'edit_posts',
        'position' => 80,
        'redirect' => false
    ]);
}

add_filter( 'acf/the_field/escape_html_optin', '__return_true' );
