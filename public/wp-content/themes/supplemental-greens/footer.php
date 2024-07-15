<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package supplemental-greens
 */

?>

<footer class="w-full bg-vitality-green-dark text-white">
	<div class="flex flex-col-reverse items-center lg:items-start lg:flex-row w-full justify-center gap-4 py-16 border-b border-white px-8 md:px-12 lg:px-16">

		<div class="flex xl:hidden flex-col flex-auto w-full lg:max-w-[50%]">
			<!-- Shop Section -->
			<button class="relative inline-block w-full text-left py-6 text-xl font-medium uppercase leading-normal text-white transition duration-150 ease-in-out" type="button" data-twe-collapse-init data-twe-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
				SHOP
				<span class="absolute right-0 top-1/2 transform -translate-y-1/2 icon-collapsed h-5 w-5 transition-all duration-300">
					<?php include_svg('plus-icon.svg'); ?>
				</span>
				<span class="absolute right-0 top-1/2 transform -translate-y-1/2 icon-expanded opacity-0 h-5 w-5 transition-all duration-300">
					<?php include_svg('minus-icon.svg'); ?>
				</span>
			</button>
			<div class="hidden" id="collapseExample" data-twe-collapse-item>
				<ul class="list-none m-0 text-sm font-light pb-6">
					<li class="mb-2 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">The Pouch</li>
					<li class="w-fit cursor-pointer transition-all hover:text-vitality-green-hover">Travel Packs</li>
				</ul>
			</div>
			<div class="h-[1px] w-full bg-white"></div>

			<!-- Learn More Section -->
			<button class="relative inline-block w-full text-left py-6 text-xl font-medium uppercase leading-normal text-white transition duration-150 ease-in-out" type="button" data-twe-collapse-init data-twe-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
				LEARN MORE
				<span class="absolute right-0 top-1/2 transform -translate-y-1/2 icon-collapsed h-5 w-5 transition-all duration-300">
					<?php include_svg('plus-icon.svg'); ?>
				</span>
				<span class="absolute right-0 top-1/2 transform -translate-y-1/2 icon-expanded opacity-0 h-5 w-5 transition-all duration-300">
					<?php include_svg('minus-icon.svg'); ?>
				</span>
			</button>
			<div class="hidden" id="collapseExample2" data-twe-collapse-item>
				<ul class="list-none m-0 text-sm font-light pb-6">
					<li class="mb-2 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">Ingredients</li>
					<li class="mb-2 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">Research</li>
					<li class="mb-2 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">Reviews</li>
					<li class="w-fit cursor-pointer transition-all hover:text-vitality-green-hover">FAQs</li>
				</ul>
			</div>
			<div class="h-[1px] w-full bg-white"></div>

			<!-- About Section -->
			<button class="relative inline-block w-full text-left py-6 text-xl font-medium uppercase leading-normal text-white transition duration-150 ease-in-out" type="button" data-twe-collapse-init data-twe-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
				ABOUT
				<span class="absolute right-0 top-1/2 transform -translate-y-1/2 icon-collapsed h-5 w-5 transition-all duration-300">
					<?php include_svg('plus-icon.svg'); ?>
				</span>
				<span class="absolute right-0 top-1/2 transform -translate-y-1/2 icon-expanded opacity-0 h-5 w-5 transition-all duration-300">
					<?php include_svg('minus-icon.svg'); ?>
				</span>
			</button>
			<div class="hidden" id="collapseExample3" data-twe-collapse-item>
				<ul class="list-none m-0 text-sm font-light pb-6">
					<li class="mb-2 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">About Us</li>
					<li class="mb-2 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">Refer Friends</li>
					<li class="mb-2 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">Partners</li>
					<li class="mb-2 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">2023 Impact Report</li>
					<li class="w-fit cursor-pointer transition-all hover:text-vitality-green-hover">Accessibility Statement</li>
				</ul>
			</div>
			<div class="h-[1px] w-full bg-white"></div>

			<!-- Contact Section -->
			<button class="relative inline-block w-full text-left py-6 text-xl font-medium uppercase leading-normal text-white transition duration-150 ease-in-out" type="button" data-twe-collapse-init data-twe-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">
				CONTACT
				<span class="absolute right-0 top-1/2 transform -translate-y-1/2 icon-collapsed h-5 w-5 transition-all duration-300">
					<?php include_svg('plus-icon.svg'); ?>
				</span>
				<span class="absolute right-0 top-1/2 transform -translate-y-1/2 icon-expanded opacity-0 h-5 w-5 transition-all duration-300">
					<?php include_svg('minus-icon.svg'); ?>
				</span>
			</button>
			<div class="hidden" id="collapseExample4" data-twe-collapse-item>
				<ul class="list-none m-0 text-sm font-light pb-6">
					<li class="mb-2 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">My Account</li>
					<li class="mb-2 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">Track My Order</li>
					<li class="mb-2 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">Help</li>
					<li class="w-fit cursor-pointer transition-all hover:text-vitality-green-hover">Careers</li>
				</ul>
			</div>
			<div class="h-[1px] w-full bg-white"></div>
		</div>


		<div class="hidden xl:flex flex-wrap flex-auto">
			<div class="flex flex-col flex-auto gap-5">
				<h3 class="text-lg font-medium">SHOP</h3>
				<ul class="list-none m-0 text-sm font-light">
					<li class="mb-2 cursor-pointer w-fit transition-all hover:text-vitality-green-hover">The Pouch</li>
					<li class="w-fit cursor-pointer transition-all hover:text-vitality-green-hover">Travel Packs</li>
				</ul>
			</div>
			<div class="flex flex-col flex-auto gap-5">
				<h3 class="text-lg font-medium">LEARN MORE</h3>
				<ul class="list-none m-0 text-sm font-light">
					<li class="mb-2 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">Ingredients</li>
					<li class="mb-2 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">Research</li>
					<li class="mb-2 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">Reviews</li>
					<li class="w-fit cursor-pointer transition-all hover:text-vitality-green-hover">FAQs</li>
				</ul>
			</div>
			<div class="flex flex-col flex-auto gap-5">
				<h3 class="text-lg font-medium">ABOUT</h3>
				<ul class="list-none m-0 text-sm font-light">
					<li class="mb-2 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">About Us</li>
					<li class="mb-2 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">Refer Friends</li>
					<li class="mb-2 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">Partners</li>
					<li class="mb-2 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">2023 Impact Report</li>
					<li class="w-fit cursor-pointer transition-all hover:text-vitality-green-hover">Accessibility Statement</li>
				</ul>
			</div>
			<div class="flex flex-col flex-auto gap-5">
				<h3 class="text-lg font-medium">CONTACT</h3>
				<ul class="list-none m-0 text-sm font-light">
					<li class="mb-2 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">My Account</li>
					<li class="mb-2 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">Track My Order</li>
					<li class="mb-2 w-fit cursor-pointer transition-all hover:text-vitality-green-hover">Help</li>
					<li class="w-fit cursor-pointer transition-all hover:text-vitality-green-hover">Careers</li>
				</ul>
			</div>
		</div>
		<div class="flex w-full md:max-w-[66%] items-center lg:items-start lg:max-w-[33%] min-w-[320px] ml-0 lg:ml-auto xl:ml-0 xl:max-w-[25%] flex-col gap-5">
			<h3 class="text-lg font-medium">CONNECT</h3>
			<p class="text-sm font-light">Join Our Newsletter</p>
			<div class="flex items-center justify-between w-full bg-white rounded-full px-4 py-3">
				<input class="appearance-none focus:outline-none" type="email" placeholder="Your Email" />
				<span class="flex w-6 h-6 text-black">
					<?php include_svg('arrow-icon.svg'); ?>
				</span>
			</div>
			<div class="hidden xl:flex items-center gap-3">
				<span class="w-6 h-6 cursor-pointer transition-all hover:text-vitality-green-hover">
					<?php include_svg('instagram-icon.svg'); ?>
				</span>
				<span class="w-6 h-6 cursor-pointer transition-all hover:text-vitality-green-hover">
					<?php include_svg('facebook-icon.svg'); ?>
				</span>
				<span class="w-6 h-6 cursor-pointer transition-all hover:text-vitality-green-hover">
					<?php include_svg('twitter-icon.svg'); ?>
				</span>
				<span class="w-6 h-6 cursor-pointer transition-all hover:text-vitality-green-hover">
					<?php include_svg('tiktok-icon.svg'); ?>
				</span>
				<span class="w-8 h-6 cursor-pointer transition-all hover:text-vitality-green-hover">
					<?php include_svg('youtube-icon.svg'); ?>
				</span>
			</div>
		</div>
	</div>
	<div class="relative flex flex-col items-center xl:items-start xl:flex-row w-full xl:p-16 xl:gap-8">
		<div class="flex flex-col gap-8 items-center py-12 xl:py-0">
			<div class="flex xl:hidden items-center gap-3">
				<span class="w-6 h-6 cursor-pointer transition-all hover:text-vitality-green-hover">
					<?php include_svg('instagram-icon.svg'); ?>
				</span>
				<span class="w-6 h-6 cursor-pointer transition-all hover:text-vitality-green-hover">
					<?php include_svg('facebook-icon.svg'); ?>
				</span>
				<span class="w-6 h-6 cursor-pointer transition-all hover:text-vitality-green-hover">
					<?php include_svg('twitter-icon.svg'); ?>
				</span>
				<span class="w-6 h-6 cursor-pointer transition-all hover:text-vitality-green-hover">
					<?php include_svg('tiktok-icon.svg'); ?>
				</span>
				<span class="w-8 h-6 cursor-pointer transition-all hover:text-vitality-green-hover">
					<?php include_svg('youtube-icon.svg'); ?>
				</span>
			</div>
			<div class="flex-auto min-w-[320px] max-w-[320px] xl:max-w-none">
				<?php include_svg('ag1-icon.svg'); ?>
			</div>
			<p class="flex xl:hidden">© 2024 AG1</p>
		</div>
		<div class="order-3 xl:order-2 flex flex-auto items-center xl:items-start max-w-[95%] md:max-w-[65%] xl:max-w-[42.5%] flex-col font-light gap-4 px-4 py-12 xl:py-0">
			<div class="border border-white px-3 py-4 text-xs">
				<p>* These statements have not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure or prevent any disease.</p>
			</div>
			<p class="text-xs">Information on this site is provided for informational purposes only. It is not meant to substitute for medical advice from your physician or other medical professional. You should not use the information contained herein for diagnosing or treating a health problem or disease, or prescribing any medication. Carefully read all product documentation. If you have or suspect that you have a medical problem, promptly contact your regular health care provider.</p>
			<p class="text-xs">** Offer valid for new subscribers only.</p>
			<div class="flex flex-col md:flex-row items-center gap-4">
				<p class="flex flex-col md:flex-row gap-2 items-center text-sm">
					Your privacy is our priority. Learn more:
					<span class="underline">Your Privacy Choices</span>
				</p>
				<span class="w-12 h-8 flex flex-col justify-center">
					<?php include_svg('privacy-icon.svg'); ?>
				</span>
			</div>
			<div class="text-center flex flex-col md:flex-row md:text-left gap-4 md:gap-8 text-sm mt-2">
				<p>Privacy</p>
				<p>Do Not Sell My Personal Info</p>
				<p>Terms & Conditions</p>
			</div>
		</div>
		<div class="order-2 xl:order-3 flex justify-center xl:justify-end border-y xl:border-none w-full py-12 xl:py-0">
			<div class="flex items-center gap-4 h-fit font-light">
				<div class="w-7 h-7 rounded-full overflow-hidden border-2">
					<?php include_svg('usa-region-icon.svg'); ?>
				</div>
				<span>English</span>
				<span>|</span>
				<span>$ United States (USD)</span>
			</div>
		</div>
		<p class="hidden xl:flex absolute right-16 bottom-16">© 2024 AG1</p>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/js/tw-elements.umd.min.js" defer></script>
</body>

</html>