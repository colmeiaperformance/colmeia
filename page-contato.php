<?php
$imagem_de_fundo_c = get_field('imagem_de_fundo_c');
$cor_do_fundo_c = get_field('cor_do_fundo_c');
$subtitulo_c = get_field('subtitulo_c');
$titulo_c = get_field('titulo_c');
$texto_c = get_field('texto_c');
$formulario_c = get_field('formulario_c');
?>

<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<main class="page-contact" style="background: <?php if ($cor_do_fundo_c) { echo $cor_do_fundo_c; } ?> url('<?php if ($imagem_de_fundo_c) { echo $imagem_de_fundo_c; } ?>') center center no-repeat; background-size: cover;">
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="col-12 col-lg-6 pe-lg-5">
        <h1 class="d-none">Contato</h1>
        <h2><?php if ( $subtitulo_c ) { echo $subtitulo_c; } ?></br>
        <strong><?php if ( $titulo_c ) { echo $titulo_c; } ?></strong></h2>
        <?php if ( $texto_c ) { echo $texto_c; } ?>
      </div>
      <div class="col-12 col-lg-6 ps-lg-5">
        <?php if ( $formulario_c ) { echo $formulario_c; } ?>
      </div>
    </div>
  </div>
  </div>
</main>
<?php get_footer();