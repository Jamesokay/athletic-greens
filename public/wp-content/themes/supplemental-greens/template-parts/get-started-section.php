<section id="get-started" class="bg-vitality-grey-light flex py-10 px-6 md:px-20 md:py-20">
    <div class="flex flex-col items-center gap-8 fade-in-up">
        <h1 class="flex lg:hidden text-3xl md:text-4xl leading-[1] m-0"><?php the_field('get_started_section_title_line'); ?></h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 w-full">
            <div class="order-2 lg:order-1 flex flex-col gap-10 lg:pr-24">
                <h1 class="hidden lg:flex text-4xl 2xl:text-[3.25rem] leading-[1] m-0"><?php the_field('get_started_section_title_line'); ?></h1>
                <div class="flex flex-col">
                    <div class="flex flex-col pb-3.5 border-b border-1 border-vitality-grey">
                        <div class="flex justify-between font-medium md:text-lg">
                            <p><?php the_field('get_started_section_order_item_1'); ?></p>
                            <p><?php the_field('get_started_section_order_item_1_price'); ?></p>
                        </div>
                        <p class="text-sm text-vitality-grey-dark"><?php the_field('get_started_section_order_item_1_description'); ?></p>
                    </div>
                    <div class="flex flex-col py-3.5 gap-3.5 border-b border-1 border-vitality-grey">
                        <p class="text-xs text-vitality-grey-dark"><?php the_field('get_started_section_order_additional_items'); ?></p>
                        <div class="flex flex-col">
                            <div class="flex justify-between md:text-lg">
                                <p class="font-medium"><?php the_field('get_started_section_order_additional_item_1_title'); ?></p>
                                <div class="flex gap-2"><span class="text-vitality-grey-medium line-through"><?php the_field('get_started_section_order_additional_item_1_old_price'); ?></span><span class="font-medium"><?php the_field('get_started_section_order_additional_item_1_new_price'); ?></span></div>
                            </div>
                            <p class="text-sm text-vitality-grey-dark"><?php the_field('get_started_section_order_additional_item_1_description'); ?></p>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex justify-between md:text-lg">
                                <p class="font-medium"><?php the_field('get_started_section_order_additional_item_2_title'); ?></p>
                                <div class="flex gap-2"><span class="text-vitality-grey-medium line-through"><?php the_field('get_started_section_order_additional_item_1_old_price'); ?></span><span class="font-medium"><?php the_field('get_started_section_order_additional_item_1_new_price'); ?></span></div>
                            </div>
                            <p class="text-sm text-vitality-grey-dark"><?php the_field('get_started_section_order_additional_item_2_description'); ?></p>
                        </div>
                    </div>
                    <div class="flex justify-between pt-3.5 md:text-lg">
                        <p class="font-medium">Total</p>
                        <div class="flex gap-2"><span class="text-vitality-grey-medium line-through"><?php the_field('get_started_section_order_total_old_price'); ?></span><span class="font-medium"><?php the_field('get_started_section_order_total_new_price'); ?></span></div>
                    </div>
                    <button class="flex justify-center mt-8 md:mt-12 mb-4 rounded-full w-full py-3 md:py-4 text-lg md:text-xl text-white border-none bg-vitality-green transition-colors duration-300 hover:bg-vitality-green-hover hover:border-none hover:text-black">
                        <?php the_field('get_started_section_button_text'); ?>
                    </button>
                    <div class="flex gap-2 items-center justify-center w-full">
                        <p class="md:text-lg font-light">HSA/FSA eligible with</p>
                        <img loading="lazy" class="w-[100px]" src="https://drinkag1.com/trumed_logo.png" alt="Truemed Logo" />
                    </div>
                    <div class="flex flex-col md:flex-row w-full items-center justify-center gap-4 mt-8">
                        <div class="flex items-center gap-2">
                            <div class="w-4 h-4">
                                <?php include_svg('tick-icon.svg'); ?>
                            </div>
                            <p class="text-xs"><?php the_field('get_started_section_money_back_guarantee'); ?></p>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-4 h-4">
                                <?php include_svg('tick-icon.svg'); ?>
                            </div>
                            <p class="text-xs"><?php the_field('get_started_section_update_or_cancel'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-1 lg:order-2 flex h-full items-center">
                <picture>
                    <source srcset="https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=512&amp;fm=webp&amp;fit=max 512w, https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=1024&amp;fm=webp&amp;fit=max 1024w, https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=1536&amp;fm=webp&amp;fit=max 1536w, https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=2048&amp;fm=webp&amp;fit=max 2048w" type="image/webp">
                    <img srcset="https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=512&amp;fm=pjpg&amp;fit=max 512w, https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=1024&amp;fm=pjpg&amp;fit=max 1024w, https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=1536&amp;fm=pjpg&amp;fit=max 1536w, https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=2048&amp;fm=pjpg&amp;fit=max" class="ag-2m3" loading="lazy" alt="AG1 pouch, bottle, travel packs, scoop and canister">
                </picture>
            </div>
        </div>
        <div class="grid gap-8 justify-center w-full xl:w-[80%] mt-10 grid-cols-2 md:grid-cols-3 lg:grid-cols-6">
            <div class="flex gap-2 items-center">
                <div class="w-6 h-6">
                    <?php include_svg('tick-icon.svg'); ?>
                </div>
                <p class="text-sm"><?php the_field('get_started_section_feature_1'); ?></p>
            </div>
            <div class="flex gap-2 items-center">
                <div class="w-6 h-6">
                    <?php include_svg('tick-icon.svg'); ?>
                </div>
                <p class="text-sm"><?php the_field('get_started_section_feature_2'); ?></p>
            </div>
            <div class="flex gap-2 items-center">
                <div class="w-6 h-6">
                    <?php include_svg('tick-icon.svg'); ?>
                </div>
                <p class="text-sm"><?php the_field('get_started_section_feature_3'); ?></p>
            </div>
            <div class="flex gap-2 items-center">
                <div class="w-6 h-6">
                    <?php include_svg('tick-icon.svg'); ?>
                </div>
                <p class="text-sm"><?php the_field('get_started_section_feature_4'); ?></p>
            </div>
            <div class="flex gap-2 items-center">
                <div class="w-6 h-6">
                    <?php include_svg('tick-icon.svg'); ?>
                </div>
                <p class="text-sm"><?php the_field('get_started_section_feature_5'); ?></p>
            </div>
            <div class="flex gap-2 items-center">
                <div class="w-6 h-6">
                    <?php include_svg('tick-icon.svg'); ?>
                </div>
                <p class="text-sm"><?php the_field('get_started_section_feature_6'); ?></p>
            </div>
        </div>
    </div>
</section>