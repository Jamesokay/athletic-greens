<section id="features" class="py-10 md:py-20 bg-vitality-beige lg:bg-white">
    <div class="flex justify-between md:px-20">
        <div class="hidden lg:flex flex-col flex-1 pr-6 2xl:pr-0 2xl:max-w-[27.5%] gap-6 fade-in-up">
            <h2 class="text-4xl 2xl:text-[3.25rem] leading-[1]"><?php the_field('features_section_title_line'); ?></h2>
            <p class="text-xl 2xl:text-2xl font-light"><?php the_field('features_section_body_text'); ?></p>
            <p class="text-xl 2xl:text-2xl font-medium"><?php the_field('features_section_bold_text'); ?></p>
        </div>
        <div class="flex flex-col bg-vitality-beige">
            <div class="flex lg:hidden flex-col flex-1 mx-6 pb-4 gap-6 border-b border-vitality-grey fade-in-up">
                <h2 class="text-4xl leading-[1]"><?php the_field('features_section_title_line'); ?></h2>
                <p class="text-xl font-light"><?php the_field('features_section_body_text'); ?></p>
                <p class="text-xl font-medium"><?php the_field('features_section_bold_text'); ?></p>
                <p><?php the_field('features_section_list_title'); ?></p>
            </div>
            <div class="flex">
                <img loading="lazy" class="w-[180px] h-[395px] md:w-[280px] md:h-[576px] 2xl:w-[414px] 2xl:h-[848px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/AG1-bottle.webp" alt="AG1 bottle" />
                <div class="flex flex-col items-center pt-[50px] md:pr-[60px] xl:pr-[112px] xl:pt-[150px] xl:pb-[150px] fade-in-up">
                    <p class="hidden lg:flex text-l font-light mb-4"><?php the_field('features_section_list_title'); ?></p>
                    <ul class="m-0 md:ml-12 list-none text-sm md:text-xl font-light">
                        <li class="mb-3 md:mb-2">— <?php the_field('list_item_1'); ?></li>
                        <li class="mb-3 md:mb-2">— <?php the_field('list_item_2'); ?></li>
                        <li class="mb-3 md:mb-2">— <?php the_field('list_item_3'); ?></li>
                        <li class="mb-3 md:mb-2">— <?php the_field('list_item_4'); ?></li>
                        <li class="mb-3 md:mb-2">— <?php the_field('list_item_5'); ?></li>
                        <li class="mb-3 md:mb-2">— <?php the_field('list_item_6'); ?></li>
                        <li class="mb-3 md:mb-2">— <?php the_field('list_item_7'); ?></li>
                        <li class="mb-3 md:mb-2">— <?php the_field('list_item_8'); ?></li>
                        <li>— <?php the_field('list_item_9'); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>