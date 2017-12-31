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

	// Translations
	load_theme_textdomain( 'pirate-rogue', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu().
	register_nav_menus( array (
		'primary'	=> esc_html__( 'Main menu', 'pirate-rogue'),
		'social' 	=> esc_html__( 'Social Icons', 'pirate-rogue'),
		'social-front' 	=> esc_html__( 'Social menu (in About section)', 'pirate-rogue'),
                'social-footer' => esc_html__( 'Social Icons (in Footer)', 'pirate-rogue'),
		'footer-one' 	=> esc_html__( 'Footer 1', 'pirate-rogue'),
		'footer-two' 	=> esc_html__( 'Footer 2', 'pirate-rogue'),
		'footer-three' 	=> esc_html__( 'Footer 3', 'pirate-rogue'),
		'footer-four' 	=> esc_html__( 'Footer 4', 'pirate-rogue'),
	) );

	// Switch default core markup to output valid HTML5.
	add_theme_support( 'html5', array(
		'gallery',
		'caption',
	) );

	// Implement the Custom Header feature
	require get_template_directory() . '/inc/custom-header.php';

	// Enable support for Video Post Formats.
	add_theme_support( 'post-formats', array (
		'video',
	) );

	// Enable support for custom logo.
	add_theme_support( 'custom-logo', array(
	    'height'      => 236,
	    'width'       => 520,
	    'flex-height' => true,
	    'flex-width'  => true,
	) );
	
	
	/* Excerpts für Seiten */
	add_post_type_support('page', 'excerpt');    
	
	// This theme uses post thumbnails.
	add_theme_support( 'post-thumbnails' );

	//  Adding several sizes for Post Thumbnails
	add_image_size( 'pirate-rogue-standard-blog',   1024, 576, true );
	add_image_size( 'pirate-rogue-featured',        1440, 530, true );
	add_image_size( 'pirate-rogue-featured-big',    1440, 690, true );
	add_image_size( 'pirate-rogue-bigthumb',        1440, 580, true );
	add_image_size( 'pirate-rogue-front-big',       1260, 709, true );
        add_image_size( 'pirate-rogue-gallery',          600, 600, true );
	add_image_size( 'pirate-rogue-front-small',      800, 450, true );
	add_image_size( 'pirate-rogue-featured-bottom',  800, 450, true );

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
/* Registre Scripts
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_register_scripts() {
    // Register Slick
    wp_register_script('pirate-rogue-slick', get_template_directory_uri() . '/js/slick/slick-1.8.1.min.js', array('jquery') ); 

    // Misc jQuery Plugins
    wp_register_script( 'pirate-rogue-jquery-misc', get_template_directory_uri() . '/js/jquery.misc.js', array( 'jquery' ), '1.1' );

}
add_action('init', 'pirate_rogue_register_scripts');


/*-----------------------------------------------------------------------------------*/
/*  Enqueue scripts and styles that are beeing used always
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_base_scripts() {
	global $wp_styles;
	// Loads JavaScript to pages with the comment form to support sites with threaded comments (when in use)
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Loads stylesheets.
	wp_enqueue_style( 'pirate-rogue-style', get_stylesheet_uri(), array(), '20171229' );
        
        // Loads Custom JavaScript functionality
        wp_enqueue_script( 'pirate-rogue-script', get_template_directory_uri() . '/js/functions.min.js', array( 'jquery' ), '20171229', true );
        wp_localize_script( 'pirate-rogue-script', 'screenReaderText', array(
                'expand'   => '<span class="screen-reader-text">' . esc_html__( 'expand child menu', 'pirate-rogue') . '</span>',
                'collapse' => '<span class="screen-reader-text">' . esc_html__( 'collapse child menu', 'pirate-rogue') . '</span>',
        ) );
        
        if (is_home() && 
                ( '' != get_theme_mod( 'pirate_rogue_featuredtag' )  || '' != get_theme_mod( 'pirate_rogue_featuredcat' ) )) {
            wp_enqueue_script( 'pirate-rogue-slick' );
        }        
         wp_enqueue_script( 'pirate-rogue-jquery-misc' );

}
add_action( 'wp_enqueue_scripts', 'pirate_rogue_base_scripts' );


/*-----------------------------------------------------------------------------------*/
/* Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'pirate_rogue_page_menu_args' );

/*-----------------------------------------------------------------------------------*/
/* Sets the authordata global when viewing an author archive.
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_setup_author() {
	global $wp_query;

	if ( $wp_query->is_author() && isset( $wp_query->post ) ) {
		$GLOBALS['authordata'] = get_userdata( $wp_query->post->post_author );
	}
}
add_action( 'wp', 'pirate_rogue_setup_author' );

/*-----------------------------------------------------------------------------------*/
/* Add title to custom menu
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_get_menu_by_location( $location ) {
		if( empty($location) ) return false;

		$locations = get_nav_menu_locations();
		if( ! isset( $locations[$location] ) ) return false;

		$menu_obj = get_term( $locations[$location], 'nav_menu' );

		return $menu_obj;
}

/*-----------------------------------------------------------------------------------*/
/* Add custom max excerpt lengths.
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_custom_excerpt_length( $length ) {
	return 23;
}
add_filter( 'excerpt_length', 'pirate_rogue_custom_excerpt_length', 999 );

/*-----------------------------------------------------------------------------------*/
/* Replace "[...]" with custom read more in excerpts.
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_excerpt_more( $more ) {
	global $post;
	return '&hellip;';
}
add_filter( 'excerpt_more', 'pirate_rogue_excerpt_more' );

/*-----------------------------------------------------------------------------------*/
/* Featured Slider Function
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_has_featured_posts( $minimum = 1 ) {
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
function pirate_rogue_customize_css() {
	$customcss = '';
	if ('' != get_theme_mod( 'pirate_rogue_custom_css' ) ) {
	   $customcss .=  get_theme_mod('pirate_rogue_custom_css'); 
	} 
	if (!empty($customcss)) {
	    echo '<style type="text/css">';
	    echo $customcss;
	    echo '</style>'."\n";
	}
}
add_action( 'wp_head', 'pirate_rogue_customize_css');
/*-----------------------------------------------------------------------------------*/
/* Add Google Webmaster Tools Verification
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_google_verification() {
	$customcss = '';
	if ('' != get_theme_mod( 'pirate_rogue_google_wmt_verification_text' ) ) {
	   $verificationcode =  get_theme_mod('pirate_rogue_google_wmt_verification_text'); 
	} 
	if (!empty($verificationcode)) {
	    echo '<meta name="google-site-verification" content="'.$verificationcode.'" />'."\n";
	}
}
add_action( 'wp_head', 'pirate_rogue_google_verification');
/*-----------------------------------------------------------------------------------*/
/* Add Canonical URL if need
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_add_canonical() {
    if (is_single()) {
            
        $canonical = get_post_meta( get_the_ID(), 'pirate_rogue_canonical', true );
        if ($canonical) {
            $canonical = esc_url( $canonical );
            if ($canonical) {
                 echo '<link rel="canonical" href="'.$canonical.'" />'."\n";
            }
        }
    }
}
add_action( 'wp_head', 'pirate_rogue_add_canonical');

/*-----------------------------------------------------------------------------------*/
/* Remove inline styles printed when the gallery shortcode is used.
/*-----------------------------------------------------------------------------------*/
add_filter('use_default_gallery_style', '__return_false');

if ( ! function_exists( 'pirate_rogue_comment' ) ) :

/*-----------------------------------------------------------------------------------*/
/* Comments template pirate_rogue_comment
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_comment( $comment, $args, $depth ) {
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
								printf( esc_html__( '%1$s', 'pirate-rogue'),
								get_comment_date());
							?></a>
						</span>
						<?php edit_comment_link( esc_html__(' Edit', 'pirate-rogue'), '<span class="comment-edit">', '</span>'); ?>
					</div><!-- end .comment-meta -->
				</div><!-- end .comment-details -->

				<div class="comment-text">
				<?php comment_text(); ?>
					<?php if ( $comment->comment_approved == '0' ) : ?>
						<p class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'pirate-rogue'); ?></p>
					<?php endif; ?>
				</div><!-- end .comment-text -->
				<?php if ( comments_open () ) : ?>
					<div class="comment-reply"><?php comment_reply_link( array_merge( $args, array( 'reply_text' => esc_html__( 'Reply', 'pirate-rogue'), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></div>
				<?php endif; ?>
			</div><!-- end .comment-wrap -->
		</div><!-- end .comment -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="pingback">
		<p><?php esc_html_e( 'Pingback:', 'pirate-rogue'); ?> <?php comment_author_link(); ?></p>
		<p class="pingback-edit"><?php edit_comment_link(); ?></p>
	<?php
			break;
	endswitch;
}
endif;
/*-----------------------------------------------------------------------------------*/
/* Remove recent comments default css
/*-----------------------------------------------------------------------------------*/
function remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}
add_action('widgets_init', 'remove_recent_comments_style');
/*-----------------------------------------------------------------------------------*/
/* Register widgetized areas
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_widgets_init() {

	register_sidebar( array (
		'name'          => esc_html__( 'Blog Sidebar', 'pirate-rogue'),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Widgets appear in the default sidebar.', 'pirate-rogue'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => "</section>",
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array (
		'name'          => esc_html__( 'Page Sidebar', 'pirate-rogue'),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Widgets appear in the sidebar on pages.', 'pirate-rogue'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => "</section>",
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array (
		'name'          => esc_html__( 'Off Canvas Widget Area', 'pirate-rogue'),
		'id'            => 'sidebar-offcanvas',
		'description'   => esc_html__( 'Widgets appear in the off canvas area.', 'pirate-rogue'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => "</section>",
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array (
		'name'          => esc_html__( 'Big Footer Instagram Widget Area', 'pirate-rogue'),
		'id'            => 'sidebar-instagram',
		'description'   => esc_html__( 'Widget area to show the WP Instagram Widget in a big one-column footer area .', 'pirate-rogue'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => "</section>",
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	
}
add_action( 'widgets_init', 'pirate_rogue_widgets_init' );

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
    // add_editor_style( array( '/css/admin.css') );
    wp_register_style( 'themeadminstyle', get_template_directory_uri().'/css/admin.css' );	   
    wp_enqueue_style( 'themeadminstyle' );
    wp_enqueue_media();
}
add_action( 'admin_enqueue_scripts', 'pirate_rogue_admin_style' );

/*-----------------------------------------------------------------------------------*/
/* No comments on attachments please
/*-----------------------------------------------------------------------------------*/
function pirate_rogue_filter_media_comment_status( $open, $post_id ) {
    $post = get_post( $post_id );
    if( $post->post_type == 'attachment' ) {
        return false;
    }
    return $open;
}
add_filter( 'comments_open', 'pirate_rogue_filter_media_comment_status', 10 , 2 );

/*-----------------------------------------------------------------------------------*/
/* Load defaults
/*-----------------------------------------------------------------------------------*/
require_once( get_template_directory() . '/inc/defaults.php' );   
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
/* Load Plugin Specials
/*-----------------------------------------------------------------------------------*/
require get_template_directory() . '/inc/pluginsupport.php';

/*-----------------------------------------------------------------------------------*/
/* Load Jetpack compatibility file.
/*-----------------------------------------------------------------------------------*/
require get_template_directory() . '/inc/jetpack.php';


/*-----------------------------------------------------------------------------------*/
/* This is the end of the code as we know it
/*-----------------------------------------------------------------------------------*/