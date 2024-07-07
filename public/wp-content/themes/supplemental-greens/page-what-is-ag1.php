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
    <section id="benefits" class="flex px-6 md:px-20 py-10 md:py-20">
        <div class="flex w-full h-full gap-10 bg-vitality-beige px-20">
            <div class="grow basis-1/3 flex flex-col justify-center gap-4">
                <h2 class="text-4xl xl:text-[3.2rem] leading-[1]">Less supplements. More benefits.</h2>
                <p class="text-xl font-light">To nourish your whole body health, you’d need multiple supplements.* One scoop of AG1 replaces the following:</p>
            </div>
            <div class="grow basis-1/3">
                <img class="min-w-[280px] w-[280px] h-[489px] 2xl:min-w-[458px] 2xl:w-[458px] 2xl:h-[800px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/ag1-bottle-2.webp" />
            </div>
            <div class="flex flex-col basis-1/3 grow"></div>
        </div>
    </section>

</main>

<?php get_footer(); ?>