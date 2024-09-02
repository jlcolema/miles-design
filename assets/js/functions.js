// Browser detection for when you get desparate.

// http://rog.ie/post/9089341529/html5boilerplatejs

// var b = document.documentElement;
// b.setAttribute('data-useragent',  navigator.userAgent);
// b.setAttribute('data-platform', navigator.platform);

// sample CSS: html[data-useragent*='Chrome/13.0'] { ... }

// remap jQuery to $

(function($){

/* trigger when page is ready */

$(document).ready(function (){


	/*-------------------------------------------
		Source Order Adjustments
	-------------------------------------------*/

	// Move the carousel and featured work
	// sections above the main content area,
	// on the home page.


	$("#carousel, #featured").insertBefore("#content");


	/*-------------------------------------------
		Toggles
	-------------------------------------------*/


	// Nav


	/*

	$("nav").find(".toggle").click(function(event) {
	
		$("nav").toggleClass("active");
	
	});

	*/


	// Secondary Nav


	$("#secondary-nav").find(".toggle").click(function(event) {
	
		$(this).parent().parent().toggleClass("active");
	
	});


	// Utilities


	$("#utilities").find(".toggle").click(function(event) {
	
		$(this).parent().toggleClass("active");
	
	});


	// Footer Section


	$("#footer").find(".toggle").click(function(event) {

		// Toggle class of "active" to <h4>
	
		$(this).parent().parent().toggleClass("active");
	
	});


	/*-------------------------------------------
		Smooth Scrolling
	-------------------------------------------*/

	// Miscellaneous calls to make scrolling smooth.


	/*

	$(function(){

		$("a").bind("click", function (event) {

			event.preventDefault ? event.preventDefault() : event.returnValue = false;

			var target = $(this).attr("href");

			$("html, body").stop().animate({

				scrollLeft: $(target).offset().left,
				scrollTop: $(target).offset().top

			}, 600, function() {

				$("body").addClass("fixed");

			});

		});

	});

	*/


	/*-------------------------------------------
		Screen Size
	-------------------------------------------*/

	// Displays screen size on the fly.
	// For development use only. Remove once
	// site is ready to go live.


	var windowSize = $(window).width();
		
	$("#screen-size p").text(windowSize);


	/*-------------------------------------------
		Equal Heights
	-------------------------------------------*/


	// Recent Articles

	// Sets each article to the same height
	// on secondary section of home page.

	var $recentArticle = $('.recent-articles article'),

	maxHeight = 0;

	$recentArticle.each( function() {

		$(this).removeAttr('style');

		if($(this).height() > maxHeight) {

			maxHeight = $(this).height();

		} 

	});

    $recentArticle.height(maxHeight);


	// CTAs

	// Sets each article to the same height
	// for CTAs of home page.

	var $cta = $('#home .cta a'),

	maxHeight = 0;

	$cta.each( function() {

		$(this).removeAttr('style');

		if($(this).height() > maxHeight) {

			maxHeight = $(this).height();

		} 

	});

	$cta.height(maxHeight);

	// Share

	$('.share-icons .twitter').sharrre({

		share: {
	
			twitter: true
	
		},
	
		enableHover: false,
		enableTracking: true,
	
		click: function(api, options){
	
			api.simulateClick();
			api.openPopup('twitter');
	
		}
	
	});

	$('.share-icons .linkedin').sharrre({

		share: {
	
			linkedin: true
	
		},
	
		enableHover: false,
		enableTracking: true,
		buttons: { linkedin: {via: '_JulienH'}},
	
		click: function(api, options){
	
			api.simulateClick();
			api.openPopup('linkedin');

		}
	
	});

	$('.share-icons .facebook').sharrre({

		share: {
	
			facebook: true
	
		},
	
		enableHover: false,
		enableTracking: true,
		buttons: { facebook: {via: '_JulienH'}},
	
		click: function(api, options){
	
			api.simulateClick();
			api.openPopup('facebook');
	
		}
	
	});

	$('.share-icons .googleplus').sharrre({

		share: {
	
			googlePlus: true
	
		},

		urlCurl: "/wp-content/themes/milesdesign/sharrre.php",
		enableHover: false,
		enableTracking: true,
		buttons: { googlePlus: {via: '_JulienH'}},
	
		click: function(api, options){
	
			api.simulateClick();
			api.openPopup('googlePlus');
	
		}
	
	});

	$('.share-icons .pinterest').sharrre({

		share: {
	
			pinterest: true
	
		},
	
		urlCurl: "/wp-content/themes/milesdesign/sharrre.php",
		enableHover: false,
		enableTracking: true,
		buttons: { pinterest: {via: '_JulienH'}},
	
		click: function(api, options){
	
			api.simulateClick();
			api.openPopup('pinterest');
	
		}
	
	});


});


$(window).load(function() {


	/*-------------------------------------------
		Carousel
	-------------------------------------------*/


	// $(".flexslider").flexslider({

		// animation: "slide",
		// smoothHeight: true,
		// slideshow: true,
		// slideshowSpeed: 9000,
		// useCSS: false,
		// controlNav: true,
		// directionNav: false

	// });


	/*-------------------------------------------
		Fixed Sidebar
	-------------------------------------------*/


	$('.overview-inner').stickyMojo({footerID: '#footer', contentID: '#yes'});


	/*-------------------------------------------
		Category Changer-oo
	-------------------------------------------*/


	$(function() {
	
		$('#samples div').waypoint(function(direction) {
		
			var $active = $(this);
			
			var value;
			
			/* The waypoint is triggered at the top of each list item representing
			a dial section. When triggering in the down direction we want to use
			the dial section the waypoint is attached to. But in the up direction
			we want to use the previous dial section. */
			
			if (direction === "up") {
			
				$active = $active.prev();
			
			}
			
			/* If we triggered in the up direction and the result from 'prev' came
			back with an empty set of elements, it means we were on the first
			element in the list, and we should just use the original element. */
			
			if (!$active.length) {
			
				$active = $(this);
			
			}
			
			/* The property the dial controls is a data attribute on the ul. */
			
			property = $active.closest('.sample').data('property');
			
			/* The value for that property is a data attribute on each li. */
			
			value = $active.data('value');
			
			$('.overview h3').html(value);

		}, {

			context: window, // Make the scroll context the nearest ul.
			offset: 175

		});

	});


});

$(window).resize(function() {


	/*-------------------------------------------
		Screen Size
	-------------------------------------------*/

	// Displays screen size on the fly.
	// For development use only. Remove once
	// site is ready to go live.


	var windowSize = $(window).width();
		
	$("#screen-size p").text(windowSize);


	/*-------------------------------------------
		Equal Heights
	-------------------------------------------*/


	// Recent Articles

	// Sets each article to the same height
	// on secondary section of home page.

	var $recentArticle = $('.recent-articles article'),

	maxHeight = 0;

	$recentArticle.each( function() {

		$(this).removeAttr('style');

		if($(this).height() > maxHeight) {

			maxHeight = $(this).height();

		} 

	});

    $recentArticle.height(maxHeight);


	// CTAs

	// Sets each article to the same height
	// for CTAs of home page.

	var $cta = $('#home .cta a'),

	maxHeight = 0;

	$cta.each( function() {

		$(this).removeAttr('style');

		if($(this).height() > maxHeight) {

			maxHeight = $(this).height();

		} 

	});

    $cta.height(maxHeight);


});

})(window.jQuery);