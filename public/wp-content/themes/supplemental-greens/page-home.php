<?php

/**
 * Template Name: Home Page
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- Hero Section -->
    <section id="hero" class="relative flex w-full">
        <video autoplay loop muted preload="none">
            <source src="https://cdn.sanity.io/files/jf30o7wb/production/930090e1d091f32ab79c1d795a86a30ec092ab53.mp4">
        </video>
        <div class="absolute top-0 left-0 z-20 flex w-full h-full px-12">
            <div class="flex flex-col justify-center text-white max-w-[41%] gap-4">
                <div class="flex flex-col hero-text text-8xl">
                    <p class="leading-[1]">We're here to</p>
                    <p class="leading-[1]">help you feel</p>
                    <p id="rotating-word" class="leading-[1]">energized</p>
                </div>
                <p class="text-xl">AG1 is a daily Foundational Nutrition supplement that supports whole body health.</p>
                <div class="flex gap-4">
                    <button class="flex items-center gap-2 border border-2 border-white bg-white text-black rounded-full px-6 py-3 text-xl hover:border-white">
                        <span>Get your AG1 today</span>
                        <span class="flex w-6 h-6">
                            <?php include_svg('arrow-icon.svg'); ?>
                        </span>
                    </button>
                    <button class="border border-2 border-white bg-transparent text-white rounded-full px-6 py-3 text-xl hover:border-white">
                        <span>What is AG1?</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20">
        <div class="flex justify-between px-20">
            <div class="flex flex-col max-w-[27.5%] gap-6">
                <h2 class="text-[3.25rem] leading-[1]">More-in-one nutrition</h2>
                <p class="text-2xl font-light">AG1 is designed to replace multiple supplements by covering nutritional gaps with a comprehensive blend of nutrients. Just one tasty scoop each day helps meet your foundational health needs.</p>
                <p class="text-2xl font-medium">Simply put, it’s a way to invest in your health now and in the long run.</p>
            </div>
            <div class="flex bg-vitality-beige">
                <div class="w-[414px] h-[848px]">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/AG1-bottle.webp" />
                </div>
                <div class="flex flex-col items-center pr-[112px] pt-[150px] pb-[150px]">
                    <p class="text-l font-light mb-4">AG1 CONTAINS YOUR</p>
                    <ul class="list-none text-xl font-light">
                        <li>— Multivitamin</li>
                        <li>— Multimineral</li>
                        <li>— Stress adaptogens</li>
                        <li>— Prebiotics</li>
                        <li>— Probiotics</li>
                        <li>— Antioxidants</li>
                        <li>— Superfoods</li>
                        <li>— Functional mushrooms</li>
                        <li>— Digestive enzymes</li>
                    </ul>
                </div>

            </div>

        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20">
        <div class="grid grid-cols-1 gap-y-8 px-20 md:grid-cols-2 lg:grid-cols-3">
            <div class="flex items-center px-4">
                <img class="h-9 w-9 mr-6" src="https://cdn.sanity.io/images/jf30o7wb/production/cf299b71bab75fff4fa1c458cabc60ad9d320f66-32x36.svg" alt="Lamp icon" />
                <p class="text-[1.3rem] leading-[1.1]">Science-driven nutrition <br> supplement</p>
            </div>
            <div class="flex items-center px-4">
                <img class="h-9 w-9 mr-6" src="https://cdn.sanity.io/images/jf30o7wb/production/c4cab89fc822ed918a26fb4e4275632dd3abf6cb-40x40.svg" alt="Ingredients icon" />
                <p class="text-[1.3rem] leading-[1.1]">75 ingredients your body <br> can easily absorb</p>
            </div>
            <div class="flex items-center px-4">
                <img class="h-9 w-9 mr-6" src="https://cdn.sanity.io/images/jf30o7wb/production/f269322de778c178f8e2018869b37689a3e7c206-40x40.svg" alt="Safety icon" />
                <p class="text-[1.3rem] leading-[1.1]">Third-party certified <br> for safety</p>
            </div>
            <div class="flex items-center px-4">
                <img class="h-9 w-9 mr-6" src="https://cdn.sanity.io/images/jf30o7wb/production/0d1de9c4acc6bd7e2878e2b4dde4d4096718ada3-40x40.svg" alt="Sweeteners icon" />
                <p class="text-[1.3rem] leading-[1.1]">Optimized for flavor without <br> artificial sweeteners</p>
            </div>
            <div class="flex items-center px-4">
                <img class="h-10 w-10 mr-6" src="https://cdn.sanity.io/images/jf30o7wb/production/55f73009e2d58186b8ac1983aadfb22cf1f495ff-40x42.svg" alt="Ribbon icon" />
                <p class="text-[1.3rem] leading-[1.1]">Trusted by leading doctors <br> and scientists</p>
            </div>
            <div class="flex items-center px-4">
                <img class="h-9 w-9 mr-6" src="https://cdn.sanity.io/images/jf30o7wb/production/b099434bf57baa147ab7236eaad5bce7f2f09b36-40x40.svg" alt="Iteration icon" />
                <p class="text-[1.3rem] leading-[1.1]">Continuously <br> improved since 2010</p>
            </div>
        </div>

    </section>

    <!-- How it Works Section -->
    <section id="how-it-works" class="flex flex-col p-20 gap-8">
        <h1 class="text-[3.25rem] leading-[1]">Here's how AG1 works</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
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
    </section>

    <!-- Get Started Section -->
    <section id="how-it-works" class="bg-vitality-grey-light flex flex-col p-20 gap-8">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="flex flex-col gap-10 md:pr-24">
                <h1 class="text-[3.25rem] leading-[1] m-0">Get started with your AG1 Welcome Kit</h1>
                <div class="flex flex-col">
                    <div class="flex flex-col pb-3.5 border-b border-1 border-vitality-grey">
                        <div class="flex justify-between font-semibold text-lg">
                            <p>AG1 Pouch</p>
                            <p>$79/mo USD</p>
                        </div>
                        <p class="text-sm text-vitality-grey-dark">30 day supply per pouch, ships every 30 days</p>
                    </div>
                    <div class="flex flex-col py-3.5 gap-3.5 border-b border-1 border-vitality-grey">
                        <p class="text-xs text-vitality-grey-dark">FIRST TIME PURCHASE INCLUDES:</p>
                        <div class="flex flex-col">
                            <div class="flex justify-between text-lg">
                                <p class="font-semibold">Welcome Kit</p>
                                <div class="flex gap-2"><span class="text-vitality-grey-medium line-through">$28</span><span class="font-semibold">Free</span></div>
                            </div>
                            <p class="text-sm text-vitality-grey-dark">AG1 Shaker, Scoop and Canister</p>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex justify-between text-lg">
                                <p class="font-semibold">AG1 Travel Packs (5 count)</p>
                                <div class="flex gap-2"><span class="text-vitality-grey-medium line-through">$18</span><span class="font-semibold">Free</span></div>
                            </div>
                            <p class="text-sm text-vitality-grey-dark">5 individual servings</p>
                        </div>
                    </div>
                    <div class="flex justify-between pt-3.5 text-lg">
                        <p class="font-semibold">Total</p>
                        <div class="flex gap-2"><span class="text-vitality-grey-medium line-through">$126</span><span class="font-semibold">$79/mo USD</span></div>
                    </div>
                    <button class="flex justify-center mt-12 mb-4 rounded-full w-full py-4 text-xl text-white border-none bg-vitality-green transition-all duration-300 hover:bg-vitality-green-hover hover:border-none hover:text-black">Buy AG1 Now</button>
                    <div class="flex gap-2 items-center justify-center w-full">
                        <p class="text-lg font-light">HSA/FSA eligible with</p>
                        <img class="w-[100px]" src="https://drinkag1.com/trumed_logo.png" alt="Truemed Logo" />
                    </div>
                </div>
            </div>
            <div class="flex h-full items-center">
                <picture>
                    <source srcset="https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=512&amp;fm=webp&amp;fit=max 512w, https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=1024&amp;fm=webp&amp;fit=max 1024w, https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=1536&amp;fm=webp&amp;fit=max 1536w, https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=2048&amp;fm=webp&amp;fit=max 2048w" type="image/webp"><img srcset="https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=512&amp;fm=pjpg&amp;fit=max 512w, https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=1024&amp;fm=pjpg&amp;fit=max 1024w, https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=1536&amp;fm=pjpg&amp;fit=max 1536w, https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=2048&amp;fm=pjpg&amp;fit=max 2048w" src="https://cdn.sanity.io/images/jf30o7wb/production/2bc58b1c3d1b9b89787dc245cae682e9b2acdee6-1598x1286.png?w=320&amp;fm=pjpg&amp;fit=max" class="ag-2m3" loading="lazy">
                </picture>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>