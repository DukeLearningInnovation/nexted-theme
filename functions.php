<?php
function nextedfest_enqueue_styles() {

    /* Get file stat */
    $stat = stat('/srv/web/cit.duke.edu/html/wp-content/themes/nextedfest/style.css');

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        $stat['mtime']
    );
}
add_action( 'wp_enqueue_scripts', 'nextedfest_enqueue_styles' );



$the_real_url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if ($the_real_url == 'https://cit.duke.edu/nextedfest/events/month/' || $the_real_url == 'http://cit.duke.edu/nextedfest/events/month/') {
  wp_safe_redirect( 'https://cit.duke.edu/nextedfest/events/2017-10/');
  exit;
}

teccc_add_legend_view( 'list' );
teccc_add_legend_view( 'week' );
teccc_add_legend_view( 'day' );

if ( class_exists('Tribe__Events__Main') ){

    /* get event category names in text format */
    function tribe_get_text_categories ( $event_id = null ) {

        if ( is_null( $event_id ) ) {
            $event_id = get_the_ID();
        }

        $event_cats = '';

        $term_list = wp_get_post_terms( $event_id, Tribe__Events__Main::TAXONOMY );

        foreach( $term_list as $term_single ) {
            $event_cats .= $term_single->name . ', ';
        }

        return rtrim($event_cats, ', ');

    }

}

function custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );




?>
