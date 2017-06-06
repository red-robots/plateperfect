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

	if($('body.home').length===0){
		function check_header(){
			var $window = $(window);
			var $page = $('#page');
			var $wrapper = $page.find('>.header-wrapper');
			var $overlay = $wrapper.find('.overlay');
			var $row_2 = $wrapper.find('>.row-2');
			var page_padding = Number($page.css("paddingTop").replace(/[^0-9]/g,""));
			console.log($page.offset().top + page_padding);
			if(window.innerWidth>599 
			&& $window.scrollTop() + $overlay.outerHeight() >= $wrapper.offset().top + $wrapper.outerHeight()
			&& $window.scrollTop() + $overlay.outerHeight() >= $page.offset().top + page_padding){
				if(!$wrapper.hasClass("active-bar")){
					$page.css("paddingTop",$wrapper.height()+"px");
					$wrapper.addClass("active-bar");
					$wrapper.removeClass("inactive-bar");
					$wrapper.css({
						position: "fixed",
						top: 0,
						left: 0,
						zIndex: 99,
					});
					$row_2.css({
						display: "none"
					});
					$overlay.css({
						position: "static"
					});
				}
			} else {
				if(!$wrapper.hasClass("inactive-bar")){
					$wrapper.removeClass("active-bar");
					$wrapper.addClass("inactive-bar");
					$page.css("paddingTop",0);
					$wrapper.css({
						position: "",
						top: "",
						left: "",
					});
					$row_2.css({
						display: ""
					});
					$overlay.css({
						position: ""
					});
				}
			}
		}
		check_header();
		$(window).scroll(check_header);
		$(window).resize(check_header);
	}
});// END #####################################    END