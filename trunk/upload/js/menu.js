/*
var $jq = jQuery.noConflict();
$jq(document).ready(function () {
    if (!($jq.browser.msie && ($jq.browser.version == 6))) {
        $jq('ul#topnav li:has(ul)').addClass("dropdown");
    }

    $jq('ul#topnav li.dropdown').hover(function () {
		$jq('ul:first', this).stop(true, true).animate({visibility: "visible",display: "none"}).slideDown('normal');
    }, function () {
		$jq('ul:first',this).css('visibility', 'hidden');
    });


});
*/
(function($){	
	
	$(document).ready(function(){
		
		if ( ! ( $.browser.msie && ($.browser.version == 6) ) ){
			$("ul#topnav li:has(ul)").addClass("dropdown");
		}
		
		$("ul#topnav li.dropdown").hover(function () {
												 
			$('ul:first', this).css({visibility: "visible",display: "none"}).slideDown('normal');
		}, function () {
			
			$('ul:first', this).css({visibility: "hidden"});
		});
		
		
	});
	
})(window.jQuery);	