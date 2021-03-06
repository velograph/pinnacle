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
		'client-tools' => __( 'Client Tools', 'pinnacle' ),
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
		'add_new'             => __( 'Add a New Person', 'pinnacle' ),
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

//REDIRECT CTP STAFF SINGLE PAGE REQUESTS TO ABOUT US
add_action('wp', 'redirect_ctps');
function redirect_ctps(){
    global $post;
    if( (is_singular('people')) ){
        wp_redirect( home_url('/people/') ); exit;
    }
}

// Hook into the 'init' action
add_action( 'init', 'people_custom_post_type', 0 );

// Register Custom Taxonomy
function register_people_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Roles', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Role', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Roles', 'text_domain' ),
		'all_items'                  => __( 'All Roles', 'text_domain' ),
		'parent_item'                => __( 'Parent Role', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Role:', 'text_domain' ),
		'new_item_name'              => __( 'New Role', 'text_domain' ),
		'add_new_item'               => __( 'Add New Role', 'text_domain' ),
		'edit_item'                  => __( 'Edit Role', 'text_domain' ),
		'update_item'                => __( 'Update Role', 'text_domain' ),
		'view_item'                  => __( 'View Role', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate roles with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove roles', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Roles', 'text_domain' ),
		'search_items'               => __( 'Search Roles', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'people_roles', array( 'people' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'register_people_taxonomy', 0 );

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

// Register Custom Taxonomy
function register_work_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Work Categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Work Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Work Categories', 'text_domain' ),
		'all_items'                  => __( 'All Work Categories', 'text_domain' ),
		'parent_item'                => __( 'Parent Work Category', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Work Category:', 'text_domain' ),
		'new_item_name'              => __( 'New Work Category', 'text_domain' ),
		'add_new_item'               => __( 'Add New Work Category', 'text_domain' ),
		'edit_item'                  => __( 'Edit Work Category', 'text_domain' ),
		'update_item'                => __( 'Update Work Category', 'text_domain' ),
		'view_item'                  => __( 'View Work Category', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate roles with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove work categories', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Work Categories', 'text_domain' ),
		'search_items'               => __( 'Search Work Categories', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'work-categories', array( 'work' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'register_work_taxonomy', 0 );

function video_custom_post_type() {

	$labels = array(
		'name'                => _x( 'Videos', 'Post Type General Name', 'pinnacle' ),
		'singular_name'       => _x( 'Video', 'Post Type Singular Name', 'pinnacle' ),
		'menu_name'           => __( 'Videos', 'pinnacle' ),
		'name_admin_bar'      => __( 'Video', 'pinnacle' ),
		'parent_item_colon'   => __( 'Parent Video:', 'pinnacle' ),
		'all_items'           => __( 'All Videos', 'pinnacle' ),
		'add_new_item'        => __( 'Add New Video Item', 'pinnacle' ),
		'add_new'             => __( 'Add New Video', 'pinnacle' ),
		'new_item'            => __( 'New Video', 'pinnacle' ),
		'edit_item'           => __( 'Edit Video', 'pinnacle' ),
		'update_item'         => __( 'Update Video', 'pinnacle' ),
		'view_item'           => __( 'View Video', 'pinnacle' ),
		'search_items'        => __( 'Search Videos', 'pinnacle' ),
		'not_found'           => __( 'Not found', 'pinnacle' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'pinnacle' ),
	);
	$args = array(
		'label'               => __( 'video', 'pinnacle' ),
		'description'         => __( 'Videos', 'pinnacle' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'thumbnail', 'revisions', 'page-attributes', ),
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
	register_post_type( 'video', $args );

}

// Hook into the 'init' action
add_action( 'init', 'video_custom_post_type', 0 );

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

	wp_enqueue_script( 'pinnacle-pictureFill', get_template_directory_uri() . '/js/pictureFill.js', false, filemtime( get_stylesheet_directory().'/js/pictureFill.js' ), true );

	wp_enqueue_script( 'pinnacle-matchHeight', get_template_directory_uri() . '/js/jquery.matchHeight.min.js', false, filemtime( get_stylesheet_directory().'/js/jquery.matchHeight.min.js' ), true );

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
 * Allow SVG uploads
 */
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

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
add_image_size( 'desktop-squared', 1000, 1000, true);
add_image_size( 'tablet-squared', 780, 780, true);
add_image_size( 'mobile-squared', 400, 250, true);

add_image_size( 'retina-work-featured', 2600, 1420, true );
add_image_size( 'desktop-work-featured', 1420, 947, true );
add_image_size( 'tablet-work-featured', 860, 573, true );
add_image_size( 'mobile-work-featured', 400, 350, true );

add_image_size( 'retina-process-wide', 2600, 845, true);
add_image_size( 'desktop-process-wide', 1420, 463, true);
add_image_size( 'tablet-process-wide', 780, 253, true);
add_image_size( 'mobile-process-wide', 400, 350, true);

add_image_size( 'retina-hero', 2600, 1733, false);
add_image_size( 'desktop-hero', 1180, 787, false);
add_image_size( 'tablet-hero', 860, 573, false);
add_image_size( 'mobile-hero', 480, 360, true);

add_image_size( 'retina-home-featured', 2600, 842, false);
add_image_size( 'desktop-home-featured', 1400, 453, false);
add_image_size( 'tablet-home-featured', 780, 253, false);
add_image_size( 'mobile-home-featured', 400, 250, true);


add_filter( 'get_the_archive_title', function ( $title ) {

    if( is_tax() ) {

        $title = single_cat_title( 'Projects in: ', false );

    }

    return $title;

});
