// Create fold effect with radio buttons

//Based on: https://github.com/sy4mil/Options-Framework/issues/184


jQuery(document).ready(function(){

	jQuery('input[type=radio]').change(function() {
	
		if(jQuery('#section-ID_OF_YOUR_IMAGE_RADIO input[value=option1]').is(":checked")){
			jQuery('#section-ID_YOU_WANT_TO_SHOW').slideDown('slow');
		}
		
		else if(jQuery('#section-ID_OF_YOUR_IMAGE_RADIO input[value=option1]').not(":checked")){
			jQuery('#section-ID_YOU_WANT_TO_HIDE').slideUp('slow');
		}
});