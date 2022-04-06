<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<?php get_template_part('template-parts/headers/header-home'); ?>
<main>
    <?php get_template_part( 'template-parts/flexible-content' ) ?>
    <?php get_template_part('template-parts/sections/services'); ?>
</main>
<?php get_footer() ?>