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

	// Header scroll effect
	const header = document.getElementById( 'masthead' );
	const defaultLogo = document.getElementById( 'default-logo' );
	const scrolledLogo = document.getElementById( 'scrolled-logo' );
	const menuButton = document.getElementById( 'menu-button' );
	const shopButton = document.getElementById( 'shop-button' );
	const accountButton = document.getElementById( 'account-button' );

	if ( header && defaultLogo && scrolledLogo && menuButton && shopButton ) {
		window.addEventListener( 'scroll', function() {
			if ( window.scrollY > 50 ) { // Adjust this value as needed
				header.classList.add( 'bg-white', 'border-vitality-grey' );
				header.classList.remove( 'border-transparent' );
				scrolledLogo.classList.add( 'opacity-100' );
				scrolledLogo.classList.remove( 'opacity-0' );
				defaultLogo.classList.add( 'opacity-0' );
				defaultLogo.classList.remove( 'opacity-100' );
				menuButton.classList.remove( 'text-white' );
				menuButton.classList.add( 'text-vitality-green' );
				shopButton.classList.add( 'border-white', 'bg-vitality-green', 'hover:bg-vitality-green-hover', 'hover:text-black' );
				shopButton.classList.remove( 'border-transparent', 'bg-transparent' );
				accountButton.classList.add( 'text-vitality-green' );
				accountButton.classList.remove( 'text-white' );
			} else {
				header.classList.remove( 'bg-white', 'border-vitality-grey' );
				header.classList.add( 'border-transparent' );
				scrolledLogo.classList.remove( 'opacity-100' );
				scrolledLogo.classList.add( 'opacity-0' );
				defaultLogo.classList.remove( 'opacity-0' );
				defaultLogo.classList.add( 'opacity-100' );
				menuButton.classList.remove( 'text-vitality-green' );
				menuButton.classList.add( 'text-white' );
				shopButton.classList.add( 'border-white', 'bg-transparent' );
				shopButton.classList.remove( 'bg-vitality-green', 'hover:bg-vitality-green-hover', 'hover:text-black' );
				accountButton.classList.remove( 'text-vitality-green' );
				accountButton.classList.add( 'text-white' );
			}
		} );
	}

	// Rotating words effect
	const words = [ 'energized', 'balanced', 'strong', 'focused', 'healthy' ];
	let currentIndex = 0;
	const rotatingWordElement = document.getElementById( 'rotating-word' );

	if ( rotatingWordElement ) {
		setInterval( () => {
			rotatingWordElement.classList.remove( 'fade-in' );
			rotatingWordElement.classList.add( 'fade-out' );

			setTimeout( () => {
				currentIndex = ( currentIndex + 1 ) % words.length;
				rotatingWordElement.textContent = words[ currentIndex ];
				rotatingWordElement.classList.remove( 'fade-out' );
				rotatingWordElement.classList.add( 'fade-in' );
			}, 1000 ); // Match this with the CSS animation duration for fadeOut
		}, 3000 ); // Change word every 3 seconds
	}
} );
