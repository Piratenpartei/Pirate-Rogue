/* global screenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 *
 * @version 1.0.3
 */

/*! modernizr 3.3.1 (Custom Build) | MIT *
 * https://modernizr.com/download/?-csstransitions-forcetouch-touchevents-domprefixes-prefixes-setclasses-shiv-teststyles !*/
!function(e,t,n){function r(e,t){return typeof e===t}function o(){var e,t,n,o,i,a,s;for(var l in E)if(E.hasOwnProperty(l)){if(e=[],t=E[l],t.name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(o=r(t.fn,"function")?t.fn():t.fn,i=0;i<e.length;i++)a=e[i],s=a.split("."),1===s.length?Modernizr[s[0]]=o:(!Modernizr[s[0]]||Modernizr[s[0]]instanceof Boolean||(Modernizr[s[0]]=new Boolean(Modernizr[s[0]])),Modernizr[s[0]][s[1]]=o),y.push((o?"":"no-")+s.join("-"))}}function i(e){var t=b.className,n=Modernizr._config.classPrefix||"";if(S&&(t=t.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(r,"$1"+n+"js$2")}Modernizr._config.enableClasses&&(t+=" "+n+e.join(" "+n),S?b.className.baseVal=t:b.className=t)}function a(){return"function"!=typeof t.createElement?t.createElement(arguments[0]):S?t.createElementNS.call(t,"http://www.w3.org/2000/svg",arguments[0]):t.createElement.apply(t,arguments)}function s(){var e=t.body;return e||(e=a(S?"svg":"body"),e.fake=!0),e}function l(e,n,r,o){var i,l,u,c,f="modernizr",d=a("div"),p=s();if(parseInt(r,10))for(;r--;)u=a("div"),u.id=o?o[r]:f+(r+1),d.appendChild(u);return i=a("style"),i.type="text/css",i.id="s"+f,(p.fake?p:d).appendChild(i),p.appendChild(d),i.styleSheet?i.styleSheet.cssText=e:i.appendChild(t.createTextNode(e)),d.id=f,p.fake&&(p.style.background="",p.style.overflow="hidden",c=b.style.overflow,b.style.overflow="hidden",b.appendChild(p)),l=n(d,e),p.fake?(p.parentNode.removeChild(p),b.style.overflow=c,b.offsetHeight):d.parentNode.removeChild(d),!!l}function u(e){return e.replace(/([a-z])-([a-z])/g,function(e,t,n){return t+n.toUpperCase()}).replace(/^-/,"")}function c(e,t){return!!~(""+e).indexOf(t)}function f(e,t){return function(){return e.apply(t,arguments)}}function d(e,t,n){var o;for(var i in e)if(e[i]in t)return n===!1?e[i]:(o=t[e[i]],r(o,"function")?f(o,n||t):o);return!1}function p(e){return e.replace(/([A-Z])/g,function(e,t){return"-"+t.toLowerCase()}).replace(/^ms-/,"-ms-")}function m(t,r){var o=t.length;if("CSS"in e&&"supports"in e.CSS){for(;o--;)if(e.CSS.supports(p(t[o]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var i=[];o--;)i.push("("+p(t[o])+":"+r+")");return i=i.join(" or "),l("@supports ("+i+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return n}function h(e,t,o,i){function s(){f&&(delete O.style,delete O.modElem)}if(i=r(i,"undefined")?!1:i,!r(o,"undefined")){var l=m(e,o);if(!r(l,"undefined"))return l}for(var f,d,p,h,v,g=["modernizr","tspan","samp"];!O.style&&g.length;)f=!0,O.modElem=a(g.shift()),O.style=O.modElem.style;for(p=e.length,d=0;p>d;d++)if(h=e[d],v=O.style[h],c(h,"-")&&(h=u(h)),O.style[h]!==n){if(i||r(o,"undefined"))return s(),"pfx"==t?h:!0;try{O.style[h]=o}catch(y){}if(O.style[h]!=v)return s(),"pfx"==t?h:!0}return s(),!1}function v(e,t,n,o,i){var a=e.charAt(0).toUpperCase()+e.slice(1),s=(e+" "+j.join(a+" ")+a).split(" ");return r(t,"string")||r(t,"undefined")?h(s,t,o,i):(s=(e+" "+w.join(a+" ")+a).split(" "),d(s,t,n))}function g(e,t,r){return v(e,n,n,t,r)}var y=[],E=[],C={_version:"3.3.1",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){E.push({name:e,fn:t,options:n})},addAsyncTest:function(e){E.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=C,Modernizr=new Modernizr;var _=C._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):["",""];C._prefixes=_;var b=t.documentElement,S="svg"===b.nodeName.toLowerCase();S||!function(e,t){function n(e,t){var n=e.createElement("p"),r=e.getElementsByTagName("head")[0]||e.documentElement;return n.innerHTML="x<style>"+t+"</style>",r.insertBefore(n.lastChild,r.firstChild)}function r(){var e=E.elements;return"string"==typeof e?e.split(" "):e}function o(e,t){var n=E.elements;"string"!=typeof n&&(n=n.join(" ")),"string"!=typeof e&&(e=e.join(" ")),E.elements=n+" "+e,u(t)}function i(e){var t=y[e[v]];return t||(t={},g++,e[v]=g,y[g]=t),t}function a(e,n,r){if(n||(n=t),f)return n.createElement(e);r||(r=i(n));var o;return o=r.cache[e]?r.cache[e].cloneNode():h.test(e)?(r.cache[e]=r.createElem(e)).cloneNode():r.createElem(e),!o.canHaveChildren||m.test(e)||o.tagUrn?o:r.frag.appendChild(o)}function s(e,n){if(e||(e=t),f)return e.createDocumentFragment();n=n||i(e);for(var o=n.frag.cloneNode(),a=0,s=r(),l=s.length;l>a;a++)o.createElement(s[a]);return o}function l(e,t){t.cache||(t.cache={},t.createElem=e.createElement,t.createFrag=e.createDocumentFragment,t.frag=t.createFrag()),e.createElement=function(n){return E.shivMethods?a(n,e,t):t.createElem(n)},e.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+r().join().replace(/[\w\-:]+/g,function(e){return t.createElem(e),t.frag.createElement(e),'c("'+e+'")'})+");return n}")(E,t.frag)}function u(e){e||(e=t);var r=i(e);return!E.shivCSS||c||r.hasCSS||(r.hasCSS=!!n(e,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),f||l(e,r),e}var c,f,d="3.7.3",p=e.html5||{},m=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,h=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,v="_html5shiv",g=0,y={};!function(){try{var e=t.createElement("a");e.innerHTML="<xyz></xyz>",c="hidden"in e,f=1==e.childNodes.length||function(){t.createElement("a");var e=t.createDocumentFragment();return"undefined"==typeof e.cloneNode||"undefined"==typeof e.createDocumentFragment||"undefined"==typeof e.createElement}()}catch(n){c=!0,f=!0}}();var E={elements:p.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output picture progress section summary template time video",version:d,shivCSS:p.shivCSS!==!1,supportsUnknownElements:f,shivMethods:p.shivMethods!==!1,type:"default",shivDocument:u,createElement:a,createDocumentFragment:s,addElements:o};e.html5=E,u(t),"object"==typeof module&&module.exports&&(module.exports=E)}("undefined"!=typeof e?e:this,t);var x="Moz O ms Webkit",w=C._config.usePrefixes?x.toLowerCase().split(" "):[];C._domPrefixes=w;var T=function(){function e(e,t){var o;return e?(t&&"string"!=typeof t||(t=a(t||"div")),e="on"+e,o=e in t,!o&&r&&(t.setAttribute||(t=a("div")),t.setAttribute(e,""),o="function"==typeof t[e],t[e]!==n&&(t[e]=n),t.removeAttribute(e)),o):!1}var r=!("onblur"in t.documentElement);return e}();C.hasEvent=T;var N=C.testStyles=l;Modernizr.addTest("touchevents",function(){var n;if("ontouchstart"in e||e.DocumentTouch&&t instanceof DocumentTouch)n=!0;else{var r=["@media (",_.join("touch-enabled),("),"heartz",")","{#modernizr{top:9px;position:absolute}}"].join("");N(r,function(e){n=9===e.offsetTop})}return n});var j=C._config.usePrefixes?x.split(" "):[];C._cssomPrefixes=j;var z=function(t){var r,o=_.length,i=e.CSSRule;if("undefined"==typeof i)return n;if(!t)return!1;if(t=t.replace(/^@/,""),r=t.replace(/-/g,"_").toUpperCase()+"_RULE",r in i)return"@"+t;for(var a=0;o>a;a++){var s=_[a],l=s.toUpperCase()+"_"+r;if(l in i)return"@-"+s.toLowerCase()+"-"+t}return!1};C.atRule=z;var F={elem:a("modernizr")};Modernizr._q.push(function(){delete F.elem});var O={style:F.elem.style};Modernizr._q.unshift(function(){delete O.style}),C.testAllProps=v;var k=C.prefixed=function(e,t,n){return 0===e.indexOf("@")?z(e):(-1!=e.indexOf("-")&&(e=u(e)),t?v(e,t,n):v(e,"pfx"))};Modernizr.addTest("forcetouch",function(){return T(k("mouseforcewillbegin",e,!1),e)?MouseEvent.WEBKIT_FORCE_AT_MOUSE_DOWN&&MouseEvent.WEBKIT_FORCE_AT_FORCE_MOUSE_DOWN:!1}),C.testAllProps=g,Modernizr.addTest("csstransitions",g("transition","all",!0)),o(),i(y),delete C.addTest,delete C.addAsyncTest;for(var M=0;M<Modernizr._q.length;M++)Modernizr._q[M]();e.Modernizr=Modernizr}(window,document);

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
	if ( window.innerWidth >= 1060 ) {
		$(".blog #secondary .widget:last-child").stick_in_parent({
			parent: "#blog-wrap",
			offset_top: 80
		});
	}
	});



	// Sticky Last Sidebar Element - Single Post
	$(document).ready(function() {
	if ( window.innerWidth >= 1060 ) {
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


//Gridder configuration found at the end of jquery.gridder.js
    if( Modernizr.touchevents ) {
        $('.picrew-grid > .picrew-grid-card > figure').on('touchend', function(e) {
           if($(e.target).is('.picrew-grid > .picrew-grid-card > figure a') || $(e.target).is('.picrew-grid > .picrew-grid-card > figure a *')) return;
            e.preventDefault();
            $(this).toggleClass('cs-hover');
        });
    }

} )( jQuery );
