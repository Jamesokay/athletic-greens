<?php
/*
Template Name: What Is AG1
*/
?>

<?php get_header(); ?>

<main id="site-content" role="main" class="pt-[80px]">
    <!-- What is AG1 Section -->
    <section id="what-is-ag1" class="flex px-6 md:px-20 pt-10 md:pt-20">
        <div class="flex flex-col gap-4">
            <h1 class="hero-text text-4xl xl:text-7xl leading-[1] m-0">What is AG1?</h1>
            <p class="text-lg w-[90%]">AG1 is so much more than greens. It’s your daily, drinkable scoop of vitamins, minerals, probiotics, and whole food sourced ingredients in one. Validated by research and formulated for you, AG1 helps your whole body, brain, and gut health thrive.*</p>
        </div>
    </section>
    <!-- Benefits Section -->
    <section id="benefits" class="flex lg:px-20 py-8 md:py-20">
        <div class="flex w-full h-full md:gap-6 xl:gap-10 bg-vitality-beige py-8 md:px-8 xl:px-20 flex-wrap lg:flex-nowrap">
            <div class="grow lg:basis-1/3 flex flex-col justify-center gap-4 w-full px-8 md:px-0">
                <h2 class="text-[1.75rem] lg:text-4xl xl:text-[3.2rem] xl:leading-[1]">Less supplements. More benefits.</h2>
                <p class="md:text-xl font-light">To nourish your whole body health, you’d need multiple supplements.* One scoop of AG1 replaces the following:</p>
            </div>
            <div class="grow basis-1/3">
                <img class="object-cover overflow-visible min-w-[180px] w-[180px] h-[395px] md:min-w-[280px] md:w-[280px] md:h-[489px] 2xl:min-w-[458px] 2xl:w-[458px] 2xl:h-[800px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/ag1-bottle-2.webp" />
            </div>
            <div class="flex flex-col basis-1/3 grow justify-center">
                <ul class="list-none m-0 text-xs md:text-base font-light">
                    <li class="flex gap-2 items-center py-2 md:py-6 border-b border-vitality-grey">
                        <span class="w-5 h-5 p-1 rounded-full bg-vitality-green text-white flex items-center justify-center">
                            <?php include_svg('tick-icon.svg'); ?>
                        </span>
                        MULTIVITAMIN
                    </li>
                    <li class="flex gap-2 items-center py-3 md:py-6 border-b border-vitality-grey">
                        <span class="w-5 h-5 p-1 rounded-full bg-vitality-green text-white flex items-center justify-center">
                            <?php include_svg('tick-icon.svg'); ?>
                        </span>
                        VITAMIN C TABLETS
                    </li>
                    <li class="flex gap-2 items-center py-3 md:py-6 border-b border-vitality-grey">
                        <span class="w-5 h-5 p-1 rounded-full bg-vitality-green text-white flex items-center justify-center">
                            <?php include_svg('tick-icon.svg'); ?>
                        </span>
                        SUPERGREENS
                    </li>
                    <li class="flex gap-2 items-center py-3 md:py-6 border-b border-vitality-grey">
                        <span class="w-5 h-5 p-1 rounded-full bg-vitality-green text-white flex items-center justify-center">
                            <?php include_svg('tick-icon.svg'); ?>
                        </span>
                        PROBIOTIC
                    </li>
                    <li class="flex gap-2 items-center py-3 md:py-6 border-b border-vitality-grey">
                        <span class="w-5 h-5 p-1 rounded-full bg-vitality-green text-white flex items-center justify-center">
                            <?php include_svg('tick-icon.svg'); ?>
                        </span>
                        VITAMIN B COMPLEX
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- In a Scoop Section -->
    <section id="in-a-scoop" class="flex px-8 lg:px-20 py-8 md:py-20">
        <div class="flex w-full lg:gap-20">
            <div class="flex flex-col flex-1 md:pr-8 gap-4 md:gap-6 fade-in-up">
                <h2 class="text-[1.75rem] lg:text-4xl xl:text-[3.2rem] xl:leading-[1]">What's in a scoop?</h2>
                <p class="md:text-xl">You’d be hard-pressed to find this much nutrient density, at this high of quality — all in one scoop.</p>
                <div class="flex md:hidden justify-center">
                    <img class="w-full h-auto object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/one-scoop.webp" alt="One scoop" />
                </div>
                <div class="flex flex-col font-light text-sm md:text-base">
                    <div class="flex w-full py-3 md:py-4 justify-between border-b border-vitality-grey">
                        <span>CALORIES</span>
                        <span>50</span>
                    </div>
                    <div class="flex w-full py-3 md:py-4 justify-between border-b border-vitality-grey">
                        <span>CARBOHYDRATES</span>
                        <span>6g</span>
                    </div>
                    <div class="flex w-full py-3 md:py-4 justify-between border-b border-vitality-grey">
                        <span>FIBER</span>
                        <span>2g</span>
                    </div>
                    <div class="flex w-full py-3 md:py-4 justify-between border-b border-vitality-grey">
                        <span>NATURALLY OCCURRING SUGAR</span>
                        <span>&lt;1g</span>
                    </div>
                    <div class="flex w-full py-3 md:py-4 justify-between border-b border-vitality-grey">
                        <span>PROTEIN</span>
                        <span>2g</span>
                    </div>
                    <div class="flex w-full py-3 md:py-4 justify-between border-b border-vitality-grey">
                        <span>NUTRIENT DENSE SUPERFOODS</span>
                        <span>&gt;7g</span>
                    </div>
                    <div class="flex w-full py-3 md:py-4 justify-between border-b border-vitality-grey">
                        <span>POTENT HERBAL EXTRACTS AND ANTIOXIDANTS</span>
                        <span>&gt;2g</span>
                    </div>
                    <div class="flex w-full py-3 md:py-4 justify-between border-b border-vitality-grey">
                        <span>PROBIOTICS</span>
                        <span>7.2B</span>
                    </div>
                </div>
            </div>
            <div class="hidden md:flex flex-1 flex-col items-center">
                <img class="w-full h-auto object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/one-scoop.webp" alt="One scoop" />
            </div>
        </div>
    </section>
    <!-- What So Not Section -->
    <section id="what-so-not" class="flex flex-col gap-12 px-8 lg:px-20 py-8 md:py-20 bg-vitality-beige">
        <h2 class="text-[1.75rem] lg:text-4xl xl:text-[3.2rem] xl:leading-[1] fade-in-up">What AG1 is not</h2>
        <div class="flex flex-col xl:flex-row gap-8 text-lg fade-in-up">
            <div class="flex flex-col gap-4">
                <img class="w-10 h-10 md:h-12 md:w-12" src="https://cdn.sanity.io/images/jf30o7wb/production/16154d7ccc1e764065e558d4af32832b8ed8cf7e-42x42.svg" alt="Negation symbol" />
                <p class="font-semibold">Protein Supplement</p>
                <p>While AG1 contains pea protein to optimize digestive comfort, it does not replace a protein supplement.</p>
            </div>
            <div class="flex flex-col gap-4">
                <img class="w-10 h-10 md:h-12 md:w-12" src="https://cdn.sanity.io/images/jf30o7wb/production/16154d7ccc1e764065e558d4af32832b8ed8cf7e-42x42.svg" alt="Negation symbol" />
                <p class="font-semibold">Meal Replacement</p>
                <p>AG1 does not provide enough calories to skip a meal. It is designed to complement a healthy diet, not replace one.</p>
            </div>
            <div class="flex flex-col gap-4">
                <img class="w-10 h-10 md:h-12 md:w-12" src="https://cdn.sanity.io/images/jf30o7wb/production/16154d7ccc1e764065e558d4af32832b8ed8cf7e-42x42.svg" alt="Negation symbol" />
                <p class="font-semibold">Green Juice</p>
                <p>AG1 provides nutrients from fruits and vegetables but removes excess sugar by using high quality extracts.</p>
            </div>
        </div>

    </section>


</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>