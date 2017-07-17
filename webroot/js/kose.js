/*global jQuery:false */

/*
 * Kose - Fullscreen Portfolio HTML Template
 * By UXbarn
 * Themeforest Profile: http://themeforest.net/user/UXbarn?ref=UXbarn
 * Demo URL: http://themes.uxbarn.com/redirect.php?theme=kose_html
 * Created: February 17, 2014
 * Version: 1.1.1
 */

var isContentHidden = false;

jQuery(document).ready(function($) {
	"use strict";
	
	// ---------------------------------------------- //
	// Global Read-Only Variables (DO NOT CHANGE!)
	// ---------------------------------------------- //
	var ua = navigator.userAgent.toLowerCase();
	var isAndroid = ua.indexOf("android") > -1;
	var androidversion = parseFloat(ua.slice(ua.indexOf('android') + 8));
	var isSafari = !!navigator.userAgent.match(/safari/i) && !navigator.userAgent.match(/chrome/i) && typeof document.body.style.webkitFilter !== "undefined" && !window.chrome;
	var siteWidth = $(window).width();
	// ---------------------------------------------- //
	
	
	
	
	
	// ---------------------------------------------- //
	// Core Scripts
	// ---------------------------------------------- //

	// Initialize custom functions
	//renderGoogleMaps();
	//initMobileMenu();

	// Attach custom scrollbar
	//attachCustomScrollbar();
	
	// Initialize Foundation framework
	$(document).foundation();
	
	// Force displaying tabs element after JS has been loaded
	//$('#content-container .section-container').addClass('display-block');
	
	// This fix is only for IE
	//if (msieversion() != '') {
	//	$('#content-toggle-buttons i').css('marginTop', '-2px');
	//}
	
	// This fix is only for Safari
	//if (isSafari) {
	//	$('#main-menu a.active, #main-menu a.active').addClass('safari-fix');
	//}
	
	// Append show/hide notice div
	//$('#side-footer-wrapper').append('<div id="scroll-down-notice">Swipe down for more <i class="icon ion-ios7-arrow-down"></i></div>');
	
	// Whether the current page has the content area + on lower screen res, show/hide the notice
	//showHideScrolldownNotice();
	
	// Initially set sidebar footer depending on current screen resolution
	//setSidebarFooter();
	
	// If current viewport is small (mobile), always display the content area even it is set as "hidden-content"
	//displayContentAreaForMobile();
	
	
	
	
	
	
	
	// Initialize Full Screen Image/Slider
	var autoRotate = $('#full-scrn-slider').attr('data-auto-rotation'), 
		fullScrnSliderAutoAnimated = true, 
		fullScrnSliderAutoAnimatedDelay = 5000;
		
	if (autoRotate !== '0') {
		// Convert to milliseconds
		fullScrnSliderAutoAnimatedDelay = parseInt(autoRotate, 10) * 500;//thay doi toc do
	} else {
		fullScrnSliderAutoAnimated = false;
	}
	
	var fullScrnSliderAnimation = $('#full-scrn-slider').attr('data-effect'); // crossfade, directscroll, cover-fade, uncover-fade
	var fullScrnSliderAnimationSpeed = 1000;
	
	$('#full-scrn-slider').imagesLoaded(function() {

		$('#full-scrn-slider').carouFredSel({
			responsive : true,
			swipe : true,
			width : '100%',
			onCreate : function() {

				// Hide loading icon
				$('#loading-bg').hide();

				// Display the slider
				$('.full-scrn-slide').stop().animate({
					opacity : 1,
				}, 800);

				// Stretch the slider's images (always stretch on all resolutions by default)
				$('.full-scrn-slide').each(function() {
					var originalImg = $(this).children('img');
					if (originalImg.length > 0 && originalImg.attr('src')) {
						
						var finalPath = originalImg.attr('src');
						
						// Create a new path for retina display (original filename + "@2x" as a suffix)
//						if (Retina.isRetina()) {
//							
//							var imgSrc = $(originalImg).attr('src');
//							var filename = imgSrc.replace(/^.*[\\\/]/, '');
//							var path = imgSrc.split(filename)[0];
//							
//							var retinaFilename = filename.split('.')[0] + '@2x.' + filename.split('.')[1];
//							var retinaPath = path + retinaFilename; 
//							
//							if (urlExists(retinaPath)) {
//								finalPath = retinaPath;
//							}
//								
//						}
						
						// Make it full screen
						$(this).css('background-image', 'url("' + finalPath + '")');
						originalImg.remove();
						
					}
				});
				
				/***** Animate caption *****/
				//var caption = $(this).find('.full-scrn-slide:first-child .slide-caption').not('.image-caption-style');
				if ($('#content-container').length == 0) {
					animateFullscreenCaption(true);
				}

			},
			items : {
			},
			scroll : {
				fx : 'fade',
				easing: 'swing',
				duration : fullScrnSliderAnimationSpeed,
				onBefore : function(data) {
					
					// Reset the caption style
					$('.slide-caption').removeAttr('style').addClass('reset');
					
					$('.slide-caption.image-caption-style').stop().animate({
						opacity : 0,
					}, 40);
					
				},
				onAfter : function(data) {
					
					/***** Animate caption *****/
					if (siteWidth > 1161) {
						
						// This "if" rule only applies to desktop resolution
						if (($('#content-container').length > 0 && isContentHidden) || $('#content-container').length == 0) {
							animateFullscreenCaption(false);
						}
						
					} else { // else, on mobile res, always run this func
						animateFullscreenCaption(false);
					}
				
				},
			},
			auto : {
				play : fullScrnSliderAutoAnimated,
				pauseOnHover : 'resume',
				timeoutDuration : fullScrnSliderAutoAnimatedDelay,
			},
			prev : {
			},
			next : {
			},
			pagination : {
				container : '#full-scrn-bullets',
				anchorBuilder : function(nr) {
					return '<a href="#' + nr + '"></a>';
				}
			},
		}, {
			transition : !(isAndroid), // if running on Android, set it to "false" for this CSS3 transition, otherwise "true"
		});
		
		// Make it center aligned
		$('#full-scrn-bullets').css('margin-left', (($('#full-scrn-bullets').width() / 2) * -1));

	});
	
	
	
	


	
	
	
	
	
	



    
 
 



	

	
	/***** Other Functions *****/
	
	// Whether the screen is already scrolled down on mobile
	// Note: Use with showHideScrolldownNotice() function below
	var isScrolled = false; 
	
	// Show/hide scrolldown notice on mobile
	function showHideScrolldownNotice() {
		
		// Active only when there is content area
		if( $('#content-container').length > 0 ) {
			
			var siteWidth = $(window).width();
			
			if ( siteWidth <= 1161 ) {
				//$('#side-footer-wrapper').append(siteWidth).append('&nbsp;');
				if ( ! isScrolled ) {
					
					$('#side-footer-wrapper #copyright, #side-footer-wrapper .bar-social').stop().animate({ opacity : 0 }, 10, function() { $(this).css('display', 'none'); });
					$('#scroll-down-notice').css('display', 'inherit').stop().animate({ opacity : 1 });
					
				}
	
				$(window).bind('scroll', function() {
					
					if ($(window).scrollTop() > 150) { // When scrolling down from the top, hide the notice, display the social icons
						
						$('#side-footer-wrapper #copyright, #side-footer-wrapper .bar-social').css('display', 'inherit').stop().animate({ opacity : 1 });
						$('#scroll-down-notice').stop().animate({ opacity : 0 }, 10, function() { $(this).css('display', 'none'); });
						
						isScrolled = true;
							
					} else { // When scrolling up to the top, show the notice, hide the social icons
						
						$('#side-footer-wrapper #copyright, #side-footer-wrapper .bar-social').stop().animate({ opacity : 0 }, 10, function() { $(this).css('display', 'none'); });
						$('#scroll-down-notice').css('display', 'inherit').stop().animate({ opacity : 1 });
						
						isScrolled = false;
						
					}
					
				});
			
			} else {
				
				$('#side-footer-wrapper #copyright, #side-footer-wrapper .bar-social').css('display', 'inherit').stop().animate({ opacity : 1 });
				$('#scroll-down-notice').stop().animate({ opacity : 0 }, 10, function() { $(this).css('display', 'none'); });
				
			}
			
		} else {
			$('#scroll-down-notice').css('display', 'none');
		}
		
	}
	
	
	
	function attachCustomScrollbar() {
		
		var siteWidth = $(window).width();
		
		if (siteWidth > 1161) {
			
			$('#inner-content-container').niceScroll({
				cursorcolor : '#fcda1c',
				cursorwidth : 3,
				cursorborder : 0,
				touchbehavior : false,
				autohidemode : true,
				hidecursordelay : 1000,
				scrollspeed : 100,
				//bouncescroll : true,
			});
			
		}
		
	}
	
	
	
	function setSidebarFooter() {
		
		var siteWidth = $(window).width();
		
		if (siteWidth <= 1161) {
			
			$('#side-footer-wrapper').insertAfter('#side-container');
			$('#copyright').find('br').replaceWith('<span class="blank"></span>');
			 
		} else {
			
			$('#side-container').append($('#side-footer-wrapper'));
			$('#copyright').find('span.blank').replaceWith('<br/>');
			
		}
		
	}
	
	
	
	function animateFullscreenCaption(isFirstLoad) {
		
		var caption = $('.full-scrn-slide:first-child .slide-caption');
		
		var delayTime = 700;
		
		if ( ! isFirstLoad) {
			delayTime = 0;
		}
		
		$(caption).css('marginTop', ($(caption).outerHeight() - 100) * -1);
		
		// Animate to the final position
		$(caption).stop().delay(delayTime).animate({
			marginTop : $(caption).outerHeight()/2 * -1,
			opacity: 1,
		}, 1500, 'easeOutQuint', function() {
			/* ie9 fix for text shadow */
			$(this).css('filter', 'Shadow(Color=#666666, Direction=45, Strength=0);');
		});
		
	}
	
	
	
	function displayContentAreaForMobile() {
		
		// If resize to mobile res, always display the content area
		var siteWidth = $(window).width();
		
		if (siteWidth <= 1161) {
			
			$('#inner-content-container').getNiceScroll().show();
			$('#content-container').css('display', 'block').stop().animate({
				opacity : 1,
			}).removeClass('hidden-content');
			
			// Set z-index back to the default value
			$('#root-container').css('zIndex', 'auto');
			
			$('#hide-toggle-button').attr('class', '');
			
			// Trigger Isotope and recalculate the elements
			$('.uxb-port-element-wrapper').isotope();
			recalculatePortfolioHoverInfo();
			
			isContentHidden = false;
			
			recalculateContentArea();
			
		}
		
	}
	
	
	
	function recalculatePortfolioHoverInfo() {
		
		// Reset the height first
		$('.uxb-port-element-item-hover-info').css('height', 'auto');
		
		// Set the hover element to the center position
		$('.uxb-port-element-item-hover').each(function() {
			var hoverWidth = $(this).width();
			var hoverHeight = $(this).height();
			$(this).css({
				left : '50%',
				top : '50%',
				marginLeft : ((hoverWidth / 2) * -1) + 'px', // add negative margin to centering the element
				marginTop : ((hoverHeight / 2) * -1) + 'px', // add negative margin to centering the element
			});
		});
		
		// Set the hover text to the middle position
		$('.uxb-port-element-item-hover-info').each(function() {
			var infoHeight = $(this).height();
			$(this).css({
				height : infoHeight,
				top : '50%',
				marginTop : ((infoHeight / 2) * -1) + 'px', // add negative margin to centering the element
			});
		});
		
	}
	
	// Function for recalculating the size of the content area
	function recalculateContentArea() {
		$('#inner-content-container').getNiceScroll().resize();
	}
	
	function msieversion() {
	
        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");

        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer, return version number
            return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)));
        else                 // If another browser, return 0
            return '';

	   //return false;
	}
	
	function urlExists(url) {
		
	    var http = new XMLHttpRequest();
	    http.open('HEAD', url, false);
	    http.send();
	    
	    return http.status!=404;
	}
	
	
	
	
	
	/***** Responsive Related *****/
	
	// When resizing the browser's window
	$(window).smartresize(function() {
		
		// Adjust the full screen image when resizing the window
		$('#full-scrn-slider, #full-scrn-slider-container > .caroufredsel_wrapper').css('height', 'inherit');
		recalculatePortfolioHoverInfo();
		
	});
	
	$(window).resize(function() {
		
		// Recalculate these functions when resizing the browser's window
		showHideScrolldownNotice();
		attachCustomScrollbar();
		setSidebarFooter();
		displayContentAreaForMobile();
		
	});
	
	
	
	
	
	
	
	
});