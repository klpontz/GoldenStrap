<!-- contact page -->
<?php
/**
 * Template Name: contact page
 * Description: A full-width template with no sidebar
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<div class="container">
    
	<header class="jumbotron subhead" id="overview">
      <h1><?php the_title();?></h1>
    </header>
    
	<div class="content well">
	 
        <?php the_content();?>
        <?php endwhile; // end of the loop. ?>

	</div><!-- content -->
	
<?php get_footer(); ?>