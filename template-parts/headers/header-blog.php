<?php 
$titulo_blog = get_field('titulo_blog');
?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<header class="header--blog">
  <div class="container position-relative overflow-hidden">
    <div class="col p-lg-5 text-center">
      <h1><?php if ($titulo_blog) { echo $titulo_blog; } ?></h1>
    </div>
  </div>
</header>