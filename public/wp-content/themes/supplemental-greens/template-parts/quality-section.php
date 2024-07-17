<section id="quality" class="flex flex-col flex-col-reverse lg:flex-row justify-between py-10 px-6 md:px-20 md:py-20">
    <div class="flex flex-auto flex-col lg:w-1/2 pr-0 lg:pr-20 bg-white z-20">
        <div class="flex flex-col fade-in-up">
            <h1 class="text-4xl 2xl:text-[3.25rem] leading-[1]"><?php the_field('quality_section_title_line'); ?></h1>
            <p class="text-xl"><?php the_field('quality_section_body_text'); ?></p>
        </div>
        <div class="flex flex-col fade-in-up">
            <div class="my-8 grid gap-6 grid-cols-2">
                <div class="flex flex-col font-medium py-4 gap-4">
                    <h2 class="text-6xl sm:text-7xl 2xl:text-8xl"><?php the_field('quality_section_grid_numeral_1'); ?></h2>
                    <p><?php the_field('quality_section_grid_subtitle_1'); ?></p>
                </div>
                <div class="flex flex-col font-medium py-4 gap-4">
                    <h2 class="text-6xl sm:text-7xl 2xl:text-8xl"><?php the_field('quality_section_grid_numeral_2'); ?></h2>
                    <p><?php the_field('quality_section_grid_subtitle_2'); ?></p>
                </div>
                <div class="flex flex-col font-medium py-4 gap-4">
                    <h2 class="text-6xl sm:text-7xl 2xl:text-8xl"><?php the_field('quality_section_grid_numeral_3'); ?></h2>
                    <p><?php the_field('quality_section_grid_subtitle_3'); ?></p>
                </div>
                <div class="flex flex-col font-medium py-4 gap-4">
                    <h2 class="text-6xl sm:text-7xl 2xl:text-8xl"><?php the_field('quality_section_grid_numeral_4'); ?></h2>
                    <p><?php the_field('quality_section_grid_subtitle_4'); ?></p>
                </div>
            </div>
            <div class="flex gap-4 items-center">
                <img loading="lazy" class="h-[50px] w-auto" src="https://cdn.sanity.io/images/jf30o7wb/production/951e3b9a69bbe1081ff698b2fcab10fdb6efeafe-148x54.svg" alt="Certified sport label" />
                <img loading="lazy" class="h-[50px] w-auto" src="https://cdn.sanity.io/images/jf30o7wb/production/5453ce55a8b4767ce86f1f435cfaa4a31bb353d2-91x56.svg" alt="TGA facility label" />
            </div>
        </div>
    </div>

    <div class="relative flex flex-auto lg:w-1/2">
        <picture class="aspect-picture">
            <img loading="lazy" class="absolute top-0 left-0 w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/test-tube.webp" alt="Test tube" />
        </picture>
    </div>
</section>