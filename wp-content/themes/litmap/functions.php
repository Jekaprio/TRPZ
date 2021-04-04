<?php
/**
 * litmap functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package litmap
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'litmap_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function litmap_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on litmap, use a find and replace
		 * to change 'litmap' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'litmap', get_template_directory() . '/languages' );

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
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'litmap' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'litmap_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'litmap_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function litmap_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'litmap_content_width', 640 );
}
add_action( 'after_setup_theme', 'litmap_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function litmap_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'litmap' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'litmap' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'litmap_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function litmap_scripts() {
	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap', false );
	wp_enqueue_style( 'litmap-style', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css' ) );
	wp_enqueue_style( 'main-style', get_template_directory_uri().'/styles/main.css', array(), filemtime( get_stylesheet_directory() . '/styles/main.css' ));

	wp_enqueue_script( 'litmap-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	// отменяем зарегистрированный jQuery
	wp_deregister_script('jquery-core');
	wp_deregister_script('jquery');

	// регистрируем
	wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', false, null, true );
	wp_register_script( 'jquery', false, array('jquery-core'), null, true );

	// подключаем
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script('spiderfier', 'https://cdnjs.cloudflare.com/ajax/libs/OverlappingMarkerSpiderfier/1.0.3/oms.min.js', array(), false, true);
	wp_enqueue_script('clusterer', 'https://cdnjs.cloudflare.com/ajax/libs/markerclustererplus/2.1.4/markerclusterer.min.js', array(), false, true);
//	wp_enqueue_style( 'map-style', get_template_directory_uri().'/styles/map-style.css', array(), filemtime( get_stylesheet_directory() . '/styles/map-style.css' ));
	wp_enqueue_script('gmaps-api', 'https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBC9JGXsYy9CK7jzgNAEDmcdmTsVl1ntmY', array(), time(), true);
	wp_enqueue_script('core', get_template_directory_uri() . '/js/core.js', array('jquery'), time(), true);
}
add_action( 'wp_enqueue_scripts', 'litmap_scripts' );

function wp_ajax_data(){
	wp_localize_script( 'core', 'wp_ajax_data',
		array(
			'url' => admin_url('admin-ajax.php')
		)
	);
}
add_action( 'wp_enqueue_scripts', 'wp_ajax_data', 99 );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Remove default post type from admin panel
 */

//The Side Menu
add_action( 'admin_menu', 'remove_default_post_type' );

function remove_default_post_type() {
	remove_menu_page( 'edit.php' );
}

// The +New Post in Admin Bar
add_action( 'admin_bar_menu', 'remove_default_post_type_menu_bar', 999 );

function remove_default_post_type_menu_bar( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'new-post' );
}

// The Quick Draft Dashboard Widget
add_action( 'wp_dashboard_setup', 'remove_draft_widget', 999 );

function remove_draft_widget(){
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
}

/**
 * Remove default menus
 */
function remove_default_menus() {
	remove_menu_page( 'edit.php' );                   //Posts
	remove_menu_page( 'edit-comments.php' );          //Comments
}
add_action('admin_menu','remove_default_menus');

function my_acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyBC9JGXsYy9CK7jzgNAEDmcdmTsVl1ntmY';
	return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

function cache_items( $post_id ) {

	$cached_items = [];

	$items = get_posts([
		'post_type' => 'item'
	]);

	error_log(print_r($items, 1));

	foreach ($items as $item) {
		$meta = get_fields($item->ID);
		$categories = wp_get_post_terms($item->ID, 'item_category');

		if (!empty($meta['pointer']) && !empty($categories) && !is_wp_error($categories)) {
			$cached_items[] = [
				'id' => $item->ID,
				'category' => $categories[0]->slug,
				'coordinates' => [
					'lat' => $meta['pointer']['lat'],
					'lng' => $meta['pointer']['lng'],
				],
				'preview' => [
					'title' => $item->post_title,
					'image_url' => get_the_post_thumbnail_url($item->ID),
					'excerpt' => get_the_excerpt($item->ID),
					'address' => $meta['pointer']['address']
				]
			];
		}
		error_log(print_r($meta, 1));
		error_log(print_r($categories, 1));
	}

	error_log(print_r($cached_items, 1));

	update_option('items', $cached_items, false);
}
add_action('acf/save_post', 'cache_items');
add_action('trashed_post', 'cache_items');

function get_pointers() {
	$pointers = get_option('items');
	wp_send_json_success(['items' => json_encode($pointers)]);
}
add_action( 'wp_ajax_get_pointers', 'get_pointers' );
add_action( 'wp_ajax_nopriv_get_pointers', 'get_pointers' );

function get_item() {
	if (empty($_POST['id'])) {
		wp_send_json_error();
	}

	$id = $_POST['id'];
	$post_data = get_post($id);

	if ($post_data) {
		$category =  wp_get_post_terms($id, 'item_category')[0];
		$popup_title = '';
		$category_color = '';

		if ($category->slug === 'diyachi') {
			$popup_title = 'Біографія діяча';
			$category_color = '#ff9d7b';
		} else if ($category->slug === 'muzeyi') {
			$popup_title = 'Інформація про музей';
			$category_color = '#009688';
		} else if ($category->slug === 'pamyatky') {
			$popup_title = 'Інформація про пам\'ятку';
			$category_color = '#a7d5e0';
		}

		wp_send_json_success([
			'popup_title' => $popup_title,
			'category_color' => $category_color,
			'image_url' => get_the_post_thumbnail_url($id),
			'description' => '<h1>' . $post_data->post_title . '</h1><br>' . $post_data->post_content
		]);
	}

	wp_send_json_error();
}
add_action( 'wp_ajax_get_item', 'get_item' );
add_action( 'wp_ajax_nopriv_get_item', 'get_item' );
