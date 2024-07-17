<section id="hero" class="relative flex flex-col w-full h-full overflow-hidden">
    <div class="hero-video-container h-[320px] md:h-full md:absolute top-0 left-0">
        <video class="hero-video object-cover" autoplay loop muted playsinline preload="none">
            <source src="https://cdn.sanity.io/files/jf30o7wb/production/930090e1d091f32ab79c1d795a86a30ec092ab53.mp4" type="video/mp4">
        </video>
    </div>
    <div class="z-20 flex w-full md:h-[85dvh] lg:h-[100dvh]">
        <div class="bg-white md:bg-transparent flex flex-col w-full justify-center text-white h-fit md:h-full self-end max-w-none md:max-w-[75%] xl:max-w-[45%] gap-4 py-10 px-6 md:px-12">
            <div class="text-black md:text-white flex flex-col items-center md:items-start hero-text text-7xl xl:text-8xl relative">
                <p class="flex leading-[1] text-4xl md:text-7xl xl:text-8xl"><?php the_field('hero_section_title_line_1'); ?></p>
                <div class="w-full relative">
                    <p id="word-0" class="rotating-word text-center md:text-left text-6xl md:text-7xl xl:text-8xl leading-[1] opacity-100 transition-opacity duration-500"><?php the_field('hero_section_rotating_word_1'); ?></p>
                    <p id="word-1" class="rotating-word absolute left-1/2 transform -translate-x-1/2 top-0 md:left-0 md:translate-x-0 text-6xl md:text-7xl xl:text-8xl leading-[1] opacity-0 transition-opacity duration-500"><?php the_field('hero_section_rotating_word_2'); ?></p>
                    <p id="word-2" class="rotating-word absolute left-1/2 transform -translate-x-1/2 top-0 md:left-0 md:translate-x-0 text-6xl md:text-7xl xl:text-8xl leading-[1] opacity-0 transition-opacity duration-500"><?php the_field('hero_section_rotating_word_3'); ?></p>
                    <p id="word-3" class="rotating-word absolute left-1/2 transform -translate-x-1/2 top-0 md:left-0 md:translate-x-0 text-6xl md:text-7xl xl:text-8xl leading-[1] opacity-0 transition-opacity duration-500"><?php the_field('hero_section_rotating_word_4'); ?></p>
                    <p id="word-4" class="rotating-word absolute left-1/2 transform -translate-x-1/2 top-0 md:left-0 md:translate-x-0 text-6xl md:text-7xl xl:text-8xl leading-[1] opacity-0 transition-opacity duration-500"><?php the_field('hero_section_rotating_word_5'); ?></p>
                </div>
            </div>
            <p class="text-black text-center md:text-left md:text-white md:text-xl"><?php the_field('hero_section_title_line_2'); ?></p>
            <div class="flex flex-col md:flex-row gap-4">
                <button class="hidden md:flex items-center gap-2 border border-2 border-white bg-vitality-green bg-white text-black rounded-full px-6 py-3 text-xl transition-all duration-300 hover:bg-vitality-green-hover hover:border-vitality-green-hover">
                    <span><?php the_field('hero_section_button_text_1'); ?></span>
                    <span class="flex w-6 h-6">
                        <?php include_svg('arrow-icon.svg'); ?>
                    </span>
                </button>
                <a href="<?php echo get_permalink(get_page_by_path('what-is-ag1')); ?>" class="visited:text-current hidden md:flex border border-2 border-white bg-transparent text-white md:text-vitality-green rounded-full px-6 py-3 text-xl transition-all duration-300 hover:bg-vitality-green-hover hover:border-vitality-green-hover hover:text-black">
                    <span><?php the_field('hero_section_button_text_2'); ?></span>
                </a>
                <button class="flex md:hidden items-center justify-center gap-2 border-2 border-vitality-green bg-vitality-green text-white md:bg-white rounded-full px-6 py-3 text-lg transition-all duration-300 hover:bg-vitality-green-hover hover:text-black hover:border-vitality-green-hover">
                    <span><?php the_field('hero_section_button_text_1'); ?></span>
                    <span class="flex w-6 h-6">
                        <?php include_svg('arrow-icon.svg'); ?>
                    </span>
                </button>
                <a href="<?php echo get_permalink(get_page_by_path('what-is-ag1')); ?>" class="visited:text-vitality-green flex items-center justify-center md:hidden border-2 border-vitality-green bg-transparent text-vitality-green rounded-full px-6 py-3 text-lg transition-all duration-300 hover:border-vitality-green-hover hover:bg-vitality-green-hover hover:text-black">
                    <span><?php the_field('hero_section_button_text_2'); ?></span>
                </a>
            </div>
        </div>
    </div>
</section>