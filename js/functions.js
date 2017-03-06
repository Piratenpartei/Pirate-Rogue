/* global screenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 *
 * @version 1.0.3
 */

( function($) {
	// Variables and DOM Caching.
	var $body = $( 'body' ),
		sliderFade = $body.hasClass( 'slider-fade' ),
		ukuNeo = $body.hasClass( 'uku-neo' ),
		ukuSerif = $body.hasClass( 'uku-serif' ),
		headerOffset,
		menuTop = 0,
		resizeTimer;

	// Overlay (main menu + widget area) open/close
	$('.overlay-open').on( 'click', function () {
		$('html').addClass('overlay-show');
		$('body').addClass('overlay-show');
	});

	$('#overlay-close').on( 'click', function () {
		$('html').removeClass('overlay-show');
		$('body').removeClass('overlay-show');
	});

	// Hide Desktop Off Canvas Menu on Click into main website area
	$('#overlay-wrap').on( 'click', function () {
		$('html').removeClass('overlay-show');
		$('body').removeClass('overlay-show');
	});

	// Mobile Widget Area open/close
	$('#offcanvas-widgets-open').on( 'click', function () {
		$('body').toggleClass('offcanvas-widgets-show');
	});

	// Comments open/close
	$('#comments-toggle').on( 'click', function () {
		$('body').toggleClass('comments-show');
	});

	$('.comments-link').on( 'click', function () {
		$('body').addClass('comments-show');
	});

	// Desktio Search open/close
	$('.search-open').on( 'click', function () {
		$('body').toggleClass('desktop-search-show');
	});

	$('.search-close').on( 'click', function () {
		$('body').removeClass('desktop-search-show');
	});

	// Off Canvas Cart open/close
	$('.cart-offcanvas-open').on( 'click', function () {
		$('body').toggleClass('offcanvascart-show');
	});

	$('.cart-close').on( 'click', function () {
		$('body').removeClass('offcanvascart-show');
	});

	// Featured Posts Slider
	if ( $.fn.slick ) {
		$( document ).ready( function () {

		if ( sliderFade ) {
			$( '.featured-slider' ).slick( {
				dots          : false,
				slidesToShow  : 1,
				autoplay      : false,
				cssEase       : 'ease',
				draggable     : true,
				pauseOnHover  : false,
				infinite      : true,
				adaptiveHeight: true,
				fade					: true,
				} );
		} else {
			$( '.featured-slider' ).slick( {
				dots          : false,
				slidesToShow  : 1,
				autoplay      : false,
				cssEase       : 'ease',
				draggable     : true,
				pauseOnHover  : false,
				infinite      : true,
				adaptiveHeight: true,
				} );
			}
		} );
	}

	// Fade In Animations (Uku Neo, Standard)
	$('.fadein').viewportChecker({
		classToAdd: 'inview', // Class to add to the elements when they are visible
		removeClassAfterAnimation: false
	});

	// Fade + SlideIn In Animations (Uku Serif)
	$('.type-product').viewportChecker({
		classToAdd: 'inview', // Class to add to the elements when they are visible
		removeClassAfterAnimation: false // Remove added classes after animation has finished
	});

	$('.product-category').viewportChecker({
		classToAdd: 'inview', // Class to add to the elements when they are visible
		removeClassAfterAnimation: false
	});

	$('.type-post').viewportChecker({
		classToAdd: 'inview', // Class to add to the elements when they are visible
		removeClassAfterAnimation: false
	});

	$('.instagram-pics li').viewportChecker({
		classToAdd: 'inview', // Class to add to the elements when they are visible
		removeClassAfterAnimation: false
	});

	$('.section-about-text').viewportChecker({
		classToAdd: 'inview', // Class to add to the elements when they are visible
		removeClassAfterAnimation: false
	});

	// Scroll Down Button
	$('a[href^="#"]').on('click', function(event) {
			var target = $(this.getAttribute('href'));
			if( target.length ) {
					event.preventDefault();
					$('html, body').stop().animate({
							scrollTop: target.offset().top
					}, 700 );
			}
	});

	// Front page sticky headerimage
	$(window).scroll(function() {
		if($(window).scrollTop() > $(window).height()*1)
			$('.container-all').addClass('scroll');
		});

	$(window).scroll(function() {
		if($(window).scrollTop() < $(window).height()*1)
		$('.container-all').removeClass('scroll');
	});

	// Sticky Desktop Header Bar
	$(function() {
		var stickyheader = $('.sticky-header');
			$(window).scroll(function() {
				var scroll = $(window).scrollTop();

				if (scroll >= 200) {
					$('body').addClass('header-stick');
					stickyheader.removeClass('hidden');
				} else {
					$('body').removeClass('header-stick');
					stickyheader.addClass('hidden');
				}
			});
	});

	// Sticky Last Sidebar Element
	$(document).ready(function() {
	if ( window.innerWidth >= 1060 && ukuSerif ) {
		$(".blog #secondary .widget:last-child").stick_in_parent({
			parent: "#blog-wrap",
			offset_top: 120
		});
	} else if ( window.innerWidth >= 1060 ) {
		$(".blog #secondary .widget:last-child").stick_in_parent({
			parent: "#blog-wrap",
			offset_top: 80
		});
	}
	});



	// Sticky Last Sidebar Element - Single Post
	$(document).ready(function() {
	if ( window.innerWidth >= 1060 && ukuSerif ) {
		$(".single-post #secondary .widget:last-child").stick_in_parent({
			parent: "#singlepost-wrap",
			offset_top: 120
		});
	} else if ( window.innerWidth >= 1060 ) {
		$(".single-post #secondary .widget:last-child").stick_in_parent({
			parent: "#singlepost-wrap",
			offset_top: 80
		});
	}
	});

	// Tablesorter
	$(document).ready(function() {
	    $('.sorttable').tablesorter(); 
	});

// Accordions
	
	// Close Accordions on start, except first
	$('.accordion-body').not(".accordion-body.open").not('.accordion-body.stayopen').hide();
	
        
	$('.accordion-toggle').bind('click', function(event) {
		event.preventDefault();
		var accordion = $(this).attr('href');
		$(this).closest('.accordion').find('.accordion-toggle').not($(this)).removeClass('active');
		$(this).closest('.accordion').find('.accordion-body').not(accordion).not('.accordion-body.stayopen').slideUp();
		$(this).toggleClass('active');
		$(accordion).slideToggle();
	});
	
	// Keyboard navigation for accordions
	$('.accordion-toggle').keydown(function(event) {
		if(event.keyCode == 32) {
			var accordion = $(this).attr('href');
			$(this).closest('.accordion').find('.accordion-toggle').not($(this)).removeClass('active');
			$(this).closest('.accordion').find('.accordion-body').not(accordion).not('.accordion-body.stayopen').slideUp();
			$(this).toggleClass('active');
			$(accordion).slideToggle();
		}
	});


	function openAnchorAccordion() {
	    if (window.location.hash) {
		var identifier = window.location.hash.split('_')[0];
		var inpagenum = window.location.hash.split('_')[1];
		if (identifier == '#collapse') {
		    if ($.isNumeric(inpagenum)) {
			var $findid = 'collapse_'+ inpagenum;
			var $target = $('body').find('#'+ $findid);  
						 
			if ($target.closest('.accordion').parent().closest('.accordion-group')) {
			    $upper = $target.closest('.accordion').parent().closest('.accordion-group');
			   
			    $upper.find('.accordion-toggle').addClass('active');
			    $upper.find('.accordion-body').show();
			    
			    $upper.find('.accordion-toggle').children().find('.accordion-toggle').removeClass('active');
			    $upper.find('.accordion-body').children().find('.accordion-body').hide();
			    
			}
			$target.find('.accordion-toggle').addClass('active');
			$target.show();

			var offset = $target.offset(); 
			var $scrolloffset = offset.top + 40;	
			 $('html,body').animate({scrollTop: $scrolloffset},'slow');
		    }
		   
		 }
	    }
	}
	openAnchorAccordion();




	// Sticky Share Buttons - Single Post
	$(document).ready(function() {
	if ( window.innerWidth >= 1440 ) {
	$(".sd-content").stick_in_parent({
		parent: "#singlepost-wrap",
		offset_top: 80
		});
	}
	});

	// Responsive Videos.
	$('#primary').fitVids();
	$('#singlepost-wrap').fitVids();

		// Add dropdown toggle that display child menu items.
	$( '.menu-item-has-children > a' ).after( '<button class="dropdown-toggle" aria-expanded="false">' + screenReaderText.expand + '</button>' );

	// Toggle buttons and submenu items with active children menu items.
	$( '.current-menu-ancestor > button' ).addClass( 'toggle-on' );
	$( '.current-menu-ancestor > .sub-menu' ).addClass( 'toggled-on' );

	$( '.dropdown-toggle' ).click( function( e ) {
		var _this = $( this );
		e.preventDefault();
		_this.toggleClass( 'toggle-on' );
		_this.next( '.children, .sub-menu' ).toggleClass( 'toggled-on' );
		_this.attr( 'aria-expanded', _this.attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
		_this.html( _this.html() === screenReaderText.expand ? screenReaderText.collapse : screenReaderText.expand );
	} );

	secondary = $( '#secondary' );
	button = $( '.site-branding' ).find( '.secondary-toggle' );

	// Enable menu toggle for small screens.
	( function() {
		var menu, widgets, social;
		if ( ! secondary || ! button ) {
			return;
		}

		// Hide button if there are no widgets and the menus are missing or empty.
		menu    = secondary.find( '.nav-menu' );
		widgets = secondary.find( '#widget-area' );
		social  = secondary.find( '#social-navigation' );
		if ( ! widgets.length && ! social.length && ( ! menu || ! menu.children().length ) ) {
			button.hide();
			return;
		}

		button.on( 'click.uku', function() {
			secondary.toggleClass( 'toggled-on' );
			secondary.trigger( 'resize' );
			$( this ).toggleClass( 'toggled-on' );
			if ( $( this, secondary ).hasClass( 'toggled-on' ) ) {
				$( this ).attr( 'aria-expanded', 'true' );
				secondary.attr( 'aria-expanded', 'true' );
			} else {
				$( this ).attr( 'aria-expanded', 'false' );
				secondary.attr( 'aria-expanded', 'false' );
			}
		} );
	} )();

} )( jQuery );
