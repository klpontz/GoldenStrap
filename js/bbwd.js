// Change Nav Position when WP Admin Nav is present
jQuery(document).ready(function () {
  	var tarOne = document.getElementById('wpadminbar');
	if (tarOne == undefined) {
	} else {
  	  jQuery(".navbar").css("margin-top","28px");
	}
});


// Change Nav Position when the Google Translate nav is present
jQuery(document).ready(function () { 
  jQuery("body").livequery("mousemove" , function(){
    
	var tarOne = jQuery(".goog-te-banner-frame").css("visibility"); 
    var tarTwo = jQuery(".skiptranslate").css("display"); 

	if (tarTwo === "none") {
	  jQuery(".navbar").css("margin-top","0px");
	  return
    }

    if (tarOne === "visible") {
      jQuery(".navbar").css("margin-top","39px");
	  return
    }
  })
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