$j = jQuery.noConflict();

$j(document).ready(function() {	
	
	function sticky_relocate() {
		    var window_top = $j(window).scrollTop();
		    var div_top = $j('#sticky-anchor').offset().top;
		    if (window_top > div_top) {
		        $j('#sticky').addClass('stick');
		        $j('#sticky-anchor').height($j('#sticky').outerHeight());
		    } else {
		        $j('#sticky').removeClass('stick');
		        $j('#sticky-anchor').height(0);
		    }
		}
	
	$j(function() {
	    $j(window).scroll(sticky_relocate);
	    sticky_relocate();
	});
});