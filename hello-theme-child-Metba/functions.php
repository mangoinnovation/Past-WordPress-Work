<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_scripts_styles() {

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );



// Enqueue Bootstrap 5.1 CSS
function enqueue_bootstrap() {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);

}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap');

// Shortcode to display events with filters
function display_events_with_filters($atts) {
    // Parse shortcode attributes
    $atts = shortcode_atts(
        array(
            'post_type' => 'event',
            'taxonomy' => 'topic',
        ),
        $atts,
        'display_events'
    );

    // Get all topics for the filter
    $terms = get_terms(array(
        'taxonomy' => $atts['taxonomy'],
        'hide_empty' => false,
    ));

    ob_start();
    ?>
        <div class="row mb-4">
            <div class="col-12">
                <span class="filter-header">Filter by Topic</span>

                <div class="d-flex flex-wrap gap-3 mt-3">

                    <input type="radio" class="btn-check" name="topic-filter" id="all-topics" value="" autocomplete="off" checked>
                    <label class="btn btn-secondary" for="all-topics">All</label>
                    <?php foreach ($terms as $term): ?>
                        <input type="radio" class="btn-check" name="topic-filter" id="topic-<?php echo $term->slug; ?>" value="<?php echo $term->slug; ?>" autocomplete="off">
                        <label class="btn btn-secondary" for="topic-<?php echo $term->slug; ?>"><?php echo $term->name; ?></label>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h2 class="event-sector-header mt-4">Upcoming Events</h2>
                <div class="row" id="upcoming-events">
                    <?php echo get_events('upcoming', $atts['post_type'], $atts['taxonomy']); ?>
                </div>
                <h2 class="event-sector-header-2 mt-4">Past Events</h2>
                <div class="row" id="past-events">
                    <?php echo get_events('past', $atts['post_type'], $atts['taxonomy']); ?>
                </div>
            </div>
        </div>

    <script>
        document.querySelectorAll('input[name="topic-filter"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                var filter = this.value;
                var upcomingEvents = document.getElementById('upcoming-events');
                var pastEvents = document.getElementById('past-events');

                // Filter Upcoming Events
                Array.from(upcomingEvents.children).forEach(function(event) {
                    if (filter === "" || event.dataset.topic.includes(filter)) {
                        event.style.display = "block";
                    } else {
                        event.style.display = "none";
                    }
                });

                // Filter Past Events
                Array.from(pastEvents.children).forEach(function(event) {
                    if (filter === "" || event.dataset.topic.includes(filter)) {
                        event.style.display = "block";
                    } else {
                        event.style.display = "none";
                    }
                });
            });
        });
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('display_events', 'display_events_with_filters');

// Function to get events
function get_events($type, $post_type, $taxonomy) {
    $today = date('Ymd');
    $meta_query = array();

    if ($type == 'upcoming') {
        $meta_query[] = array(
            'key' => 'event_date',
            'compare' => '>=',
            'value' => $today,
            'type' => 'DATE',
        );
        $order = 'ASC';
    } else {
        $meta_query[] = array(
            'key' => 'event_date',
            'compare' => '<',
            'value' => $today,
            'type' => 'DATE',
        );
        $order = 'DESC';
    }

    $args = array(
        'post_type' => $post_type,
        'posts_per_page' => -1,
        'meta_query' => $meta_query,
        'meta_key' => 'event_date',
        'orderby' => 'meta_value',
        'order' => $order,
    );

    $query = new WP_Query($args);
    $output = '';

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $event_date = get_post_meta(get_the_ID(), 'event_date', true);
            $event_date_formatted = date('F j, Y', strtotime($event_date));
            $topics = wp_get_post_terms(get_the_ID(), $taxonomy, array('fields' => 'slugs'));
            $register_link = get_field('register_link');
            $featured_image = get_the_post_thumbnail(get_the_ID(), 'post-thumbnail', array('class' => 'img-fluid mb-3 custom-shadow'));

            $output .= '<div class="col-md-3 mb-4" data-topic="' . implode(' ', $topics) . '">';
            if ($featured_image) {
                $output .= $featured_image;
            }
            $output .= '<h5 class="text-white">' . get_the_title() . '</h5>';

            if ($type == 'upcoming') {
                $output .= '<p><small class="text-white event-date">Date: ' . $event_date_formatted . '</small></p>';
                if ($register_link) {
                    $output .= '<a href="' . esc_url($register_link) . '" class="btn btn-link event-link">See More Details</a>';
                }
            }

            $output .= '</div>';
        }
        wp_reset_postdata();
    } else {
        $output .= '<p>No upcoming events.</p>';
    }

    return $output;
}


