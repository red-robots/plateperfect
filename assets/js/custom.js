/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {
	
	/*
	*
	*	Current Page Active
	*
	------------------------------------*/
	$("[href]").each(function() {
    if (this.href == window.location.href) {
        $(this).addClass("active");
        }
	});
	
	/*
	*
	*	Flexslider
	*
	------------------------------------*/
	$('.flexslider').imagesLoaded( function() {
		$('.flexslider').flexslider({
			animation: "slide",
			start: check_header
		}); // end register flexslider
	});
	/*
	*
	*	Colorbox
	*
	------------------------------------*/
	$('a.gallery').colorbox({
		rel:'gal',
		width: '80%', 
		height: '80%'
	});
	
	/*
	*
	*	Isotope with Images Loaded
	*
	------------------------------------*/
	var $container = $('#container').imagesLoaded( function() {
  	$container.isotope({
    // options
	 itemSelector: '.item',
		  masonry: {
			gutter: 15
			}
 		 });
	});

	
	/*
	*
	*	Equal Heights Divs
	*
	------------------------------------*/
	$('.js-blocks').matchHeight();

	/*
	*
	*	Wow Animation
	*
	------------------------------------*/
	new WOW().init();

	function check_header(){
		var $window = $(window);
		var $page = $('#page');
		var $wrapper = $page.find('.header-wrapper');
		var $overlay = $wrapper.find('.overlay');
		var $overlay_row_1 = $overlay.find(">.row-1");
		var $overlay_row_2 = $overlay.find(">.row-2");
		var $logo = $overlay_row_1.find('.logo');
		var $logo_as = $logo.find('a');
		var $hidden_logo = $logo.find('a.hidden');
		var $row_2 = $wrapper.find('>.row-2');
		if(window.innerWidth>599 ){
			$page.css("paddingTop",'');
			if($window.scrollTop() + $overlay.outerHeight() + Number($overlay.css("top").replace(/[^0-9]/g,'')) >= $wrapper.offset().top + $wrapper.outerHeight()){
				$logo_as.css("display","none");
				$hidden_logo.css("display","block");
				$overlay_row_1.css({
					float: "left",
				});
				$overlay_row_2.css({
					float: "left",
					marginTop: 0
				});
				if($window.scrollTop() + $overlay.outerHeight() >= $row_2.offset().top + $row_2.outerHeight()){
					$overlay.css({
						top: 0,
					});
					$overlay.removeClass("no-background");
				} else {
					$overlay.css({
						top: $row_2.offset().top+$row_2.outerHeight()-$overlay.outerHeight() -$window.scrollTop(),
					});
				}
			} else {
				$logo_as.css("display","");
				$hidden_logo.css("display","");
				$overlay_row_1.css({
					float: "",
				});
				$overlay_row_2.css({
					float: "",
					marginTop: ""
				});
				$overlay.css({
					top: "",
				});
				$overlay.addClass("no-background");
				if($window.scrollTop() + $overlay.outerHeight() + Number($overlay.css("top").replace(/[^0-9]/g,'')) >= $wrapper.offset().top + $wrapper.outerHeight()){
					$logo_as.css("display","none");
					$hidden_logo.css("display","block");
					$overlay_row_1.css({
						float: "left",
					});
					$overlay_row_2.css({
						float: "left",
						marginTop: 0
					});
					if($window.scrollTop() + $overlay.outerHeight() >= $row_2.offset().top + $row_2.outerHeight()){
						$overlay.css({
							top: 0,
						});
						$overlay.removeClass("no-background");
					} else {
						$overlay.css({
							top: $row_2.offset().top+$row_2.outerHeight()-$overlay.outerHeight() -$window.scrollTop(),
						});
					}
				}
			}
		} else {
			$overlay.removeClass("no-background");
			$page.css("paddingTop",$overlay.outerHeight());
		}
	}
	if($('body.home').length===0){
		check_header();
	}
	$(window).scroll(check_header);
	$(window).resize(check_header);
});// END #####################################    END