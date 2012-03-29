<!-- page-simple -->
<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Simple Page
 *
 * Page template with minimal formatting, a fixed 940px container and right sidebar layout
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 1.0
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="container">
    
	<header class="jumbotron subhead" id="overview">
      <h1><?php the_title();?></h1>
    </header>
    
	<div class="row content">
	<?php get_sidebar(); ?>
	
      <div class="span8">
        <?php the_content();?>
        <?php endwhile; // end of the loop. ?>
      </div><!-- .span8 -->          

	</div><!-- row content -->
	
<?php get_footer(); ?>