<?php
require get_template_directory() .'/lib/swimghana-theme.php';
require get_template_directory() .'/lib/nav-walker-class.php';

/**
 * swimghana functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package swimghana
 */

if ( ! defined( 'SWIMGHANA_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'SWIMGHANA_VERSION', '1.0.0' );
}

if ( ! function_exists( 'swimghana_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the afterswimghanaetup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function swimghana_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on swimghana, use a find and replace
		 * to change 'swimghana' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'swimghana', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'swimghana' ),
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
				'swimghana_custom_background_args',
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
		register_my_menu();
	}
endif;
add_action( 'after_setup_theme', 'swimghana_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function swimghana_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'swimghana_content_width', 640 );
}
add_action( 'after_setup_theme', 'swimghana_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function swimghana_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'swimghana' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'swimghana' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'swimghana_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function register_scripts() {
	wp_enqueue_style( 'swimghana-style', get_stylesheet_uri(), array('swimghana-icons'), SWIMGHANA_VERSION );
	wp_enqueue_style( 'swimghana-g-font', 'https://fonts.googleapis.com/css2?family=Baloo+2&family=Lato&display=swap', SWIMGHANA_VERSION );
	wp_enqueue_style( 'swimghana-icons', get_template_directory_uri().'/css/style.css', SWIMGHANA_VERSION );
	wp_style_add_data( 'swimghana-style', 'rtl', 'replace' );

	wp_enqueue_script( 'swimghana-navigation', get_template_directory_uri() . '/js/navigation.js', array(), SWIMGHANA_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'register_scripts' );

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
function register_my_menu() {
	register_nav_menu( 'main-nav', __( 'Primary Menu', 'swimghana' ) );
}
add_filter('nav_menu_css_class','add_nav_menu_class', 1, 3);
function add_nav_menu_class($classes, $item, $args){
	//$classes[] = 'inline-block mr-10';
	if (in_array('menu-item-has-children', $classes) ){
		$classes[] = 'relative';
		
	}
	return $classes;
}