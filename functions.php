<?php
/**
 * Pinnacle Exhibits functions and definitions
 *
 * @package Pinnacle Exhibits
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'pinnacle_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pinnacle_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Pinnacle Exhibits, use a find and replace
	 * to change 'Pinnacle Exhibits' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'pinnacle', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'pinnacle' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );
}
endif; // pinnacle_setup
add_action( 'after_setup_theme', 'pinnacle_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function pinnacle_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'pinnacle' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'pinnacle_widgets_init' );

// Register Custom Post Type
function people_custom_post_type() {

	$labels = array(
		'name'                => _x( 'People', 'Post Type General Name', 'pinnacle' ),
		'singular_name'       => _x( 'Person', 'Post Type Singular Name', 'pinnacle' ),
		'menu_name'           => __( 'People', 'pinnacle' ),
		'name_admin_bar'      => __( 'People', 'pinnacle' ),
		'parent_item_colon'   => __( 'Parent Person:', 'pinnacle' ),
		'all_items'           => __( 'All People', 'pinnacle' ),
		'add_new_item'        => __( 'Add New Person', 'pinnacle' ),
		'add_new'             => __( 'Add New People', 'pinnacle' ),
		'new_item'            => __( 'New Person', 'pinnacle' ),
		'edit_item'           => __( 'Edit Person', 'pinnacle' ),
		'update_item'         => __( 'Update Person', 'pinnacle' ),
		'view_item'           => __( 'View Person', 'pinnacle' ),
		'search_items'        => __( 'Search People', 'pinnacle' ),
		'not_found'           => __( 'Not found', 'pinnacle' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'pinnacle' ),
	);
	$args = array(
		'label'               => __( 'People', 'pinnacle' ),
		'description'         => __( 'People at Pinnacle', 'pinnacle' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'page-attributes', ),
		'taxonomies'          => array( 'taxonomy' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'People', $args );

}

// Hook into the 'init' action
add_action( 'init', 'people_custom_post_type', 0 );

function work_custom_post_type() {

	$labels = array(
		'name'                => _x( 'Work', 'Post Type General Name', 'pinnacle' ),
		'singular_name'       => _x( 'Work', 'Post Type Singular Name', 'pinnacle' ),
		'menu_name'           => __( 'Work', 'pinnacle' ),
		'name_admin_bar'      => __( 'Work', 'pinnacle' ),
		'parent_item_colon'   => __( 'Parent Work Item:', 'pinnacle' ),
		'all_items'           => __( 'All Work Items', 'pinnacle' ),
		'add_new_item'        => __( 'Add New Work Item', 'pinnacle' ),
		'add_new'             => __( 'Add New Work', 'pinnacle' ),
		'new_item'            => __( 'New Work Item', 'pinnacle' ),
		'edit_item'           => __( 'Edit Work Item', 'pinnacle' ),
		'update_item'         => __( 'Update Work Item', 'pinnacle' ),
		'view_item'           => __( 'View Work Item', 'pinnacle' ),
		'search_items'        => __( 'Search Work Items', 'pinnacle' ),
		'not_found'           => __( 'Not found', 'pinnacle' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'pinnacle' ),
	);
	$args = array(
		'label'               => __( 'work', 'pinnacle' ),
		'description'         => __( 'Work Examples', 'pinnacle' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'page-attributes', ),
		'taxonomies'          => array( 'taxonomy' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'work', $args );

}

// Hook into the 'init' action
add_action( 'init', 'work_custom_post_type', 0 );

function locations_custom_post_type() {

	$labels = array(
		'name'                => _x( 'Locations', 'Post Type General Name', 'pinnacle' ),
		'singular_name'       => _x( 'Location', 'Post Type Singular Name', 'pinnacle' ),
		'menu_name'           => __( 'Locations', 'pinnacle' ),
		'name_admin_bar'      => __( 'Locations', 'pinnacle' ),
		'parent_item_colon'   => __( 'Parent Location:', 'pinnacle' ),
		'all_items'           => __( 'All Locations', 'pinnacle' ),
		'add_new_item'        => __( 'Add New Location', 'pinnacle' ),
		'add_new'             => __( 'Add New Location', 'pinnacle' ),
		'new_item'            => __( 'New Location', 'pinnacle' ),
		'edit_item'           => __( 'Edit Location', 'pinnacle' ),
		'update_item'         => __( 'Update Location', 'pinnacle' ),
		'view_item'           => __( 'View Location', 'pinnacle' ),
		'search_items'        => __( 'Search Locations', 'pinnacle' ),
		'not_found'           => __( 'Not found', 'pinnacle' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'pinnacle' ),
	);
	$args = array(
		'label'               => __( 'Locations', 'pinnacle' ),
		'description'         => __( 'Pinnacle Locations', 'pinnacle' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'page-attributes', ),
		'taxonomies'          => array( 'taxonomy' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'location', $args );

}

// Hook into the 'init' action
add_action( 'init', 'locations_custom_post_type', 0 );

/**
 * Enqueue scripts and styles.
 */
function pinnacle_scripts() {
	wp_enqueue_style( 'pinnacle-style', get_stylesheet_directory_uri() . '/css/style.css', false, filemtime(get_stylesheet_directory() . '/css/style.css') );

	wp_enqueue_script( 'pinnacle-jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', false, true );

	wp_enqueue_script( 'pinnacle-modernizr', get_template_directory_uri() . '/js/modernizr.js', false, filemtime( get_stylesheet_directory().'/js/modernizr.js' ), true );

	wp_enqueue_script( 'pinnacle-lazySizes', get_template_directory_uri() . '/js/lazysizes.min.js', false, filemtime( get_stylesheet_directory().'/js/lazysizes.min.js' ), true );

	wp_enqueue_script( 'pinnacle-sticky', get_template_directory_uri() . '/js/jquery.sticky.js', false, filemtime( get_stylesheet_directory().'/js/jquery.sticky.js' ), true );

	wp_enqueue_script( 'pinnacle-overlay', get_template_directory_uri() . '/js/overlay.js', false, filemtime( get_stylesheet_directory().'/js/overlay.js' ), true );

	wp_enqueue_script( 'pinnacle-classie', get_template_directory_uri() . '/js/classie.js', false, filemtime( get_stylesheet_directory().'/js/classie.js' ), true );

	wp_enqueue_script( 'pinnacle-site-scripts', get_template_directory_uri() . '/js/site-scripts.js', false, filemtime( get_stylesheet_directory().'/js/site-scripts.js' ), true );

	wp_enqueue_script( 'pinnacle-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pinnacle_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * TypeKit Fonts
 */
function theme_typekit() {
    wp_enqueue_script( 'theme_typekit', '//use.typekit.net/slm1sim.js');
}
add_action( 'wp_enqueue_scripts', 'theme_typekit' );

function theme_typekit_inline() {
  if ( wp_script_is( 'theme_typekit', 'done' ) ) { ?>
  	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php }
}
add_action( 'wp_head', 'theme_typekit_inline' );

/**
 * Add image sizes
 */
add_image_size( 'retina-hero', 2600, 1733, false);
add_image_size( 'desktop-hero', 1180, 787, false);
add_image_size( 'tablet-hero', 860, 573, false);
add_image_size( 'mobile-hero', 480, 480, true);

add_image_size( 'retina-home-featured', 2600, 842, false);
add_image_size( 'desktop-home-featured', 1400, 453, false);
add_image_size( 'tablet-home-featured', 780, 253, false);
add_image_size( 'mobile-home-featured', 400, 350, true);

add_image_size( 'desktop-squared', 1000, 1000, false);
add_image_size( 'tablet-squared', 780, 780, false);
add_image_size( 'mobile-squared', 400, 400, false);
