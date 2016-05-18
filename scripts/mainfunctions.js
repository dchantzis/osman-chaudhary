window.addEvent('domready',function() {
										
	pageID = document.body.className;
	doNothing = function(e){e.stop();}
	
	$each($$('#navi_prime li a'), function(el) {
		//var tween = new Fx.Tween(el,{ 'duration':'300', link:'cancel' });
		el.addEvents({
		  'mouseenter' : function() {
			  		$$('.navi_sec').addClass('displaynone');
					elClassSplit = this.className.split('_');
					$$('#navi_sec_'+elClassSplit[2]).removeClass('displaynone');
		   },
		  'mouseleave' : function() { }
		  //'mouseleave' : function() { $$('.navi_sec').addClass('displaynone'); }
		});
	  });
	
	$each($$('.navi_sec'), function(el) {
		el.addEvents({
		  'mouseenter' : function() {},
		  'mouseleave' : function() {$$('.navi_sec').addClass('displaynone');}
		});
	  });
	  
 	$each($$('#navi_sec_work li'), function(el) {
		el.addEvents({
		  'mouseenter' : function()
		  {
			  /*$$('#navi_sec_work a span').removeClass('displaynone');*/
			  $('link_'+this.id).removeClass('displaynone');	
			  //alert('#link_'+this.id);		  
		  },
		  'mouseleave' : function() {$('link_'+this.id).addClass('displaynone');}
		});
	  });
	
	
	
	if ( (pageID == 'styling') && ($('gallery_page')) ) {
		initiate_slide_elements('gallery_page');
	}//if
	
	if(pageID == 'bio'){
		initiate_slide_elements('biography');
	}//if

});

function initiate_slide_elements(containerID)
{

		var myScrollbar = new ScrollBar(''+containerID, 'scrollbar_vertical', 'scrollbar_knob', {
			slider: {
			mode: 'vertical',
			offset: -1
			},
			scroll: {
				duration: 1000,
				transition: 'sine:in:out'
			},
			knob: {
				duration: 1000,
				transition: 'sine:in:out'
			}
		});
		var containerHeight = $(''+containerID+'').offsetHeight;
		$('scrollbar_uparrow').addEvent('click', function(){
			myScrollbar.set(0);
		});
		$('scrollbar_downarrow').addEvent('click', function(){
			myScrollbar.set(containerHeight);
		});
		myScrollbar.set(0);

}//initiate_slide_elements()
