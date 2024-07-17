<?php

/**
 * Template Name: Home Page
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php get_template_part('template-parts/hero-section'); ?>
    <?php get_template_part('template-parts/features-section'); ?>
    <?php get_template_part('template-parts/benefits-section'); ?>
    <?php get_template_part('template-parts/how-it-works-section'); ?>
    <?php get_template_part('template-parts/get-started-section'); ?>
    <?php get_template_part('template-parts/quality-section'); ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>