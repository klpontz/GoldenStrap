<?php
/**
 * Bootstrap functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 * 
 * Last Updated: March 4, 2012
 */

 /**
 * Declaring the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
  $content_width = 770; /* pixels */

/**
 * Declaring the theme language domain
 */
load_theme_textdomain('bootstrapwp'); 

################################################################################
// Loading All CSS Stylesheets
################################################################################
  function bootstrapwp_css_loader() {
    wp_enqueue_style('docs', get_template_directory_uri().'/css/docs.css', false ,'1.0', 'all' );
    wp_enqueue_style('prettify', get_template_directory_uri().'/css/prettify.css', false ,'1.0', 'all' );
    wp_enqueue_style('lavish', get_template_directory_uri().'/css/lavish.css', false ,'1.0', 'all' );
    wp_enqueue_style('datepicker', get_template_directory_uri().'/css/datepicker.css', false ,'1.0', 'all' );	
    wp_enqueue_style('bbwdstyle', get_template_directory_uri().'/css/bbwdstyle.css', false ,'1.0', 'all' );
    wp_enqueue_style('responsive', get_template_directory_uri().'/css/bootstrap-responsive.css', false, '1.0', 'all' );
  }     
add_action('wp_enqueue_scripts', 'bootstrapwp_css_loader');


################################################################################
// Loading all JS Script Files.  Remove any files you are not using!
################################################################################
  function bootstrapwp_js_loader() {
    wp_enqueue_script('prettify', get_template_directory_uri().'/js/prettify.js', array('jquery'),'1.0', true );
	wp_enqueue_script('transition', get_template_directory_uri().'/js/bootstrap-transition.js', array('jquery'),'1.0', true );
	wp_enqueue_script('alert', get_template_directory_uri().'/js/bootstrap-alert.js', array('jquery'),'1.0', true );
	wp_enqueue_script('modal', get_template_directory_uri().'/js/bootstrap-modal.js', array('jquery'),'1.0', true );
	wp_enqueue_script('dropdown', get_template_directory_uri().'/js/bootstrap-dropdown.js', array('jquery'),'1.0', true );
	wp_enqueue_script('scrollspy', get_template_directory_uri().'/js/bootstrap-scrollspy.js', array('jquery'),'1.0', true );
	wp_enqueue_script('tab', get_template_directory_uri().'/js/bootstrap-tab.js', array('jquery'),'1.0', true );
	wp_enqueue_script('tooltip', get_template_directory_uri().'/js/bootstrap-tooltip.js', array('jquery'),'1.0', true );
	wp_enqueue_script('popover', get_template_directory_uri().'/js/bootstrap-popover.js', array('tooltip'),'1.0', true );
	wp_enqueue_script('button', get_template_directory_uri().'/js/bootstrap-button.js', array('jquery'),'1.0', true );
	wp_enqueue_script('collapse', get_template_directory_uri().'/js/bootstrap-collapse.js', array('jquery'),'1.0', true );        
	wp_enqueue_script('carousel', get_template_directory_uri().'/js/bootstrap-carousel.js', array('jquery'),'1.0', true );    
	wp_enqueue_script('typeahead', get_template_directory_uri().'/js/bootstrap-typeahead.js', array('jquery'),'1.0', true );
	wp_enqueue_script('datepicker', get_template_directory_uri().'/js/bootstrap-datepicker.js', array('jquery'),'1.0', true );	
	wp_enqueue_script('application', get_template_directory_uri().'/js/application.js', array('tooltip'),'1.0', true );
	wp_enqueue_script('rollover', get_template_directory_uri().'/js/rollover.js', array('tooltip'),'1.0', true );
	wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.js', array('jquery'),'1.0', true );
	wp_enqueue_script('animate-color', get_template_directory_uri().'/js/animate-color.js', array('jquery'),'1.0', true );	
	wp_enqueue_script('bbwd', get_template_directory_uri().'/js/bbwd.js', array('jquery'),'1.0', true );	
  }
add_action('wp_enqueue_scripts', 'bootstrapwp_js_loader');


################################################################################
// Registering Top Navigation Bar
################################################################################
if ( function_exists( 'register_nav_menu' ) ) {
register_nav_menu( 'main-menu', 'Main Menu' );
}


/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 */
function bootstrapwp_page_menu_args( $args ) {
  $args['show_home'] = true;
  return $args;
}
add_filter( 'wp_page_menu_args', 'bootstrapwp_page_menu_args' );


################################################################################
// Registering Widget Sections
################################################################################

function bootstrapwp_widgets_init() {
  register_sidebar( array(
    'name' => 'Page Sidebar',
    'id' => 'sidebar-page',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
  ) );

  register_sidebar( array(
    'name' => 'Posts Sidebar',
    'id' => 'sidebar-posts',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>',
  ) );

  register_sidebar(array(
    'name' => 'Home Left',
    'id'   => 'home-left',
    'description'   => 'Left textbox on homepage',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ));

    register_sidebar(array(
    'name' => 'Home Middle',
    'id'   => 'home-middle',
    'description'   => 'Middle textbox on homepage',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ));

    register_sidebar(array(
    'name' => 'Home Right',
    'id'   => 'home-right',
    'description'   => 'Right textbox on homepage',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ));

    register_sidebar(array(
    'name' => 'Footer Content',
    'id'   => 'footer-content',
    'description'   => 'Footer text or acknowledgements',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));
}
add_action( 'init', 'bootstrapwp_widgets_init' );



function bootstrapwp_theme_setup() {
	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Add support for the Aside and Gallery Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'gallery' ) );
}
add_action( 'after_setup_theme', 'bootstrapwp_theme_setup' );

################################################################################
// Setting Image Sizes
################################################################################
if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 160, 120 ); // 160 pixels wide by 120 pixels high   
}

if ( function_exists( 'add_image_size' ) ) { 
  add_image_size( 'bootstrap-small', 260, 180 ); // 260 pixels wide by 180 pixels high
  add_image_size( 'bootstrap-medium', 360, 268 ); // 360 pixels wide by 268 pixels high
}

/**
 * Customize the excerpt with a filter to change the end to contain ...Continue Reading link
 */
function bootstrapwp_excerpt($more) {
       global $post;
  return '&nbsp; &nbsp;<a href="'. get_permalink($post->ID) . '">...Continue Reading</a>';
}
add_filter('excerpt_more', 'bootstrapwp_excerpt');



if ( ! function_exists( 'bootstrapwp_content_nav' ) ):
/**
 * Display navigation to next/previous pages when applicable
 */
function bootstrapwp_content_nav( $nav_id ) {
	global $wp_query;

	?>

	<?php if ( is_single() ) : // navigation links for single posts ?>
<ul class="pager">
		<?php previous_post_link( '<li class="previous">%link</li>', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'bootstrapwp' ) . '</span> %title' ); ?>
		<?php next_post_link( '<li class="next">%link</li>', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'bootstrapwp' ) . '</span>' ); ?>
</ul>
	<?php elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) : // navigation links for home, archive, and search pages ?>
<ul class="pager">
		<?php if ( get_next_posts_link() ) : ?>
		<li class="next"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'bootstrapwp' ) ); ?></li>
		<?php endif; ?>

		<?php if ( get_previous_posts_link() ) : ?>
		<li class="previous"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'bootstrapwp' ) ); ?></li>
		<?php endif; ?>
</ul>
	<?php endif; ?>

	<?php
}
endif; // bootstrapwp_content_nav


if ( ! function_exists( 'bootstrapwp_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own bootstrap_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since WP-Bootstrap .5
 */
function bootstrapwp_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'bootstrap' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'bootstrap' ), ' ' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<footer>
				<div class="comment-author vcard">
					<?php echo get_avatar( $comment, 40 ); ?>
					<?php printf( __( '%s <span class="says">says:</span>', 'bootstrap' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
				</div><!-- .comment-author .vcard -->
				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em><?php _e( 'Your comment is awaiting moderation.', 'bootstrap' ); ?></em>
					<br />
				<?php endif; ?>

				<div class="comment-meta commentmetadata">
					<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><time pubdate datetime="<?php comment_time( 'c' ); ?>">
					<?php
						/* translators: 1: date, 2: time */
						printf( __( '%1$s at %2$s', 'bootstrap' ), get_comment_date(), get_comment_time() ); ?>
					</time></a>
					<?php edit_comment_link( __( '(Edit)', 'bootstrap' ), ' ' );
					?>
				</div><!-- .comment-meta .commentmetadata -->
			</footer>

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif; // ends check for bootstrapwp_comment()

if ( ! function_exists( 'bootstrapwp_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 * Create your own bootstrap_posted_on to override in a child theme
 * 
 * @since WP-Bootstrap .5
 */
function bootstrapwp_posted_on() {
	printf( __( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a><span class="byline"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'bootstrap' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'bootstrap' ), get_the_author() ) ),
		esc_html( get_the_author() )
	);
}
endif;

/**
 * Adds custom classes to the array of body classes.
 *
 * @since WP-Bootstrap .5
 */
function bootstrapwp_body_classes( $classes ) {
	// Adds a class of single-author to blogs with only 1 published author
	if ( ! is_multi_author() ) {
		$classes[] = 'single-author';
	}

	return $classes;
}
add_filter( 'body_class', 'bootstrapwp_body_classes' );

/**
 * Returns true if a blog has more than 1 category
 *
 * @since WP-Bootstrap .5
 */
function bootstrapwp_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'all_the_cool_cats' ) ) ) {
		// Create an array of all the categories that are attached to posts
		$all_the_cool_cats = get_categories( array(
			'hide_empty' => 1,
		) );

		// Count the number of categories that are attached to the posts
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'all_the_cool_cats', $all_the_cool_cats );
	}

	if ( '1' != $all_the_cool_cats ) {
		// This blog has more than 1 category so bootstrap_categorized_blog should return true
		return true;
	} else {
		// This blog has only 1 category so bootstrap_categorized_blog should return false
		return false;
	}
}

/**
 * Flush out the transients used in bootstrapwp_categorized_blog
 *
 * @since bootstrap 1.2
 */
function bootstrapwp_category_transient_flusher() {
  // Like, beat it. Dig?
  delete_transient( 'all_the_cool_cats' );
}
add_action( 'edit_category', 'bootstrapwp_category_transient_flusher' );
add_action( 'save_post', 'bootstrapwp_category_transient_flusher' );

/**
 * Filter in a link to a content ID attribute for the next/previous image links on image attachment pages
 */
function bootstrapwp_enhanced_image_navigation( $url ) {
	global $post;

	if ( wp_attachment_is_image( $post->ID ) )
		$url = $url . '#main';

	return $url;
}
add_filter( 'attachment_link', 'bootstrapwp_enhanced_image_navigation' );

################################################################################
// Grabbing the First Image in Posts
################################################################################

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  $new_img_tag = "";

  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image with 0 width
  $new_img_tag = "<img src='/images/noimage.jpg' width='0px' class='alignright' />";
  }

  else{
  $new_img_tag = "<img src='" .  $first_img . "' width='160px' height='120px' class='thumbnail' />";
  }

  return $new_img_tag;
  }

/**
 * Adding Breadcrumbs
 */

 function bootstrapwp_breadcrumbs() {

  $delimiter = '<span class="divider">/</span>';
  $home = 'Home'; // text for the 'Home' link
  $before = '<li class="active">'; // tag before the current crumb
  $after = '</li>'; // tag after the current crumb

  if ( !is_home() && !is_front_page() || is_paged() ) {

    echo '<ul class="breadcrumb">';

    global $post;
    $homeLink = home_url();
    echo '<li><a href="' . $homeLink . '">' . $home . '</a></li> ' . $delimiter . ' ';

    if ( is_category() ) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCat = get_category($thisCat);
      $parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
      echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;

    } elseif ( is_day() ) {
      echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
      echo '<li><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a></li> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;

    } elseif ( is_month() ) {
      echo '<li><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;

    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;

    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<li><a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a></li> ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        echo $before . get_the_title() . $after;
      }

    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;

    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<li><a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li> ' . $delimiter . ' ';
      echo $before . get_the_title() . $after;

    } elseif ( is_page() && !$post->post_parent ) {
      echo $before . get_the_title() . $after;

    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<li><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
      echo $before . get_the_title() . $after;

    } elseif ( is_search() ) {
      echo $before . 'Search results for "' . get_search_query() . '"' . $after;

    } elseif ( is_tag() ) {
      echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;

    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . 'Articles posted by ' . $userdata->display_name . $after;

    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }

    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }

    echo '</ul>';

  }
} // end bootstrapwp_breadcrumbs()


/**
 * This theme was built with PHP, Semantic HTML, CSS, love, and a bootstrap.
 */