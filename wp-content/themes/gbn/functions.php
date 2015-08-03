<?php 

// ENQUEUE STYLES ////////////////////////////////////////////////////////////

function gbn_theme_styles() {
    
    wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style( 'google_font_css', '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800|Special+Elite|Orbitron:400,900,700,500' );
    wp_enqueue_style( 'genericon_css', get_template_directory_uri() . '/css/genericons/genericons/genericons.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'responsive_css', get_template_directory_uri() . '/css/responsive.css' );
}

add_action( 'wp_enqueue_scripts', 'gbn_theme_styles'); 

// ENQUEUE SCRIPTS ////////////////////////////////////////////////////////////

function gbn_theme_js() {
    
    wp_enqueue_script( 'typed_js', get_template_directory_uri() . '/js/typed-js/typed.js', array( 'jquery' ), '', false );
    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array( 'jquery', 'typed_js'), '', false );

}

add_action( 'wp_enqueue_scripts', 'gbn_theme_js' );

// REGISTER OUR PRIMARY NAV MENU /////////////////////////////////////////////

add_theme_support( 'menus' ); // Adds 'menus' as an option in wp-admin

function register_theme_menus() {
    
    register_nav_menus(
        array(
            'primary-menu'  => __( 'Primary Menu' )
        )
    );
}

add_action( 'init', 'register_theme_menus');

// GENERAL PREFERENCE CHANGES ///////////////////////////////////////////////

// Enable the uploading of the SVG file type ////////////////////////////////

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');

// Replace the excerpt "more" text with a link //////////////////////////////

function new_excerpt_more($more) {
      global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');

// Change excerpt length to '30 words' instead of the default '55' //////////

function gbn_excerpt_length( $length ) {
    return 30;
}

add_filter( 'excerpt_length', 'gbn_excerpt_length', 999);

/// Add custom post types - reviews, articles and podcast to main RSS feed.
function mycustomfeed_cpt_feed( $query ) {
        if ( $query->is_feed() )
            $query->set( 'post_type', array( 'podcast', 'reviews', 'articles' ) ); 
        return $query;
}

add_filter( 'pre_get_posts', 'mycustomfeed_cpt_feed' );

?>