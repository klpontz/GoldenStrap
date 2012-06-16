<?php
/**
 *
 * Default Page Header
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: March 28, 2012
 */
get_header(); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
   <title><?php wp_title(''); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="wp-content/themes/goldenstrap/img/favicon.ico">

  <!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>  data-spy="scroll" data-target=".subnav" data-offset="50" onload="prettyPrint()">
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
           <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>

          <?php wp_nav_menu( array( 'menu' => 'main-menu', 'container_class' => 'nav-collapse', 'menu_class' => 'nav', 'menu_id' => 'main-menu') ); ?>
		</div>
      </div>
	  	<a id="nav_application" class="btn btn-info" href="http://localhost/sfie/?page_id=130">Application</a>
    </div>
	