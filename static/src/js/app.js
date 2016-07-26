$j = jQuery.noConflict();

$j(document).ready(function() {				
		/*-------------------------------------------------------------------*/
		/*  1. Dropdown glyphicon icon adding. Requires bootstrap.
		/*-------------------------------------------------------------------*/
		$j('.sub-menu > li > a').prepend('<span class="glyphicon glyphicon-menu-right"></span>&nbsp;&nbsp;');
		
		
		
		/*-------------------------------------------------------------------*/
		/*  1. Preloader. Requires jQuery jpreloader plugin.
		/*-------------------------------------------------------------------*/
        $j('body').jpreLoader({
            showPercentage: false,
            loaderVPos: '50%'
        });
	

		/*-------------------------------------------------------------------*/
		/*  2. Carousel. Requires Twitter Bootstrap
		/*-------------------------------------------------------------------*/
	
		var $item = $j('.carousel .item'); 
		var $wHeight = $j(window).height();
		$item.eq(0).addClass('active');
		$item.height($wHeight); 
		$item.addClass('full-screen');
		
		$j('.carousel img').each(function() {
		  var $src = $j(this).attr('src');
		  var $color = $j(this).attr('data-color');
		  $j(this).parent().css({
		    'background-image' : 'url(' + $src + ')',
		    'background-color' : $color
		  });
		  $j(this).remove();
		});
		
		$j(window).on('resize', function (){
		  $wHeight = $j(window).height();
		  $item.height($wHeight);
		});
		
		$j('.carousel').carousel({
		  interval: 5000
		});
		
		// Set the first indicator active
		$j('#pemimageslideshow .carousel-indicators li[data-slide-to="0"]').addClass('active');
		
				
		/*-------------------------------------------------------------------*/
		/*  3. Menu Stick
		/*-------------------------------------------------------------------*/
		$j(window).scroll(function(){
		     scroll = $j(window).scrollTop();
				if (scroll >= 50){
				  	$j('.navbar-brand > img').css('max-width','50%');
				  	$j('.navbar-brand > img').css('margin','0 auto');
				  	$j('#menu-left-menu, #menu-right-menu').css('padding','0');
				  	$j('.navbar-fixed-top').addClass('animated fadeIn');
				  	$j('.navbar-fixed-top').css('backgroundColor','#03475d');
				  	$j('.navbar-fixed-top').css('height','50px');
				  	$j('.header-media').css('display','none');
				  	
				  	$j('.navbar-brand').css('height','1px');
				  	
				} else {
				  	$j('.navbar-brand > img').css('max-width','100%');
				  	$j('.navbar-brand > img').css('margin','0');
				  	$j('#menu-left-menu, #menu-right-menu').css('padding','5em 0');
				  	$j('.navbar-fixed-top').removeClass('animated fadeIn');
				  	$j('.navbar-fixed-top').css('backgroundColor','transparent');
				  	$j('.navbar-fixed-top').css('height','auto');
				  	
				  	$j('.header-media').css('display','block');
				  	
				  	$j('.navbar-brand').css('height','50px');
				}	
		});		
		
		/*-------------------------------------------------------------------*/
		/*  4. Makes the height of all selected elements (".match-height")
		/*  exactly equal. Requires jQuery matchHeight plugin.
		/*-------------------------------------------------------------------*/
	    $j('.match-height').matchHeight();
	    
		/*-------------------------------------------------------------------*/
		/*  5. Hide Mobile version logo when scrolls down
		/*-------------------------------------------------------------------*/
		
			$j(window).scroll(function(){
		     	scrollx = $j(window).scrollTop();
					if (scrollx >= 50){
						$j('.mobile-brand').css('display', 'none');
					}
					else{
						$j('.mobile-brand').css('display', 'block');
					}
			});
			
		/*-------------------------------------------------------------------*/
		/*  6. Team
		/*-------------------------------------------------------------------*/
		
		// Set the First profile of first team member visible
		$j('.team-details #a1').css('display','block');
		
		// Set the first profile image always colored
		$j('.team-photo .thumbnail a[data-toggle="#a1"] > img').removeClass('grayscale');
		
		// Set the first nav highlighted
		$j('.team-nav-scroll a[data-toggle="#a1"]').addClass('highlight');

		
		$j(".team-photo .thumbnail a[data-toggle], .team-nav a[data-toggle]").on("click", function(e) {
		  	e.preventDefault();  // prevent navigating
		  	var selector = $j(this).data("toggle");  // get corresponding element
		  	$j(".team-details section").hide();
		  	$j(selector).show();
		  	$j(selector).addClass('animated fadeIn');
		  	$j('.team-nav-scroll > a').removeClass('highlight');
		  	$j($j(this).data("target")).addClass('highlight animated flash');
		});
		
		
		$j('.team-nav-scroll > a').on('click', function(e){
			$j('.team-nav-scroll > a').removeClass('highlight');
			$j(this).addClass('highlight');
			
			$j('.team-photo .thumbnail img').addClass('grayscale');
			$j($j(this).data("target")).removeClass('grayscale');
			
		});
		
		$j('.team-photo .thumbnail img').on('click', function(e){
			$j('.team-photo .thumbnail img').addClass('grayscale');
			$j(this).removeClass('grayscale');
		});
		
		
		/*-------------------------------------------------------------------*/
		/*  7. smoothScroll
		/*-------------------------------------------------------------------*/
		
		$j('.team-nav-scroll > a, .team-photo .thumbnail a').smoothScroll({
			offset: -150
		});
		
		/*-------------------------------------------------------------------*/
		/*  8. Company News Widget
		/*-------------------------------------------------------------------*/
		$j('.company-news ul').insertAfter($j('.company-news .panel section'));
		$j('.company-news ul').addClass('list-group');
		$j('.company-news ul li').addClass('list-group-item');
		
		
		$j('.lithium-news .super-rss-reader-widget').insertAfter($j('.lithium-news .panel section'));
		
		$j('.header-media').insertBefore('#menu-right-menu');
		
		/*-------------------------------------------------------------------*/
		/*  9. magnificPopup
		/*-------------------------------------------------------------------*/
		$j('.gallery').magnificPopup({
			delegate: 'a',
			type:'image',
			gallery:{
				enabled:true
  			}
		});
});