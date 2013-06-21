jQuery(document).ready(function(){
	jQuery('#quick-contact').ajaxForm(function(data) {
		if (data==1){
			jQuery('#success').fadeIn("slow");
			jQuery('#bademail').fadeOut("slow");
			jQuery('#badserver').fadeOut("slow");
			jQuery('#contact').resetForm();
		}
		else if (data==2){
			jQuery('#badserver').fadeIn("slow");
		}
		else if (data==3)
		{
			jQuery('#bademail').fadeIn("slow");
		}
	});
});