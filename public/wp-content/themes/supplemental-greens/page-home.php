<?php

/**
 * Template Name: Home Page
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Hero Section -->
    <section id="hero" class="relative flex flex-col w-full h-full overflow-hidden">
        <div class="hero-video-container h-[320px] md:h-full md:absolute top-0 left-0">
            <video class="hero-video object-cover" autoplay loop muted preload="none">
                <source src="https://cdn.sanity.io/files/jf30o7wb/production/930090e1d091f32ab79c1d795a86a30ec092ab53.mp4">
            </video>
        </div>
        <div class=" z-20 flex w-full md:h-[85dvh] lg:h-[100dvh]">
            <div class="bg-white md:bg-transparent flex flex-col w-full justify-center text-white h-fit md:h-full self-end max-w-none md:max-w-[75%] xl:max-w-[45%] gap-4 py-10 px-6 md:px-12">
                <div class="text-black md:text-white flex flex-col items-center md:items-start hero-text text-7xl xl:text-8xl">
                    <p class="hidden md:flex leading-[1]">We're here to</p>
                    <p class="hidden md:flex leading-[1]">help you feel</p>
                    <p class="flex md:hidden leading-[1] text-4xl">We're here to help you feel</p>
                    <p id="rotating-word" class="text-6xl md:text-7xl xl:text-8xl leading-[1]">energized</p>
                </div>
                <p class="text-black text-center md:text-left md:text-white md:text-xl">AG1 is a daily Foundational Nutrition supplement that supports whole body health.*</p>
                <div class="flex flex-col md:flex-row gap-4">
                    <button class="hidden md:flex items-center gap-2 border border-2 border-white bg-vitality-green bg-white text-black rounded-full px-6 py-3 text-xl transition-all duration-300 hover:bg-vitality-green-hover hover:border-vitality-green-hover">
                        <span>Get your AG1 today</span>
                        <span class="flex w-6 h-6">
                            <?php include_svg('arrow-icon.svg'); ?>
                        </span>
                    </button>
                    <button class="hidden md:flex border border-2 border-white bg-transparent text-white rounded-full px-6 py-3 text-xl transition-all duration-300 hover:bg-vitality-green-hover hover:border-vitality-green-hover hover:text-black">
                        <span>What is AG1?</span>
                    </button>
                    <button class="flex md:hidden items-center justify-center gap-2 border-2 border-vitality-green bg-vitality-green text-white md:bg-white rounded-full px-6 py-3 text-lg transition-all duration-300 hover:bg-vitality-green-hover hover:text-black hover:border-vitality-green-hover">
                        <span>Get your AG1 today</span>
                        <span class="flex w-6 h-6">
                            <?php include_svg('arrow-icon.svg'); ?>
                        </span>
                    </button>
                    <button class="flex items-center justify-center md:hidden border-2 border-vitality-green bg-transparent text-vitality-green rounded-full px-6 py-3 text-lg transition-all duration-300 hover:border-vitality-green-hover hover:bg-vitality-green-hover hover:text-black">
                        <span>What is AG1?</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-10 md:py-20 bg-vitality-beige lg:bg-white">
        <div class="flex justify-between md:px-20">
            <div class="hidden lg:flex flex-col flex-1 pr-6 2xl:pr-0 2xl:max-w-[27.5%] gap-6 fade-in-up">
                <h2 class="text-4xl 2xl:text-[3.25rem] leading-[1]">More-in-one nutrition</h2>
                <p class="text-xl 2xl:text-2xl font-light">AG1 is designed to replace multiple supplements by covering nutritional gaps with a comprehensive blend of nutrients. Just one tasty scoop each day helps meet your foundational health needs.</p>
                <p class="text-xl 2xl:text-2xl font-medium">Simply put, it’s a way to invest in your health now and in the long run.</p>
            </div>
            <div class="flex flex-col bg-vitality-beige">
                <div class="flex lg:hidden flex-col flex-1 mx-6 pb-4 gap-6 border-b border-vitality-grey fade-in-up">
                    <h2 class="text-4xl leading-[1]">More-in-one nutrition</h2>
                    <p class="text-xl font-light">AG1 is designed to replace multiple supplements by covering nutritional gaps with a comprehensive blend of nutrients. Just one tasty scoop each day helps meet your foundational health needs.</p>
                    <p class="text-xl font-medium">Simply put, it’s a way to invest in your health now and in the long run.</p>
                    <p>AG1 CONTAINS YOUR:</p>
                </div>
                <div class="flex">
                    <img class="w-[180px] h-[395px] md:w-[280px] md:h-[576px] 2xl:w-[414px] 2xl:h-[848px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/AG1-bottle.webp" />
                    <div class="flex flex-col items-center pt-[50px] md:pr-[60px] xl:pr-[112px] xl:pt-[150px] xl:pb-[150px] fade-in-up">
                        <p class="hidden lg:flex text-l font-light mb-4">AG1 CONTAINS YOUR</p>
                        <ul class="m-0 md:ml-12 list-none text-sm md:text-xl font-light">
                            <li class="mb-3 md:mb-2">— Multivitamin</li>
                            <li class="mb-3 md:mb-2">— Multimineral</li>
                            <li class="mb-3 md:mb-2">— Stress adaptogens</li>
                            <li class="mb-3 md:mb-2">— Prebiotics</li>
                            <li class="mb-3 md:mb-2">— Probiotics</li>
                            <li class="mb-3 md:mb-2">— Antioxidants</li>
                            <li class="mb-3 md:mb-2">— Superfoods</li>
                            <li class="mb-3 md:mb-2">— Functional mushrooms</li>
                            <li>— Digestive enzymes</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-10 md:py-20">
        <div class="grid grid-cols-1 gap-y-8 px-6 md:px-20 md:grid-cols-2 lg:grid-cols-3 fade-in-up">
            <div class="flex items-center md:px-4">
                <img class="h-9 w-9 mr-6" src="https://cdn.sanity.io/images/jf30o7wb/production/cf299b71bab75fff4fa1c458cabc60ad9d320f66-32x36.svg" alt="Lamp icon" />
                <p class="text-[1.3rem] leading-[1.1]">Science-driven nutrition <br> supplement</p>
            </div>
            <div class="flex items-center md:px-4">
                <img class="h-9 w-9 mr-6" src="https://cdn.sanity.io/images/jf30o7wb/production/c4cab89fc822ed918a26fb4e4275632dd3abf6cb-40x40.svg" alt="Ingredients icon" />
                <p class="text-[1.3rem] leading-[1.1]">75 ingredients your body <br> can easily absorb</p>
            </div>
            <div class="flex items-center md:px-4">
                <img class="h-9 w-9 mr-6" src="https://cdn.sanity.io/images/jf30o7wb/production/f269322de778c178f8e2018869b37689a3e7c206-40x40.svg" alt="Safety icon" />
                <p class="text-[1.3rem] leading-[1.1]">Third-party certified <br> for safety</p>
            </div>
            <div class="flex items-center md:px-4">
                <img class="h-9 w-9 mr-6" src="https://cdn.sanity.io/images/jf30o7wb/production/0d1de9c4acc6bd7e2878e2b4dde4d4096718ada3-40x40.svg" alt="Sweeteners icon" />
                <p class="text-[1.3rem] leading-[1.1]">Optimized for flavor without <br> artificial sweeteners</p>
            </div>
            <div class="flex items-center md:px-4">
                <img class="h-10 w-10 mr-6" src="https://cdn.sanity.io/images/jf30o7wb/production/55f73009e2d58186b8ac1983aadfb22cf1f495ff-40x42.svg" alt="Ribbon icon" />
                <p class="text-[1.3rem] leading-[1.1]">Trusted by leading doctors <br> and scientists</p>
            </div>
            <div class="flex items-center md:px-4">
                <img class="h-9 w-9 mr-6" src="https://cdn.sanity.io/images/jf30o7wb/production/b099434bf57baa147ab7236eaad5bce7f2f09b36-40x40.svg" alt="Iteration icon" />
                <p class="text-[1.3rem] leading-[1.1]">Continuously <br> improved since 2010</p>
            </div>
        </div>

    </section>

    <!-- How it Works Section -->
    <section id="how-it-works" class="flex px-6 md:px-20 py-10 md:py-20">
        <div class="flex flex-col gap-8 fade-in-up">
            <h1 class="text-4xl 2xl:text-[3.25rem] leading-[1]">Here's how AG1 works</h1>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="flex flex-col gap-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/scoop.webp" alt="Scoop" />
                    <p class="text-[1.3rem] leading-[1.1]">Mix one scoop of AG1</p>
                </div>
                <div class="flex flex-col gap-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cold-water.webp" alt="Cold Water" />
                    <p class="text-[1.3rem] leading-[1.1]">With 8oz of cold water</p>
                </div>
                <div class="flex flex-col gap-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shake.webp" alt="Shake" />
                    <p class="text-[1.3rem] leading-[1.1]">Shake</p>
                </div>
                <div class="flex flex-col gap-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/enjoy.webp" alt="Enjoy" />
                    <p class="text-[1.3rem] leading-[1.1]">Enjoy the refreshing taste of pineapple and vanilla</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Get Started Section -->
    <section id="get-started" class="bg-vitality-grey-light flex py-10 px-6 md:px-20 md:py-20">
        <div class="flex flex-col items-center gap-8 fade-in-up">
            <h1 class="flex lg:hidden text-3xl md:text-4xl leading-[1] m-0">Get started with your AG1 Welcome Kit**</h1>
            <div class="grid grid-cols-1 lg:grid-cols-2 w-full">
                <div class="order-2 lg:order-1 flex flex-col gap-10 lg:pr-24">
                    <h1 class="hidden lg:flex text-4xl 2xl:text-[3.25rem] leading-[1] m-0">Get started with your AG1 Welcome Kit**</h1>
                    <div class="flex flex-col">
                        <div class="flex flex-col pb-3.5 border-b border-1 border-vitality-grey">
                            <div class="flex justify-between font-medium md:text-lg">
                                <p>AG1 Pouch</p>
                                <p>$79/mo USD</p>
                            </div>
                            <p class="text-sm text-vitality-grey-dark">30 day supply per pouch, ships every 30 days</p>
                        </div>
                        <div class="flex flex-col py-3.5 gap-3.5 border-b border-1 border-vitality-grey">
                            <p class="text-xs text-vitality-grey-dark">FIRST TIME PURCHASE INCLUDES:</p>
                            <div class="flex flex-col">
                                <div class="flex justify-between md:text-lg">
                                    <p class="font-medium">Welcome Kit</p>
                                    <div class="flex gap-2"><span class="text-vitality-grey-medium line-through">$28</span><span class="font-medium">Free</span></div>
                                </div>
                                <p class="text-sm text-vitality-grey-dark">AG1 Shaker, Scoop and Canister</p>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex justify-between md:text-lg">
                                    <p class="font-medium">AG1 Travel Packs (5 count)</p>
                                    <div class="flex gap-2"><span class="text-vitality-grey-medium line-through">$18</span><span class="font-medium">Free</span></div>
                                </div>
                                <p class="text-sm text-vitality-grey-dark">5 individual servings</p>
                            </div>
                        </div>
                        <div class="flex justify-between pt-3.5 md:text-lg">
                            <p class="font-medium">Total</p>
                            <div class="flex gap-2"><span class="text-vitality-grey-medium line-through">$126</span><span class="font-medium">$79/mo USD</span></div>
                        </div>
                        <button class="flex justify-center mt-8 md:mt-12 mb-4 rounded-full w-full py-3 md:py-4 text-lg md:text-xl text-white border-none bg-vitality-green transition-colors duration-300 hover:bg-vitality-green-hover hover:border-none hover:text-black">
                            Buy AG1 Now
                        </button>
                        <div class="flex gap-2 items-center justify-center w-full">
                            <p class="md:text-lg font-light">HSA/FSA eligible with</p>
                            <img class="w-[100px]" src="https://drinkag1.com/trumed_logo.png" alt="Truemed Logo" />
                        </div>
                        <div class="flex flex-col md:flex-row w-full items-center justify-center gap-4 mt-8">
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4">
                                    <?php include_svg('tick-icon.svg'); ?>
                                </div>
                                <p class="text-xs">90-day money back guarantee</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-4 h-4">
                                    <?php include_svg('tick-icon.svg'); ?>
                                </div>
                                <p class="text-xs">Update or cancel anytime</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="order-1 lg:order-2 flex h-full items-center">
                    <picture>
                        <source srcset="https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=512&amp;fm=webp&amp;fit=max 512w, https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=1024&amp;fm=webp&amp;fit=max 1024w, https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=1536&amp;fm=webp&amp;fit=max 1536w, https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=2048&amp;fm=webp&amp;fit=max 2048w" type="image/webp"><img srcset="https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=512&amp;fm=pjpg&amp;fit=max 512w, https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=1024&amp;fm=pjpg&amp;fit=max 1024w, https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=1536&amp;fm=pjpg&amp;fit=max 1536w, https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=2048&amp;fm=pjpg&amp;fit=max 2048w" src="https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=320&amp;fm=pjpg&amp;fit=max" class="ag-2m3" loading="lazy">
                    </picture>
                </div>
            </div>
            <div class="grid gap-8 justify-center w-full xl:w-[80%] mt-10 grid-cols-2 md:grid-cols-3 lg:grid-cols-6">
                <div class="flex gap-2 items-center">
                    <div class="w-6 h-6">
                        <?php include_svg('tick-icon.svg'); ?>
                    </div>
                    <p class="text-sm">VEGAN</p>
                </div>
                <div class="flex gap-2 items-center">
                    <div class="w-6 h-6">
                        <?php include_svg('tick-icon.svg'); ?>
                    </div>
                    <p class="text-sm">GLUTEN-FREE</p>
                </div>
                <div class="flex gap-2 items-center">
                    <div class="w-6 h-6">
                        <?php include_svg('tick-icon.svg'); ?>
                    </div>
                    <p class="text-sm">DAIRY-FREE</p>
                </div>
                <div class="flex gap-2 items-center">
                    <div class="w-6 h-6">
                        <?php include_svg('tick-icon.svg'); ?>
                    </div>
                    <p class="text-sm">NON GMO</p>
                </div>
                <div class="flex gap-2 items-center">
                    <div class="w-6 h-6">
                        <?php include_svg('tick-icon.svg'); ?>
                    </div>
                    <p class="text-sm">NO SUGAR ADDED</p>
                </div>
                <div class="flex gap-2 items-center">
                    <div class="w-6 h-6">
                        <?php include_svg('tick-icon.svg'); ?>
                    </div>
                    <p class="text-sm">NO ARTIFICIAL SWEETENERS</p>
                </div>
            </div>


        </div>
    </section>

</main>
<?php get_sidebar(); ?>
<?php
get_footer();
?>