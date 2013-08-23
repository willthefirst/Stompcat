<?php



if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }

define('CFCT_PATH', trailingslashit(TEMPLATEPATH));

/**
 * Set this to "true" to turn on debugging mode.
 * Helps with development by showing the paths of the files loaded by Carrington.
 */
define('CFCT_DEBUG', false);

/**
 * Theme version.
 */
define('CFCT_THEME_VERSION', '0.1');

/**
 * Theme URL version.
 * Added to query var at the end of assets to force browser cache to reload after upgrade.
 */
if (!(defined('CFCT_URL_VERSION'))) {
	define('CFCT_URL_VERSION', '0.1');
}

/**
 * Includes
 */
include_once(CFCT_PATH.'carrington-core/carrington.php');

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if (! isset($content_width)) {
	$content_width = 940;
}


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as
 * indicating support post thumbnails.
 */
if (! function_exists('cfct_theme_setup')) {
	function cfct_theme_setup() {
		/**
		 * Make theme available for translation
		 * Use find and replace to change 'carrington-blueprint' to the name of your theme.
		 */
		load_theme_textdomain('carrington-blueprint');

		/**
		 * Add default posts and comments RSS feed links to head.
		 */
		add_theme_support('automatic-feed-links');

		/**
		 * Enable post thumbnails support.
		 */
		add_theme_support('post-thumbnails');

		/**
		 * New image sizes that are not overwrote in the admin.
		 */
		// add_image_size('thumb-img', 160, 120, true);
		// add_image_size('medium-img', 510, 510, false);
		// add_image_size('large-img', 710, 700, false);

		/**
		 * Add navigation menus
		 */
		register_nav_menus(array(
			'main' => 'Main Navigation',
			'footer' => 'Footer Navigation'
		));

		/**
		 * Add post formats
		 */
		// add_theme_support( 'post-formats', array('image', 'link', 'gallery', 'quote', 'status', 'video'));
	}
}
add_action('after_setup_theme', 'cfct_theme_setup');

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function cfct_widgets_init() {
	// Sidebar Defaults
	$sidebar_defaults = array(
		'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>'
	);
	// Copy the following code and replace values to create more widget areas
	register_sidebar(array_merge($sidebar_defaults, array(
		'id' => 'sidebar-default',
		'name' => __('Default Sidebar', 'carrington-blueprint'),
	)));
}
add_action( 'widgets_init', 'cfct_widgets_init' );

/**
 * Enqueue's scripts and styles
 */

/* 	First, jQuery (http://css-tricks.com/snippets/wordpress/include-jquery-in-wordpress-theme/)  -------------------------------------------- */

function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);

/* 	Then, our own  -------------------------------------------- */

function cfct_load_assets() {
	//Variable for assets url
	$cfct_assets_url = get_template_directory_uri() . '/assets-helium/';

	// Styles
	wp_enqueue_style('styles', $cfct_assets_url . 'css/style.css', array(), CFCT_URL_VERSION);

	// Scripts
	wp_enqueue_script('script', $cfct_assets_url . 'js/script.js', array('jquery'), CFCT_URL_VERSION);
}
add_action('wp_enqueue_scripts', 'cfct_load_assets');

