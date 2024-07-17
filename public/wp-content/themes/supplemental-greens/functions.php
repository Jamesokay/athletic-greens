<?php

/**
 * supplemental-greens functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package supplemental-greens
 */

function theme_enqueue_styles()
{
	wp_enqueue_style('tailwind-style', get_template_directory_uri() . '/output.css', array(), '1.0');
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function supplemental_greens_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on supplemental-greens, use a find and replace
		* to change 'supplemental-greens' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('supplemental-greens', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'supplemental-greens'),
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
			'supplemental_greens_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'supplemental_greens_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function supplemental_greens_content_width()
{
	$GLOBALS['content_width'] = apply_filters('supplemental_greens_content_width', 640);
}
add_action('after_setup_theme', 'supplemental_greens_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function supplemental_greens_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'supplemental-greens'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'supplemental-greens'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'supplemental_greens_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function supplemental_greens_scripts()
{
	// Preconnect to Google Fonts
	echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
	echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';

	// Preload Google Fonts with specific weights
	echo '<link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">';
	echo '<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"></noscript>';

	// Enqueue main stylesheet
	wp_enqueue_style('supplemental-greens-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('supplemental-greens-style', 'rtl', 'replace');

	// Enqueue navigation script
	wp_enqueue_script('supplemental-greens-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	// Enqueue custom JavaScript file
	wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), null, true);

	// Conditionally enqueue header scroll script for the home page
	if (is_front_page()) {
		wp_enqueue_script('header-scroll-js', get_template_directory_uri() . '/js/header-scroll.js', array(), null, true);
	}

	// Enqueue comment-reply script if needed
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'supplemental_greens_scripts');

// Inline critical CSS
function inline_critical_css()
{
?>
	<style>
		/* Critical font-face declarations */
		@font-face {
			font-family: 'Inter';
			font-style: normal;
			font-weight: 100 900;
			src: url('https://fonts.gstatic.com/s/inter/v7/UcCO3FwrP2-UFU8k7N7Ih7DqK-E5vU0.woff2') format('woff2');
			font-display: swap;
		}

		/* Other critical styles */
		body {
			font-family: 'Inter', sans-serif;
		}
	</style>
<?php
}
add_action('wp_head', 'inline_critical_css', 1);





// Function to include SVG files
function include_svg($filename)
{
	$svg_path = get_template_directory() . '/assets/images/' . $filename;

	if (file_exists($svg_path)) {
		include $svg_path;
	} else {
		echo '<!-- SVG file not found: ' . esc_html($filename) . ' -->';
	}
}

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
