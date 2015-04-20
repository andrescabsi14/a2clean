/* utility functions*/
(function ($) {
	"use strict";
	$.avia_utilities = $.avia_utilities || {};
	$.avia_utilities.supported = {};
	$.avia_utilities.supports = (function () {
		var div = document.createElement('div'),
			vendors = ['Khtml', 'Ms', 'Moz', 'Webkit', 'O'];  // vendors   = ['Khtml', 'Ms','Moz','Webkit','O'];  exclude opera for the moment. stil to buggy
		return function (prop, vendor_overwrite) {
			if (div.style.prop !== undefined) {
				return "";
			}
			if (vendor_overwrite !== undefined) {
				vendors = vendor_overwrite;
			}
			prop = prop.replace(/^[a-z]/, function (val) {
				return val.toUpperCase();
			});

			var len = vendors.length;
			while (len--) {
				if (div.style[vendors[len] + prop] !== undefined) {
					return "-" + vendors[len].toLowerCase() + "-";
				}
			}
			return false;
		};
	}());
	;
	(function ($) {
		$.fn.extend({
			donetyping: function (callback, timeout) {
				timeout = timeout || 1e3; // 1 second default timeout
				var timeoutReference,
					doneTyping = function (el) {
						if (!timeoutReference) return;
						timeoutReference = null;
						callback.call(el);
					};
				return this.each(function (i, el) {
					var $el = $(el);
					// Chrome Fix (Use keyup over keypress to detect backspace)
					// thank you @palerdot
					$el.is(':input') && $el.on('keyup keypress', function (e) {
						// This catches the backspace button in chrome, but also prevents
						// the event from triggering too premptively. Without this line,
						// using tab/shift+tab will make the focused element fire the callback.
						if (e.type == 'keyup' && e.keyCode != 8) return;

						// Check if timeout has been set. If it has, "reset" the clock and
						// start over again.
						if (timeoutReference) clearTimeout(timeoutReference);
						timeoutReference = setTimeout(function () {
							// if we made it here, our timeout has elapsed. Fire the
							// callback
							doneTyping(el);
						}, timeout);
					}).on('blur', function () {
						// If we can, fire the event since we're leaving the field
						doneTyping(el);
					});
				});
			}
		});
		jQuery(function ($) {

			$('.jp-jplayer').each(function () {
				var $this = $(this),
					url = $this.data('audio'),
					type = url.substr(url.lastIndexOf('.') + 1),
					player = '#' + $this.data('player'),
					audio = {};
				audio[type] = url;

				$this.jPlayer({
					ready              : function () {
						$this.jPlayer('setMedia', audio);
					},
					swfPath            : 'jplayer/',
					cssSelectorAncestor: player
				});
			});
		});
	})(jQuery);

	var post_gallery = function () {
		$('article.format-gallery .flexslider').imagesLoaded(function () {
			$('.flexslider').flexslider({
				animation : "slide",
				prevText  : "<i class='fa fa-angle-left'></i>",
				nextText  : "<i class='fa fa-angle-right'></i>",
				controlNav: false
			});
		});
	}
	jQuery(function ($) {
		if (jQuery().flexslider) {
			$('.post-formats-wrapper .flexslider').flexslider({
				animation : "slide",
				prevText  : "<i class='fa fa-angle-left'></i>",
				nextText  : "<i class='fa fa-angle-right'></i>",
				controlNav: false
			});
		}
	});
	/* sticky */
	var sticky_calc = function () {
		if ($(".height_sticky_auto").length) {
			$('.navigation').affix({
				offset: {
					top: $('#masthead').offset().top
				}
			});
		}
	}
	//Scroll To top
	var scrollToTop = function()
	{
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 100) {
				jQuery('#topcontrol').css({bottom: "25px"});
			} else {
				jQuery('#topcontrol').css({bottom: "-100px"});
			}
		});
		jQuery('#topcontrol').click(function () {
			jQuery('html, body').animate({scrollTop: '0px'}, 800);
			return false;
		});
	}
	// DOMReady event
	$(function () {
		sticky_calc();
		scrollToTop();
		if (typeof jQuery.fn.waypoint !== 'undefined') {
			jQuery('.wpb_animate_when_almost_visible:not(.wpb_start_animation)').waypoint(function () {
				jQuery(this).addClass('wpb_start_animation');
			}, {offset: '85%'});
		}
	});

	jQuery('#wrapper-container').click(function () {
		jQuery('.slider_sidebar').removeClass('opened');
		jQuery('html,body').removeClass('slider-bar-opened');
	});
	jQuery(document).keyup(function(e){
		if(e.keyCode === 27){
			jQuery('.slider_sidebar').removeClass('opened');
			jQuery('html,body').removeClass('slider-bar-opened');
 		}
	});

	jQuery('[data-toggle=offcanvas]').click(function (e) {
		e.stopPropagation();
		jQuery('.menu-mobile').toggleClass('opened');
		jQuery('html,body').toggleClass('menu-opened');
	});

	/********************************
	 Menu Sidebar
	 ********************************/
	jQuery('.sliderbar-menu-controller').click(function (e) {
		e.stopPropagation();
		jQuery('.slider_sidebar').toggleClass('opened');
		jQuery('html,body').toggleClass('slider-bar-opened');
	});

})(jQuery);
jQuery('.only-icon .button-search').hover(function (e) {
	e.stopPropagation();
	jQuery('#header-search-form-input #s').focus();
});

jQuery(function($){
	$('.contact-form-home .textwidget form.wpcf7-form p select').selectbox({
		speed: 400
	});
});