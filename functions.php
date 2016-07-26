<?php
/**
 * pem functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pem
 */

if ( ! function_exists( 'pem_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function pem_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on pem, use a find and replace
	 * to change 'pem' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'pem', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Left', 'pem' ),
		'secondary' => esc_html__( 'Right', 'pem' ),
		'complete' => esc_html__( 'Complete', 'pem' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'pem_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'pem_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pem_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pem_content_width', 640 );
}
add_action( 'after_setup_theme', 'pem_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pem_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Lithium News', 'pem' ),
		'id'            => 'lithium-news',
		'description'   => esc_html__( 'Add widgets here.', 'pem' ),
		'before_widget' => '<section id="%1$s" class="panel-heading widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="panel-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Company News', 'pem' ),
		'id'            => 'company-news',
		'description'   => esc_html__( 'Add widgets here.', 'pem' ),
		'before_widget' => '<section id="%1$s" class="panel-heading widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="panel-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar One', 'pem' ),
		'id'            => 'footer-sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'pem' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar Two', 'pem' ),
		'id'            => 'footer-sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'pem' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar Three', 'pem' ),
		'id'            => 'footer-sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'pem' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'pem_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pem_scripts() {
	
	wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style( 'pem-style', get_stylesheet_uri() );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/animate-css/animate.min.css');
	wp_enqueue_style( 'jpreloader', get_template_directory_uri() . '/assets/jpreloader/css/jpreloader.css');
	wp_enqueue_style( 'magnificPopup', get_template_directory_uri() . '/assets/magnificPopup/magnific-popup.css');
	
	wp_enqueue_style( 'main', get_template_directory_uri() . '/static/dist/css/main.css');
	
	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), '20151215', true );
		
	wp_enqueue_script( 'main', get_template_directory_uri() . '/static/dist/js/app.min.js', array('jquery'), '20151215', true );
	
	if(is_page('management-advisors') || is_page('board-of-directors')):
		wp_enqueue_script( 'sticky', get_template_directory_uri() . '/assets/js/sticky.js', array('jquery'), '20151215', true );
	endif;

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pem_scripts' );


/**
 * Add SVG capabilities
 */
function wpcontent_svg_mime_type( $mimes = array() ) {
  $mimes['svg']  = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'wpcontent_svg_mime_type' );

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
    return sprintf( '<a class="read-more btn btn-link" role="button" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( '<b>READ MORE</b> <span class="glyphicon glyphicon-menu-right"></span>', 'pem' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
 * Output a list of posts under a heading
 *
 * @param string $title The title to output in the list heading
 * @param array $args   The arguments for getting the required posts
 */
function my_post_list($title = 'You may also like to read:', $args = array()){

    $defaults = array(  // Set some defaults for querying the Posts
        'ignore_sticky_posts'   => true,
        'posts_per_page'        => 1,
        'post_status'           => 'publish',
        'orderby'               => 'rand'
    );
    $args = wp_parse_args($args, $defaults);    // Parse any arguments passed to this function with the defaults to create a final '$args' array

    $random = new WP_Query($args);  // Query the Posts

    if($random->have_posts()) : // Check to make sure some random Posts were returned

        echo '<h4>' . $title . '</h4>';
        echo '<ul>';

        while($random->have_posts()) : $random->the_post(); // Create a new custom Loop, and for each Post set up the postdata

            printf('<li id="random-post-%1$s">', get_the_ID());

            printf(
                '<a href="%1$s" title="%2$s">%3$s</a>',
                get_permalink(get_the_ID()),
                the_title_attribute('before=Check out \'&after=\'&echo=0'),
                get_the_title()
            );

            echo '</li>';

        endwhile;
        wp_reset_postdata();    // Reset the postdata so that the rest of your Loop will work correctly

        echo '</ul>';

    endif;
}