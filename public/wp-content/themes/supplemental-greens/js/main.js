document.addEventListener( 'DOMContentLoaded', function() {
	// Header scroll effect
	const header = document.getElementById( 'masthead' );
	const defaultLogo = document.getElementById( 'default-logo' );
	const scrolledLogo = document.getElementById( 'scrolled-logo' );
	const menuButton = document.getElementById( 'menu-button' );
	const shopButton = document.getElementById( 'shop-button' );

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
			}
		} );
	}

	// Rotating words effect
	const words = [ 'energized', 'balanced', 'strong', 'focused', 'healthy' ];
	let currentIndex = 0;
	const rotatingWordElement = document.getElementById( 'rotating-word' );

	if ( rotatingWordElement ) {
		setInterval( () => {
			currentIndex = ( currentIndex + 1 ) % words.length;
			rotatingWordElement.textContent = words[ currentIndex ];
		}, 4000 ); // Change word every 4 seconds
	}
} );
