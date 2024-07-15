document.addEventListener( 'DOMContentLoaded', function() {
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
} );