// Change Nav Position for WP Admin Nav
jQuery(document).ready(function () {
  	var target = document.getElementById('wpadminbar');
	if (target == undefined) {
	  } else {
		jQuery(".navbar").css("margin-top","28px");
	}
});

/*
jQuery(document).ready(function () {
  jQuery(".accordion-heading a").mouseover(function() {	
	jQuery('.accordion-heading a').animate({color: '#f2693e' }, 630, "swing");
  }).mouseout(function(){
	 jQuery('.accordion-heading a').animate({color: '#2c2017'}, 800, "swing");
  });
});
*/

// Activate Tooltip
/*
jQuery(document).ready(function () {
	jQuery('#csc').tooltip();
});
*/