<?php

/**
 * thim functions and definitions
 *
 * @package thim
 */
/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( !isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}


if ( !function_exists( 'thim_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function thim_setup() {

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on thim, use a find and replace
		 * to change 'thim' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'thim', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'woocommerce' );
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary'     => __( 'Primary Menu', 'thim' ),
 		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
		) );

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'image', 'video', 'quote', 'link', 'gallery', 'audio'
		) );

		add_theme_support( "title-tag" );
		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'thim_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
	}

endif; // thim_setup
add_action( 'after_setup_theme', 'thim_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function thim_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar 1', 'thim' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="box-heading">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => 'Top Drawer',
		'id'            => 'drawer_top',
		'description'   => __( 'Drawer Top', 'thim' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Toolbar', 'thim' ),
		'id'            => 'toolbar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s" >',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Offcanvas Sidebar', 'thim' ),
		'id'            => 'offcanvas_sidebar',
		'description'   => 'Offcanvas Sidebar',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );


	register_sidebar( array(
		'name'          => __( 'Header Left', 'thim' ),
		'id'            => 'header_left',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s" >',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Header Right', 'thim' ),
		'id'            => 'header_right',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Menu Right', 'thim' ),
		'id'            => 'menu_right',
		'description'   => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s" >',
		'after_widget'  => '</li>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer', 'thim' ),
		'id'            => 'footer',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Copyright', 'thim' ),
		'id'            => 'copyright',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar Shop', 'thim' ),
		'id'            => 'sidebar-shop',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="box-heading">',
		'after_title'   => '</h4>',
	) );
    register_sidebar( array(
        'name'          => 'Images or Slider Shop',
        'id'            => 'slider-shop',
        'description'   => __( 'Images or Slider Shop', 'fedora' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '',
        'after_title'   => '',
    ) );

    register_sidebar( array(
        'name'          => __( 'Sidebar Shop', 'thim' ),
        'id'            => 'sidebar-shop',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="box-heading">',
        'after_title'   => '</h4>',
    ) );


}

add_action( 'widgets_init', 'thim_widgets_init' );


//check if URL exists
function thim_url_exists( $url ) {
	if ( !$url ) {
		return false;
	} else {
		$file_headers = @get_headers( $url );
		if ( $file_headers[0] == 'HTTP/1.0 404 Not Found' ) {
			return false;
		} else {
			if ( $file_headers[0] == 'HTTP/1.0 302 Found' && $file_headers[7] == 'HTTP/1.0 404 Not Found' ) {
				return false;
			} else {
				return true;
			}
		}
	}
}

/**
 * load framework
 */
require_once get_template_directory() . '/framework/tp-framework.php';

require TP_THEME_DIR . 'inc/admin/customize-options.php';

require TP_THEME_DIR . 'inc/widgets/widgets.php';

/**
 * load custom-functions
 */
require_once get_template_directory() . '/inc/custom-functions.php';

/**
 * load post type testimonials
 */

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/tax-meta.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

if ( class_exists( 'WooCommerce' ) ) {
	// Woocomerce
	WC_Post_types::register_taxonomies();
	require get_template_directory() . '/woocommerce/woocommerce.php';
}

if ( is_admin() ) {
	require TP_THEME_DIR . 'inc/admin/plugins-require.php';
}
// Remove Open Sans that WP adds from frontend
if ( !function_exists( 'remove_wp_open_sans' ) ) :
	function remove_wp_open_sans() {
		wp_deregister_style( 'open-sans' );
		wp_register_style( 'open-sans', false );
	}
 	add_action( 'wp_enqueue_scripts', 'remove_wp_open_sans' );
endif;

// Hard Crop
if ( false === get_option( "medium_crop" ) ) {
	add_option( "medium_crop", "1" );
} else {
	update_option( "medium_crop", "1" );
}
if ( false === get_option( "large_crop" ) ) {
	add_option( "large_crop", "1" );
} else {
	update_option( "large_crop", "1" );
}
