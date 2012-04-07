<?php
/**
 * Default Footer
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: March 10, 2012
 */
?>

    </div> <!-- /container -->
      <footer class="foot">
		<div class="container">
		  <div class="row">
		    <div class="span4">
  			 <address>
				<strong>San Francisco Institute of English</strong><br>
				3301 Balboa St.<br>
				San Francisco, CA 94121<br>
				Phone: (415) 750-1755<br>
				Fax: (415) 750-9939<br>
				Email:  info@sfie.net</a>
		     </address>
		   </div><!-- span -->
		   <div class="span1 offset4">
		     <a href="http://www.facebook.com/pages/San-Francisco-Institute-of-English/314325297056" target="_blank"><img class="socicon" src="wp-content/themes/goldenstrap/img/facebook.png" width="64px" height="64px" alt="Facebook Icon"></img></a>
		   </div><!-- span -->
		   <div class="span3">
		     <a class="btn applyBtn">Apply Now</a>
		   </div><!-- span -->
	     </div><!-- row -->
	
		 <div class="row">
		   <div class="span11">
		     <p>&#169; San Francisco Institute of English | Designed by BBWD</p>
		   </div>
		   <div class="span2">
 			 <a id="login" href="/sfie/wp-login.php">Login</a>
		   </div>
		  </div><!-- row -->
		
	  </footer>
	</div><!-- container -->	
	
<?php wp_footer(); ?> 
<script type="text/javascript">
// Adding the class "dropdown" to li elements with submenus  //	
jQuery(document).ready(function(){
jQuery("ul.sub-menu").parent().addClass("dropdown");
jQuery("ul#main-menu li.dropdown a").addClass("dropdown-toggle");
jQuery("ul.sub-menu li a").removeClass("dropdown-toggle"); 
jQuery('.navbar-fixed-top .dropdown-toggle').append('<b class="caret"></b>');
  });
</script>
<script type="text/javascript">
jQuery(document).ready(function(){
 // Don't FORGET: replace all $ with jQuery to prevent conflicts //
jQuery('a.dropdown-toggle')
.attr('data-toggle', 'dropdown');
  });
</script>
  </body>
</html>