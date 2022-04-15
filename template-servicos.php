<?php
/*
Template Name: Página de Serviço
*/
?>
<?php get_header(); ?>
  <?php get_template_part('template-parts/navbar'); ?>
  <?php get_template_part('template-parts/headers/header-services'); ?>
<main class="page-services">
  <?php get_template_part('template-parts/sections/services'); ?>
  <?php get_template_part('template-parts/sections/newsletter'); ?>
</main>
<?php get_footer();