    jQuery(document).ready(function(){
		jQuery('.wpm_options').slideUp();
		
		jQuery('.video-h').hover(function() {
			jQuery(this).addClass('pretty-hover');
		}, function() {
			jQuery(this).removeClass('pretty-hover');
		});

		var showHideVideos;
		showHideVideos = jQuery('.wpm_opts form #form-show-local-videos input:radio:checked').val();
		if(showHideVideos == 0) {
			jQuery('.video-h').hide();
		}
		
		 jQuery('.wpm_opts form #form-show-local-videos input:radio').click(function() {
		 	showHideVideos = jQuery('.wpm_opts form #form-show-local-videos input:radio:checked').val();
			if(showHideVideos == 0) {
				jQuery('.video-h').hide();
			} else {
				jQuery('.video-h').show();
			}
		 });
		
  
		jQuery('.wpm_section h3').click(function(){		
			if(jQuery(this).parent().next('.wpm_options').css('display')=='none')
				{	jQuery(this).removeClass('inactive');
					jQuery(this).addClass('active');
					jQuery(this).children('img').removeClass('inactive');
					jQuery(this).children('img').addClass('active');
					
				}
			else
				{	jQuery(this).removeClass('active');
					jQuery(this).addClass('inactive');		
					jQuery(this).children('img').removeClass('active');			
					jQuery(this).children('img').addClass('inactive');
				}
				
			jQuery(this).parent().next('.wpm_options').slideToggle('slow');	
		});
});

function clearvid(whichvid) {
	jQuery(':input','#'+whichvid)
	 .not(':button, :submit, :reset, :hidden')
	 .val('')
	 .removeAttr('checked')
	 .removeAttr('selected');

}