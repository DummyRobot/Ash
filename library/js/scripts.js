/* imgsizer (flexible images for fluid sites) */
var imgSizer={Config:{imgCache:[],spacer:"/path/to/your/spacer.gif"},collate:function(aScope){var isOldIE=(document.all&&!window.opera&&!window.XDomainRequest)?1:0;if(isOldIE&&document.getElementsByTagName){var c=imgSizer;var imgCache=c.Config.imgCache;var images=(aScope&&aScope.length)?aScope:document.getElementsByTagName("img");for(var i=0;i<images.length;i++){images[i].origWidth=images[i].offsetWidth;images[i].origHeight=images[i].offsetHeight;imgCache.push(images[i]);c.ieAlpha(images[i]);images[i].style.width="100%";}
if(imgCache.length){c.resize(function(){for(var i=0;i<imgCache.length;i++){var ratio=(imgCache[i].offsetWidth/imgCache[i].origWidth);imgCache[i].style.height=(imgCache[i].origHeight*ratio)+"px";}});}}},ieAlpha:function(img){var c=imgSizer;if(img.oldSrc){img.src=img.oldSrc;}
var src=img.src;img.style.width=img.offsetWidth+"px";img.style.height=img.offsetHeight+"px";img.style.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(src='"+src+"', sizingMethod='scale')"
img.oldSrc=src;img.src=c.Config.spacer;},resize:function(func){var oldonresize=window.onresize;if(typeof window.onresize!='function'){window.onresize=func;}else{window.onresize=function(){if(oldonresize){oldonresize();}
func();}}}}

// add twitter bootstrap classes and color based on how many times tag is used
function addTwitterBSClass(thisObj) {
  var title = jQuery(thisObj).attr('title');
  if (title) {
    var titles = title.split(' ');
    if (titles[0]) {
      var num = parseInt(titles[0]);
      if (num > 0)
      	jQuery(thisObj).addClass('label');
      if (num == 2)
        jQuery(thisObj).addClass('label label-info');
      if (num > 2 && num < 4)
        jQuery(thisObj).addClass('label label-success');
      if (num >= 5 && num < 10)
        jQuery(thisObj).addClass('label label-warning');
      if (num >=10)
        jQuery(thisObj).addClass('label label-important');
    }
  }
  else
  	jQuery(thisObj).addClass('label');
  return true;
}

// as the page loads, cal these scripts
jQuery(document).ready(function() {

	// modify tag cloud links to match up with twitter bootstrap
	jQuery("#tag-cloud a").each(function() {
	    addTwitterBSClass(this);
	    return true;
	});
	
	jQuery("p.tags a").each(function() {
		addTwitterBSClass(this);
		return true;
	});
	
	jQuery("ol.commentlist a.comment-reply-link").each(function() {
		jQuery(this).addClass('btn btn-success btn-mini');
		return true;
	});
	
	jQuery('#cancel-comment-reply-link').each(function() {
		jQuery(this).addClass('btn btn-danger btn-mini');
		return true;
	});
	
	jQuery('article.post').hover(function(){
		jQuery('a.edit-post').show();
	},function(){
		jQuery('a.edit-post').hide();
	});
	
	// Input placeholder text fix for IE
	jQuery('[placeholder]').focus(function() {
	  var input = jQuery(this);
	  if (input.val() == input.attr('placeholder')) {
		input.val('');
		input.removeClass('placeholder');
	  }
	}).blur(function() {
	  var input = jQuery(this);
	  if (input.val() == '' || input.val() == input.attr('placeholder')) {
		input.addClass('placeholder');
		input.val(input.attr('placeholder'));
	  }
	}).blur();
	
	// Prevent submission of empty form
	jQuery('[placeholder]').parents('form').submit(function() {
	  jQuery(this).find('[placeholder]').each(function() {
		var input = jQuery(this);
		if (input.val() == input.attr('placeholder')) {
		  input.val('');
		}
	  })
	});
	
	jQuery('#s').focus(function(){
		if( jQuery(window).width() < 940 ){
			jQuery(this).animate({ width: '200px' });
		}
	});
	
	jQuery('#s').blur(function(){
		if( jQuery(window).width() < 940 ){
			jQuery(this).animate({ width: '100px' });
		}
	});
			
	jQuery('.alert-message').alert();
	
	jQuery('.dropdown-toggle').dropdown();
	
	jQuery('.tip').tooltip('hide')
	
	//Creating a reponsive input form with Bootstrap
	// Inputs are not responsive  
	
	//ERASE THIS JS IN BOOSTRAP V3
	
	// From: http://stackoverflow.com/questions/15924422/creating-a-reponsive-input-form-with-bootstrap
	jQuery(window).resize(function() {
		jQuery(".input-prepend, .input-append").each(function(index, group) {
		var input = jQuery("input", group).css('width', '');
			jQuery(".add-on, .btn", group).each(function() {
			input.css('width', '-=' + jQuery(this).outerWidth());
			});
		});
	}).trigger('resize');
 
}); /* end of as page load scripts */