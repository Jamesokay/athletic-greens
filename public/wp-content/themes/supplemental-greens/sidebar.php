<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package supplemental-greens
 */
?>

<aside id="sidebar" class="flex flex-col fixed z-50 left-0 top-0 h-full w-full md:w-[608px] xl:w-[702px] overflow-y-scroll hide-scrollbar bg-vitality-green-dark shadow-lg transition-transform transform translate-x-full">
	<div class="flex gap-8 w-full my-4 md:my-8 py-3 px-8 md:px-16 items-center">
		<button id="close-menu-button" class="flex">
			<span class="flex w-5 h-5 md:w-6 md:h-6 text-white">
				<?php include_svg('close-icon.svg'); ?>
			</span>
		</button>
		<div class="m-auto md:m-0 w-[96px] h-[38px] md:w-[118px] md:h-[48px] flex">
			<img src="https://cdn.sanity.io/images/jf30o7wb/production/1c9ae1277a7e5622fcccccf66edf5b007bde0316-119x48.svg" alt="AG1 Logo" />
		</div>
	</div>
	<div class="flex flex-col px-8 md:px-16 text-white text-2xl md:text-3xl">
		<div role="button" class="py-6 md:py-8 transition-all duration-300 hover:text-vitality-green-hover">
			Shop
		</div>
		<div class="h-[1px] w-full bg-white opacity-60"></div>
		<div role="button" class="py-6 md:py-8 transition-all duration-300 hover:text-vitality-green-hover">
			Ingredients
		</div>
		<div class="h-[1px] w-full bg-white opacity-60"></div>
		<div role="button" class="py-6 md:py-8 transition-all duration-300 hover:text-vitality-green-hover">
			Research
		</div>
		<div class="h-[1px] w-full bg-white opacity-60"></div>
		<button class="relative flex w-full text-white text-2xl md:text-3xl py-6 md:py-8 transition-all duration-300 hover:text-vitality-green-hover" type="button" data-twe-collapse-init data-twe-target="#about-ag1" aria-expanded="false" aria-controls="about-ag1">
			About AG1
			<span class="absolute right-0 top-1/2 transform -translate-y-1/2 icon-collapsed h-5 w-5">
				<?php include_svg('plus-icon.svg'); ?>
			</span>
			<span class="absolute right-0 top-1/2 transform -translate-y-1/2 icon-expanded opacity-0 h-5 w-5">
				<?php include_svg('minus-icon.svg'); ?>
			</span>
		</button>
		<div class="hidden" id="about-ag1" data-twe-collapse-item>
			<ul class="list-none m-0 text-sm md:text-xl pb-6 md:pb-8">
				<li class="mb-6 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">What is AG1?</li>
				<li class="mb-6 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">Foundational Nutrition</li>
				<li class="mb-6 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">Quality & Standards</li>
				<li class="mb-6 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">Our Story</li>
				<li class="w-fit cursor-pointer transition-all hover:text-vitality-green-hover">Our Impact</li>
			</ul>
		</div>
		<div class="h-[1px] w-full bg-white opacity-60"></div>
		<div role="button" class="py-6 md:py-8 transition-all duration-300 hover:text-vitality-green-hover">
			Learn
		</div>
		<div class="h-[1px] w-full bg-white opacity-60"></div>
		<div role="button" class="py-6 md:py-8 transition-all duration-300 hover:text-vitality-green-hover">
			Reviews
		</div>

	</div>
	<div class="flex justify-between mt-auto px-8 md:px-16 pb-6 md:pb-12 items-center">
		<button class="text-lg text-white rounded-full px-4 py-2 md:px-6 md:py-3 border-2 border-white transition-all duration-300 hover:text-vitality-green-hover hover:border-vitality-green-hover">Account</button>
		<div role="button" class="text-xl font-light text-white transition-all duration-300 hover:text-vitality-green-hover">CONTACT</div>
	</div>
</aside>