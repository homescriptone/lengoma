<?php
/**
 * Lengoma functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lengoma
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function lengoma_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Lengoma, use a find and replace
		* to change 'lengoma' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'lengoma', get_template_directory() . '/languages' );

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
			'primary-menu' => esc_html__( 'Primary Menu', 'lengoma' ),
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
			'lengoma_custom_background_args',
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
add_action( 'after_setup_theme', 'lengoma_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lengoma_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lengoma_content_width', 640 );
}
add_action( 'after_setup_theme', 'lengoma_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lengoma_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'lengoma' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'lengoma' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'lengoma_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lengoma_scripts() {
	wp_enqueue_style( 'lengoma-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'lengoma-style', 'rtl', 'replace' );

	wp_enqueue_script( 'lengoma-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'lengoma-flowbite', get_template_directory_uri() . '/assets/js/flowbite.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'lengoma-gallery', get_template_directory_uri() . '/assets/js/gallery.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'lengoma-modal', get_template_directory_uri() . '/assets/js/modal.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'lengoma-swiper', get_template_directory_uri() . '/assets/js/swiper.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'lengoma-shuffle', get_template_directory_uri() . '/assets/js/shuffle.min.js', array( 'lengoma-swiper'), _S_VERSION, true );
	wp_enqueue_script( 'lengoma-app', get_template_directory_uri() . '/assets/js/app.js', array(), _S_VERSION, true );
	
}
add_action( 'wp_enqueue_scripts', 'lengoma_scripts' );

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
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


function lengoma_primary_menu_callback( ) {
	?>
	<div id="menu" class="w-full md:w-auto h-0 transition-all ease-out duration-300 md:transition-none md:flex-grow md:flex md:items-center opacity-0 md:opacity-100">
		<ul id="ulMenu" class="flex flex-col duration-300 ease-out sm:transition-none md:flex-row ml-auto mt-5 md:mt-0" >
			<?php
				wp_page_menu();
			?>
		</ul>
	</div>
	<?php
}


function add_classes_on_li($classes, $item, $args) {
    $classes = array( "menu-ul" );
    return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);


add_filter('nav_menu_item_id', function( $atts ) {
	$atts = "";
	return $atts;
} );


add_filter('nav_menu_link_attributes', function( $atts ) {
	$atts['class'] = "lg:px-6 font-medium font-secondary block text-black/70 hover:text-blue-500 p-3 uppercase text-sm";
	return $atts;	
});


add_filter('nav_menu_submenu_css_class', function( $text ) {
	$text = array('submenu-dropdown');
	return $text;
});