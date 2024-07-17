<section id="how-it-works" class="flex px-6 md:px-20 py-10 md:py-20">
    <div class="flex flex-col gap-8 fade-in-up">
        <h1 class="text-4xl 2xl:text-[3.25rem] leading-[1]"><?php the_field('how_it_works_section_title_line'); ?></h1>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="flex flex-col gap-6">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/scoop.webp" alt="Scoop" />
                <p class="text-[1.3rem] leading-[1.1]"><?php the_field('how_it_works_section_step_1'); ?></p>
            </div>
            <div class="flex flex-col gap-6">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/cold-water.webp" alt="Cold Water" />
                <p class="text-[1.3rem] leading-[1.1]"><?php the_field('how_it_works_section_step_2'); ?></p>
            </div>
            <div class="flex flex-col gap-6">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/shake.webp" alt="Shake" />
                <p class="text-[1.3rem] leading-[1.1]"><?php the_field('how_it_works_section_step_3'); ?></p>
            </div>
            <div class="flex flex-col gap-6">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/enjoy.webp" alt="Enjoy" />
                <p class="text-[1.3rem] leading-[1.1]"><?php the_field('how_it_works_section_step_4'); ?></p>
            </div>
        </div>
    </div>
</section>