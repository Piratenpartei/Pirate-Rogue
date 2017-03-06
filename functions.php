<?php
/*-----------------------------------------------------------------------------------*/
/* Pirate Rogue Theme
 *   Based on Uku Theme by Elmastudio
 */
/*-----------------------------------------------------------------------------------*/


/*-----------------------------------------------------------------------------------*/
/* Sets up theme defaults and registers support for various WordPress features.
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_setup() {

	// Make Uku available for translation. Translations can be added to the /languages/ directory.
	load_theme_textdomain( 'uku', get_template_directory() . '/languages' );


	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu().
	register_nav_menus( array (
		'primary'	=> esc_html__( 'Main menu', 'uku' ),
		'social' 	=> esc_html__( 'Social Icons', 'uku' ),
		'social-front' 	=> esc_html__( 'Social menu (in About section, Standard and Neo only.)', 'uku' ),
		'footer-one' 	=> esc_html__( 'Footer 1', 'uku' ),
		'footer-two' 	=> esc_html__( 'Footer 2', 'uku' ),
		'footer-three' 	=> esc_html__( 'Footer 3', 'uku' ),
		'footer-four' 	=> esc_html__( 'Footer 4', 'uku' ),
	) );

	// Switch default core markup to output valid HTML5.
	add_theme_support( 'html5', array(
		'gallery',
		'caption',
	) );

	// Implement the Custom Header feature
	require get_template_directory() . '/inc/custom-header.php';

	// This theme allows users to set a custom background.
//	add_theme_support( 'custom-background', apply_filters( 'uku_custom_background_args', array(
//		'default-color'	=> 'fff',
//		'default-image'	=> '',
//	) ) );

	// Enable support for Video Post Formats.
	add_theme_support( 'post-formats', array (
		'video',
	) );

	// Enable support for custom logo.
//	add_theme_support( 'custom-logo', array(
//		'width'       => 520,
//		'height'      => 236,
//	) );
	
	add_theme_support( 'custom-logo', array(
	    'height'      => 236,
	    'width'       => 520,
	    'flex-height' => true,
	    'flex-width'  => true,
	    'header-text' => array( 'site-title', 'site-description' ),
	) );
	
	
	/* Excerpts für Seiten */
	add_post_type_support('page', 'excerpt');    
	
	// This theme uses post thumbnails.
	add_theme_support( 'post-thumbnails' );

	//  Adding several sizes for Post Thumbnails
	add_image_size( 'uku-standard-blog', 1024, 576, true );
	add_image_size( 'uku-featured', 1440, 530, true );
	add_image_size( 'uku-featured-big', 1440, 690, true );
	add_image_size( 'uku-bigthumb', 1440, 580, true );
	add_image_size( 'uku-front-big', 1260, 709, true );
	add_image_size( 'uku-front-small', 800, 450, true );
	add_image_size( 'uku-serif-small', 790, 593, true );

}
add_action( 'after_setup_theme', 'pirate_rogue_setup' );

/*-----------------------------------------------------------------------------------*/
/* Sets up the content width value based on the theme's design.
/*-----------------------------------------------------------------------------------*/
if ( ! isset( $content_width ) ) {
	$content_width = 900;
}

function pirate_rogue_content_width() {
	if ( is_page_template('full-width.php') ) {
		$GLOBALS['content_width'] = 1500;
	}
}
add_action( 'template_redirect', 'pirate_rogue_content_width' );

 /*-----------------------------------------------------------------------------------*/
 /*  JavaScript detection.
 /*  Adds a `js` class to the root `<html>` element when JavaScript is detected.
 /*-----------------------------------------------------------------------------------*/
function pirate_rogue_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'pirate_rogue_javascript_detection', 0 );

/*-----------------------------------------------------------------------------------*/
/*  Enqueue scripts and styles
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_scripts() {
	global $wp_styles;


	// Loads JavaScript to pages with the comment form to support sites with threaded comments (when in use)
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Loads stylesheets.
	wp_enqueue_style( 'uku-style', get_stylesheet_uri(), array(), '20160303' );

	
	// Loads Custom Uku JavaScript functionality
	wp_enqueue_script( 'uku-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160507', true );
	wp_localize_script( 'uku-script', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . esc_html__( 'expand child menu', 'uku' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . esc_html__( 'collapse child menu', 'uku' ) . '</span>',
	) );

	// Loads Scripts for Featured Post Slider
	if ( '' != get_theme_mod( 'uku_featuredtag' ) ) {
		wp_enqueue_style( 'uku-slick-style', get_template_directory_uri() . '/js/slick/slick.css' );
		wp_enqueue_script( 'uku-slick', get_template_directory_uri() . '/js/slick/slick.min.js', array( 'jquery' ) );
	}

	// Loading viewpoint checker script
	wp_enqueue_script( 'viewportchecker', get_template_directory_uri() . '/js/jquery.viewportchecker.min.js', array( 'jquery' ), '1.8.7' );

	// Loads Scripts Sticky Sidebar Element
	wp_enqueue_script( 'sticky-kit', get_template_directory_uri() . '/js/sticky-kit.min.js', array( 'jquery' ) );

	// Loading FitVids responsive Video script
	wp_enqueue_script( 'fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), '1.1' );
	
	// Loading Tablesorter script
	wp_enqueue_script( 'tablesorter', get_template_directory_uri() . '/js/jquery.tablesorter.min.js', array( 'jquery' ), '1.1', true );	

}
add_action( 'wp_enqueue_scripts', 'pirate_rogue_scripts' );


/*-----------------------------------------------------------------------------------*/
/* Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
/*-----------------------------------------------------------------------------------*/
function uku_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'uku_page_menu_args' );

/*-----------------------------------------------------------------------------------*/
/* Sets the authordata global when viewing an author archive.
/*-----------------------------------------------------------------------------------*/
function uku_setup_author() {
	global $wp_query;

	if ( $wp_query->is_author() && isset( $wp_query->post ) ) {
		$GLOBALS['authordata'] = get_userdata( $wp_query->post->post_author );
	}
}
add_action( 'wp', 'uku_setup_author' );

/*-----------------------------------------------------------------------------------*/
/* Add title to custom menu
/*-----------------------------------------------------------------------------------*/
function uku_get_menu_by_location( $location ) {
		if( empty($location) ) return false;

		$locations = get_nav_menu_locations();
		if( ! isset( $locations[$location] ) ) return false;

		$menu_obj = get_term( $locations[$location], 'nav_menu' );

		return $menu_obj;
}

/*-----------------------------------------------------------------------------------*/
/* Add custom max excerpt lengths.
/*-----------------------------------------------------------------------------------*/
function uku_custom_excerpt_length( $length ) {
	return 23;
}
add_filter( 'excerpt_length', 'uku_custom_excerpt_length', 999 );

/*-----------------------------------------------------------------------------------*/
/* Replace "[...]" with custom read more in excerpts.
/*-----------------------------------------------------------------------------------*/
function uku_excerpt_more( $more ) {
	global $post;
	return '&hellip;';
}
add_filter( 'excerpt_more', 'uku_excerpt_more' );

/*-----------------------------------------------------------------------------------*/
/* Featured Slider Function
/*-----------------------------------------------------------------------------------*/
function uku_has_featured_posts( $minimum = 1 ) {
		if ( is_paged() )
				return false;

		$minimum = absint( $minimum );
		$featured_posts = apply_filters( 'uku_get_featured_posts', array() );

		if ( ! is_array( $featured_posts ) )
				return false;

		if ( $minimum > count( $featured_posts ) )
				return false;

		return true;
}

/*-----------------------------------------------------------------------------------*/
/* Add Twitter Username to User Profile
/*-----------------------------------------------------------------------------------*/
function add_twitter_contactmethod( $contactmethods ) {
	// Add Twitter
	if ( !isset( $contactmethods['twitter'] ) )
		$contactmethods['twitter'] = 'Twitter Name';

	return $contactmethods;
}
add_filter( 'user_contactmethods', 'add_twitter_contactmethod', 10, 1 );


/*-----------------------------------------------------------------------------------*/
/* Add Theme Customizer CSS
/*-----------------------------------------------------------------------------------*/
function uku_customize_css() {
	$customcss = '';
	
	
	 if ('' != get_theme_mod( 'uku_front_section_twocolumn_excerpt') ) { 
	    $customcss .= '#front-section-twocolumn .entry-summary {display: block;}'."\n";
	}
	if ('' != get_theme_mod( 'uku_front_section_threecolumn_excerpt' ) ) { 
	    $customcss .= '#front-section-threecolumn .entry-summary {display: block;}'."\n";
	} 
	if ('' != get_theme_mod( 'uku_front_section_fourcolumn_excerpt' ) ) { 
	    $customcss .= '#front-section-fourcolumn .entry-summary {display: block;}'."\n";
	} 
	if ('' != get_theme_mod( 'uku_front_section_sixcolumn_excerpt' ) ) {
	$customcss .= '#front-section-sixcolumn .entry-summary {display: block;}'."\n";
	 } 
	 if ('' != get_theme_mod( 'uku_front_hidedate' ) ) {
	$customcss .= '.blog .entry-date {display: none !important;}'."\n";
	 }
	 if ('' != get_theme_mod( 'uku_front_hidecomments' ) ) { 
	$customcss .= '.blog .entry-comments {display: none !important;}'."\n";
	 } 
	 if ('' != get_theme_mod( 'uku_front_hidecats' ) ) {
	$customcss .= '.blog .entry-cats {display: none !important;}'."\n";
	 } 
         /*
	if (('#000000' != get_theme_mod( 'uku_imgoverlay_color' ) ) && ('' != get_theme_mod( 'uku_imgoverlay_color' ) )) { 
	       $customcss .= '.blog #primary .hentry.has-post-thumbnail:nth-child(4n+1) .entry-thumbnail a:after,';
	       $customcss .= '.featured-slider .entry-thumbnail a:after,';
	       $customcss .= '.uku-serif .featured-slider .entry-thumbnail:after,';
	       $customcss .= '.header-image:after,';
	       $customcss .= '#front-section-four .entry-thumbnail a:after,';
	       $customcss .= '.uku-serif #front-section-four .entry-thumbnail a .thumb-wrap:after,';
	       $customcss .= '.single-post .big-thumb .entry-thumbnail a:after,';
	       $customcss .= '.blog #primary .hentry.has-post-thumbnail:nth-child(4n+1) .thumb-wrap:after,';
	       $customcss .= '.section-two-column-one .thumb-wrap:after,';
	       $customcss .= '.header-fullscreen #headerimg-wrap:after {background-color: '.get_theme_mod('uku_imgoverlay_color').';}'."\n";
	} 
	if ('0' != get_theme_mod( 'uku_imgoverlay_transparency' ) ) { 
	       $customcss .= '.blog #primary .hentry.has-post-thumbnail:nth-child(4n+1) .entry-thumbnail a:after,';
	       $customcss .= '.blog #primary .hentry.has-post-thumbnail:nth-child(4n+1) .thumb-wrap:after,';
	       $customcss .= '.section-two-column-one .thumb-wrap:after,';
	       $customcss .= '.featured-slider .entry-thumbnail a:after,';
	       $customcss .= '.uku-serif .featured-slider .entry-thumbnail:after,';
	       $customcss .= '.header-image:after,';
	       $customcss .= '.uku-serif .section-two-column-one .entry-thumbnail a:after,';
	       $customcss .= '#front-section-four .entry-thumbnail a:after,';
	       $customcss .= '.uku-serif #front-section-four .entry-thumbnail a .thumb-wrap:after,';
	       $customcss .= '.single-post .big-thumb .entry-thumbnail a:after,';
	       $customcss .= '.header-fullscreen #headerimg-wrap:after {opacity: '.get_theme_mod('uku_imgoverlay_transparency').';}'."\n";
	} 
	if ('0' == get_theme_mod( 'uku_imgoverlay_transparency' ) ) { 
	       $customcss .= '.header-fullscreen #headerimg-wrap:after {background-color: transparent;}'."\n";
	} 
        */
         
	/* if ('0.7' != get_theme_mod( 'uku_imggradient' ) ) { 
	       $customcss .= '#front-section-four .meta-main-wrap,';
	       $customcss .= '.featured-slider .meta-main-wrap,';
	       $customcss .= '.blog #primary .hentry.has-post-thumbnail:nth-child(4n+1) .meta-main-wrap,';
	       $customcss .= '.uku-serif .section-two-column-one .entry-text-wrap,';
	       $customcss .= '.big-thumb .title-wrap {';
	       $customcss .= 'background: -moz-linear-gradient(top, rgba(0,0,0,0) 0%, rgba(0,0,0,'.get_theme_mod('uku_imggradient').') 100%);';
	       $customcss .= 'background: -webkit-linear-gradient(top, rgba(0,0,0,0) 0%,rgba(0,0,0,'.get_theme_mod('uku_imggradient').') 100%);';
	       $customcss .= 'background: linear-gradient(to bottom, rgba(0,0,0,0) 0%,rgba(0,0,0,'.get_theme_mod('uku_imggradient').') 100%);';
	       $customcss .= '}'."\n";
	} 
        */
        
	if ('' != get_theme_mod( 'uku_custom_css' ) ) {
	   $customcss .=  get_theme_mod('uku_custom_css'); 
	} 
	if (!empty($customcss)) {
	    echo '<style type="text/css">';
	    echo $customcss;
	    echo '</style>'."\n";
	}
}
add_action( 'wp_head', 'uku_customize_css');

/*-----------------------------------------------------------------------------------*/
/* Remove inline styles printed when the gallery shortcode is used.
/*-----------------------------------------------------------------------------------*/
add_filter('use_default_gallery_style', '__return_false');

if ( ! function_exists( 'uku_comment' ) ) :

/*-----------------------------------------------------------------------------------*/
/* Comments template uku_comment
/*-----------------------------------------------------------------------------------*/
function uku_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>

	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>" class="comment">
			<div class="comment-avatar">
				<?php echo get_avatar( $comment, 140 ); ?>
			</div>

			<div class="comment-wrap">
				<div class="comment-details">
					<div class="comment-author">

						<?php printf( ( '%s' ), wp_kses_post( sprintf( '%s', get_comment_author_link() ) ) ); ?>
					</div><!-- end .comment-author -->
					<div class="comment-meta">
						<span class="comment-time"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
							<?php
							/* translators: 1: date */
								printf( esc_html__( '%1$s', 'uku' ),
								get_comment_date());
							?></a>
						</span>
						<?php edit_comment_link( esc_html__(' Edit', 'uku'), '<span class="comment-edit">', '</span>'); ?>
					</div><!-- end .comment-meta -->
				</div><!-- end .comment-details -->

				<div class="comment-text">
				<?php comment_text(); ?>
					<?php if ( $comment->comment_approved == '0' ) : ?>
						<p class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'uku' ); ?></p>
					<?php endif; ?>
				</div><!-- end .comment-text -->
				<?php if ( comments_open () ) : ?>
					<div class="comment-reply"><?php comment_reply_link( array_merge( $args, array( 'reply_text' => esc_html__( 'Reply', 'uku' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></div>
				<?php endif; ?>
			</div><!-- end .comment-wrap -->
		</div><!-- end .comment -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="pingback">
		<p><?php esc_html_e( 'Pingback:', 'uku' ); ?> <?php comment_author_link(); ?></p>
		<p class="pingback-edit"><?php edit_comment_link(); ?></p>
	<?php
			break;
	endswitch;
}
endif;

/*-----------------------------------------------------------------------------------*/
/* Register widgetized areas
/*-----------------------------------------------------------------------------------*/
function uku_widgets_init() {

	register_sidebar( array (
		'name'          => esc_html__( 'Blog Sidebar', 'uku' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Widgets appear in the default sidebar.', 'uku' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => "</section>",
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array (
		'name'          => esc_html__( 'Page Sidebar', 'uku' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Widgets appear in the sidebar on pages.', 'uku' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => "</section>",
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array (
		'name'          => esc_html__( 'Off Canvas Widget Area', 'uku' ),
		'id'            => 'sidebar-offcanvas',
		'description'   => esc_html__( 'Widgets appear in the off canvas area.', 'uku' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => "</section>",
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array (
		'name'          => esc_html__( 'Big Footer Instagram Widget Area', 'uku' ),
		'id'            => 'sidebar-instagram',
		'description'   => esc_html__( 'Widget area to show the WP Instagram Widget in a big one-column footer area .', 'uku' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => "</section>",
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	if ( 'serif' == get_theme_mod( 'uku_main_design' ) ) {
		register_sidebar( array (
			'name'          => esc_html__( 'Big Footer Mailchimp Widget Area', 'uku' ),
			'id'            => 'sidebar-newsletter',
			'description'   => esc_html__( 'Widget area to show the Mailchimp Newsletter Widget in a big one-column footer area .', 'uku' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => "</section>",
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}

}
add_action( 'widgets_init', 'uku_widgets_init' );

/*-----------------------------------------------------------------------------------*/
/* Admin Init functions
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_admin_init() {
	remove_post_type_support( 'page', 'comments' );
        // Keine Kommentar/Dkussionsmetabox auf Seiten
}
add_action('admin_init', 'pirate_rogue_admin_init'); 

/*-----------------------------------------------------------------------------------*/
/* Admin Styles
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_admin_style() {
 
    
	// This theme styles the visual editor to resemble the theme style.
    add_editor_style( array( '/css/editor-style.css') );
    
    // wp_register_style( 'themeadminstyle', '/css/editor-style.css');
    // wp_enqueue_style( 'themeadminstyle' );
    wp_enqueue_media();
}
add_action( 'admin_enqueue_scripts', 'pirate_rogue_admin_style' );


/*-----------------------------------------------------------------------------------*/
/* Load helper functions
/*-----------------------------------------------------------------------------------*/
require_once( get_template_directory() . '/inc/helper-functions.php' );   
/*-----------------------------------------------------------------------------------*/
/* Custom Fields and metaboxes belonging to them
/*-----------------------------------------------------------------------------------*/
require get_template_directory() . '/inc/custom-fields.php';

/*-----------------------------------------------------------------------------------*/
/* Customizer changes to uku
/*-----------------------------------------------------------------------------------*/
require get_template_directory() . '/inc/customizer.php';

/*-----------------------------------------------------------------------------------*/
/* Additional features to allow styling of the templates.
/*-----------------------------------------------------------------------------------*/
require get_template_directory(). '/inc/template-functions.php' ;

/*-----------------------------------------------------------------------------------*/
/* Custom template tags for this theme.
/*-----------------------------------------------------------------------------------*/
require get_template_directory() . '/inc/template-tags.php';

/*-----------------------------------------------------------------------------------*/
/* Grab the Theme Custom shortcodes.
/*-----------------------------------------------------------------------------------*/
require( get_template_directory() . '/inc/shortcodes.php' );

/*-----------------------------------------------------------------------------------*/
/* Load Jetpack compatibility file.
/*-----------------------------------------------------------------------------------*/
require get_template_directory() . '/inc/jetpack.php';


/*-----------------------------------------------------------------------------------*/
/* This is the end of the code as we know it
/*-----------------------------------------------------------------------------------*/