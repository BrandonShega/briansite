// Require JS Configurations
require.config({

	paths: {
		jquery: 'assets/js/return.jquery',
		underscore: 'assets/js/return.underscore',
		bootstrapAffix: 'bower_components/bootstrap-sass/assets/javascripts/bootstrap/affix',
		bootstrapAlert: 'bower_components/bootstrap-sass/assets/javascripts/bootstrap/alert',
		bootstrapButton: 'bower_components/bootstrap-sass/assets/javascripts/bootstrap/button',
		bootstrapCarousel: 'bower_components/bootstrap-sass/assets/javascripts/bootstrap/carousel',
		bootstrapCollapse: 'bower_components/bootstrap-sass/assets/javascripts/bootstrap/collapse',
		bootstrapDropdown: 'bower_components/bootstrap-sass/assets/javascripts/bootstrap/dropdown',
		bootstrapModal: 'bower_components/bootstrap-sass/assets/javascripts/bootstrap/modal',
		bootstrapPopover: 'bower_components/bootstrap-sass/assets/javascripts/bootstrap/popover',
		bootstrapScrollspy: 'bower_components/bootstrap-sass/assets/javascripts/bootstrap/scrollspy',
		bootstrapTab: 'bower_components/bootstrap-sass/assets/javascripts/bootstrap/tab',
		bootstrapTooltip: 'bower_components/bootstrap-sass/assets/javascripts/bootstrap/tooltip',
		bootstrapTransition: 'bower_components/bootstrap-sass/assets/javascripts/bootstrap/transition'
	},
	shim: {
		bootstrapAffix: {
			deps: ['jquery']
		},
		bootstrapAlert: {
			deps: ['jquery']
		},
		bootstrapButton: {
			deps: ['jquery']
		},
		bootstrapCarousel: {
			deps: ['jquery']
		},
		bootstrapCollapse: {
			deps: ['jquery','bootstrapTransition']
		},
		bootstrapDropdown: {
			deps: ['jquery']
		},
		bootstrapPopover: {
			deps: ['jquery']
		},
		bootstrapScrollspy: {
			deps: ['jquery']
		},
		bootstrapTab: {
			deps: ['jquery']
		},
		bootstrapTooltip: {
			deps: ['jquery']
		},
		bootstrapTransition: {
			deps: ['jquery']
		},
		jqueryVimeoEmbed: {
			deps: ['jquery']
		}
	}
});

// Get the base url of the teme
require.config( {
	baseUrl: TheLandscaper.themePath
});

require([
	'jquery',
	'underscore',
	'assets/js/maps',
	'assets/js/stickynav',
	'assets/js/scrollToTop',
	'assets/js/doubletaptogo',
	'bootstrapCarousel',
	'bootstrapCollapse',
	'bootstrapTooltip',
], function ( $, _ ) {

	// Properly update the ARIA states on blur (keyboard) and mouse out events
	$( '[role="menubar"]' ).on( 'focus.aria  mouseenter.aria', '[aria-haspopup="true"]', function ( ev ) {
		$( ev.currentTarget ).attr( 'aria-expanded', true );
	} );

	$( '[role="menubar"]' ).on( 'blur.aria  mouseleave.aria', '[aria-haspopup="true"]', function ( ev ) {
		$( ev.currentTarget ).attr( 'aria-expanded', false );
	} );

	// If website visited on touch device fix for display submenu
	$( '.menu-item-has-children' ).doubleTapToGo();

	// Add toggle button for sub menu's on mobile view
	$( '.main-navigation li.menu-item-has-children' ).each( function() {
		$( this ).prepend( '<div class="nav-toggle-mobile-submenu"><i class="fa fa-plus"></i></div>' );
	});
	$( '.nav-toggle-mobile-submenu' ).click( function () {
		$( this ).parent().toggleClass( 'nav-toggle-dropdown' );
	} );

	// Bootstrap Tooltip used for awards hover
	$( '[data-toggle="tooltip"]' ).tooltip();

	// Add child page arrow to max mega menu parent links
	$( '#mega-menu-wrap-primary li.mega-menu-item-has-children > a' ).prepend( $( '<i class="fa fa-caret-down"></i>' ) );

	// Wrap mega menu around default header div
	$( '#mega-menu-wrap-primary' ).wrap( $( '<div class="main-navigation"></div>' ) );

	// Scroll to #href link (one-page option)
	$( '.main-navigation a[href^="#"]' ).on( 'click', function( event ) {
	    var target = $( this.getAttribute( 'href' ) );
	    if( target.length ) {
	        event.preventDefault();
	        $( 'html, body' ).stop().animate({
	            scrollTop: target.offset().top
	        }, 1000);
	    }
	});

});