<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package supplemental-greens
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/css/tw-elements.min.css" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site overscroll-none">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'supplemental-greens'); ?></a>
		<header id="masthead" class="flex w-full items-center justify-between h-[80px] fixed z-50 left-0 px-12 transition-all duration-300 border-b border-1 border-transparent">
			<div class="flex items-center gap-4">
				<button id="menu-button" class="bg-transparent appearance-none border-none text-white transition-all duration-300">
					<?php include_svg('menu-icon.svg'); ?>
				</button>
				<div class="relative text-6xl text-white m-0">
					<a id="default-logo" class="flex transition-all duration-300" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<img width="118" height="48" src="https://cdn.sanity.io/images/jf30o7wb/production/1c9ae1277a7e5622fcccccf66edf5b007bde0316-119x48.svg" alt="AG1 Logo" />
					</a>
					<a id="scrolled-logo" class="absolute top-0 left-0 flex opacity-0 transition-all duration-300" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<img width="118" height="48" src="https://cdn.sanity.io/images/jf30o7wb/production/ebcb6a0cead1068b07d1cbe50839b7571eba9fa4-119x48.svg" alt="AG1 Logo" />
					</a>
				</div>
			</div>
			<div class="flex items-center gap-8">
				<button id="shop-button" class="flex items-center gap-2 appearance-none rounded-full px-6 py-3 bg-transparent border border-2 border-white hover:border-white text-white transition-all duration-300">
					<p class="text-lg">Get your <span class="tracking-tighter">AG1</span><sup class="text-xs">®</sup></p>
					<span class="flex w-6 h-6">
						<?php include_svg('arrow-icon.svg'); ?>
					</span>
				</button>
				<div id="account-button" role="button" class="flex text-white transition-all duration-300">
					<?php include_svg('user-icon.svg'); ?>
				</div>
			</div>
		</header>
	</div>
	<?php wp_footer(); ?>