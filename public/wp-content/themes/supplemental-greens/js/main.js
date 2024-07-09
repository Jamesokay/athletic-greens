/* eslint-disable no-mixed-spaces-and-tabs */
document.addEventListener( 'DOMContentLoaded', function() {
	// Sidebar logic
	const sidebarButton = document.getElementById( 'menu-button' );
	const sidebar = document.getElementById( 'sidebar' );
	const closeMenuButton = document.getElementById( 'close-menu-button' );
	const body = document.body;

	if ( sidebarButton && sidebar ) {
		sidebarButton.addEventListener( 'click', function() {
			sidebar.classList.toggle( 'active' );
			body.classList.toggle( 'overflow-hidden' );
		} );
	}

	if ( closeMenuButton && sidebar ) {
		closeMenuButton.addEventListener( 'click', function() {
			sidebar.classList.remove( 'active' );
			body.classList.remove( 'overflow-hidden' );
		} );
	}

	// Fade-in logic
	const observer = new IntersectionObserver( ( entries ) => {
		entries.forEach( ( entry ) => {
			if ( entry.isIntersecting ) {
				entry.target.classList.add( 'fade-in-up-visible' );
				observer.unobserve( entry.target );
			}
		} );
	}, { threshold: 0.4 } );

	const elements = document.querySelectorAll( '.fade-in-up' );
	elements.forEach( ( element ) => {
		observer.observe( element );
	} );

	// Toggle icons directly on button click
	const collapseButtons = document.querySelectorAll( '[data-twe-collapse-init]' );

	collapseButtons.forEach( ( button ) => {
		const collapsedIcon = button.querySelector( '.icon-collapsed' );
		const expandedIcon = button.querySelector( '.icon-expanded' );

		button.addEventListener( 'click', function() {
			collapsedIcon.classList.toggle( 'opacity-0' );
			collapsedIcon.classList.toggle( 'opacity-100' );
			expandedIcon.classList.toggle( 'opacity-0' );
			expandedIcon.classList.toggle( 'opacity-100' );
		} );
	} );

	// Rotating words effect
	const words = document.querySelectorAll( '.rotating-word' );
	let currentIndex = 0;

	function rotateWords() {
	  words[ currentIndex ].classList.remove( 'opacity-100' );
	  words[ currentIndex ].classList.add( 'opacity-0' );

	  setTimeout( () => {
			currentIndex = ( currentIndex + 1 ) % words.length;
			words[ currentIndex ].classList.remove( 'opacity-0' );
			words[ currentIndex ].classList.add( 'opacity-100' );
	  }, 500 ); // Match this with the CSS transition duration for opacity
	}

	setInterval( rotateWords, 3000 );
} );
