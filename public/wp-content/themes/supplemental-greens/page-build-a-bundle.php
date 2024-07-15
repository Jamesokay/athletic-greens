<?php
/*
Template Name: Build a Bundle
*/
?>
<?php get_header(); ?>
<main id="site-content" role="main" class="flex w-full h-[100dvh] pt-[80px]">
    <div class="flex flex-1">
        <img alt="AG1 product" src="<?php echo get_template_directory_uri(); ?>/assets/images/the-pouch.webp" />
    </div>
    <div class="flex flex-1 flex-col justify-center items-center bg-vitality-grey-extra-light gap-8">
        <div class="flex flex-col items-center gap-4">
            <h3 class="text-4xl">Get Your AG1</h3>
            <p>CHOOSE YOUR AG1:</p>
            <div class="flex w-full h-[10px] rounded-full bg-vitality-grey">
                <div class="bg-vitality-green-hover w-1/2 h-full rounded-full"></div>
            </div>
        </div>
        <div class="flex flex-col gap-4 max-w-[65%]">
            <div class="flex gap-8 bg-white px-6 py-4 rounded-md border-2 border-black shadow-md">
                <div class="flex flex-col pt-2">
                    <div class="w-5 h-5 rounded-full bg-vitality-green"></div>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="text-3xl font-medium">The Pouch</h3>
                    <div class="flex gap-4 items-center">
                        <p class="font-medium">Starting at $79 USD</p>
                        <span class="w-5 h-5 text-black">
                            <?php include_svg('arrow-icon.svg'); ?>
                        </span>
                    </div>
                    <p class="text-xs text-vitality-grey-dark">One 30-serving pouch for your home. Ease and consistency in your daily routine.</p>
                </div>
            </div>
            <div class="flex gap-8 bg-white px-6 py-4 rounded-md border border-vitality-grey-md">
                <div class="flex flex-col pt-2">
                    <div class="w-5 h-5 rounded-full bg-vitality-green"></div>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="text-3xl font-medium">Travel Packs</h3>
                    <div class="flex gap-4 items-center">
                        <p class="font-medium">Starting at $89 USD</p>
                        <span class="w-5 h-5 text-black">
                            <?php include_svg('arrow-icon.svg'); ?>
                        </span>
                    </div>
                    <p class="text-xs text-vitality-grey-dark">30 individual, lightweight travel packs to take your daily routine on-the-go.</p>
                </div>
            </div>
            <button class="flex w-full items-center justify-center mt-4 gap-2 border-2 border-vitality-green bg-vitality-green text-white rounded-full px-6 py-3 text-lg transition-all duration-300 hover:bg-vitality-green-hover hover:text-black hover:border-vitality-green-hover">
                <span>Next</span>
                <span class="flex w-6 h-6">
                    <?php include_svg('arrow-icon.svg'); ?>
                </span>
            </button>
        </div>
    </div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>