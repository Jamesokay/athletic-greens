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
	<div class="flex w-full justify-center gap-4 p-16 border-b border-white">
		<div class="flex flex-wrap flex-auto">
			<div class="flex flex-col flex-auto gap-5">
				<h3 class="text-lg font-medium">SHOP</h3>
				<ul class="list-none m-0 text-sm font-light">
					<li class="mb-2">The Pouch</li>
					<li>Travel Packs</li>
				</ul>
			</div>
			<div class="flex flex-col flex-auto gap-5">
				<h3 class="text-lg font-medium">LEARN MORE</h3>
				<ul class="list-none m-0 text-sm font-light">
					<li class="mb-2">Ingredients</li>
					<li class="mb-2">Research</li>
					<li class="mb-2">Reviews</li>
					<li>FAQs</li>
				</ul>
			</div>
			<div class="flex flex-col flex-auto gap-5">
				<h3 class="text-lg font-medium">ABOUT</h3>
				<ul class="list-none m-0 text-sm font-light">
					<li class="mb-2">About Us</li>
					<li class="mb-2">Refer Friends</li>
					<li class="mb-2">Partners</li>
					<li class="mb-2">2023 Impact Report</li>
					<li>Accessibility Statement</li>
				</ul>
			</div>
			<div class="flex flex-col flex-auto gap-5">
				<h3 class="text-lg font-medium">CONTACT</h3>
				<ul class="list-none m-0 text-sm font-light">
					<li class="mb-2">My Account</li>
					<li class="mb-2">Track My Order</li>
					<li class="mb-2">Help</li>
					<li>Careers</li>
				</ul>
			</div>
		</div>
		<div class="flex flex-col gap-5">
			<h3 class="text-lg font-medium">CONNECT</h3>
			<p class="text-sm font-light">Join Our Newsletter</p>
			<div class="flex items-center justify-between w-full bg-white rounded-full px-4 py-3">
				<input class="appearance-none focus:outline-none" type="email" placeholder="Your Email" />
				<span class="flex w-6 h-6 text-black">
					<?php include_svg('arrow-icon.svg'); ?>
				</span>
			</div>
			<div class="flex items-center gap-3">
				<span class="w-6 h-6">
					<?php include_svg('instagram-icon.svg'); ?>
				</span>
				<span class="w-6 h-6">
					<?php include_svg('facebook-icon.svg'); ?>
				</span>
				<span class="w-6 h-6">
					<?php include_svg('twitter-icon.svg'); ?>
				</span>
				<span class="w-6 h-6">
					<?php include_svg('tiktok-icon.svg'); ?>
				</span>
				<span class="w-8 h-6">
					<?php include_svg('youtube-icon.svg'); ?>
				</span>
			</div>
		</div>
	</div>
	<div class="flex w-full p-16 gap-8">
		<div class="flex-auto min-w-[320px]">
			<?php include_svg('ag1-icon.svg'); ?>
		</div>
		<div class="flex flex-auto max-w-[42.5%] flex-col font-light gap-4">
			<div class="border border-white px-3 py-4 text-xs">
				<p>* These statements have not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure or prevent any disease.</p>
			</div>
			<p class="text-xs">Information on this site is provided for informational purposes only. It is not meant to substitute for medical advice from your physician or other medical professional. You should not use the information contained herein for diagnosing or treating a health problem or disease, or prescribing any medication. Carefully read all product documentation. If you have or suspect that you have a medical problem, promptly contact your regular health care provider.</p>
			<p class="text-xs">** Offer valid for new subscribers only.</p>
			<div class="flex items-center gap-4">
				<p class="text-sm">
					Your privacy is our priority. Learn more:
					<span class="underline">Your Privacy Choices</span>
				</p>
				<span class="w-12 h-8 flex flex-col justify-center">
					<?php include_svg('privacy-icon.svg'); ?>
				</span>
			</div>
			<div class="flex gap-8 text-sm mt-2">
				<p>Privacy</p>
				<p>Do Not Sell My Personal Info</p>
				<p>Terms & Conditions</p>
			</div>
		</div>
		<div class="relative flex flex-auto justify-end">
			<div class="flex items-center gap-4 h-fit font-light">
				<div class="w-7 h-7 rounded-full overflow-hidden border-2">
					<?php include_svg('usa-region-icon.svg'); ?>
				</div>
				<span>English</span>
				<span>|</span>
				<span>$ United States (USD)</span>
			</div>
			<p class="absolute right-0 bottom-0">© 2024 AG1</p>
		</div>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>