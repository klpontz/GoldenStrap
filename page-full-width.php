<!-- page-full-width -->
<?php
/**
 * Template Name: Full-width Page
 * Description: A full-width template with no sidebar
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

   <div class="container">

			
	  <div class="row content">
	    <?php the_content();?>
	    <?php endwhile; // end of the loop. ?>
		
	  </div><!-- .row content -->
		

<?php get_footer(); ?>