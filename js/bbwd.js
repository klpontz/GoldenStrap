// Change Nav Position for WP Admin Nav
jQuery(document).ready(function () {
  	var target = document.getElementById('wpadminbar');
	if (target == undefined) {
	  } else {
		jQuery(".navbar").css("margin-top","28px");
	}
});

// Intialize Datepicker
jQuery(function(){
	window.prettyPrint && prettyPrint();
	jQuery('#dp1').datepicker({
		format: 'mm-dd-yyyy'
	});
	jQuery('#dp2').datepicker();
	jQuery('#dp3').datepicker();
			
			
	var startDate = new Date(2012,1,20);
	var endDate = new Date(2012,1,25);
	jQuery('#dp4').datepicker()
		.on('changeDate', function(ev){
			if (ev.date.valueOf() > endDate.valueOf()){
				jQuery('#alert').show().find('strong').text('The start date can not be greater then the end date');
			} else {
				jQuery('#alert').hide();
				startDate = new Date(ev.date);
				jQuery('#startDate').text(jQuery('#dp4').data('date'));
			}
			jQuery('#dp4').datepicker('hide');
		});
	jQuery('#dp5').datepicker()
		.on('changeDate', function(ev){
			if (ev.date.valueOf() < startDate.valueOf()){
				jQuery('#alert').show().find('strong').text('The end date can not be less then the start date');
			} else {
				jQuery('#alert').hide();
				endDate = new Date(ev.date);
				jQuery('#endDate').text(jQuery('#dp5').data('date'));
			}
			jQuery('#dp5').datepicker('hide');
		});
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