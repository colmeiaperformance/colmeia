<?php 
$titulo_met = get_sub_field('titulo_met');
$imagem_met = get_sub_field('imagem_met');
$video_met = get_sub_field('video_met');
$cta_met = get_sub_field('cta_met');
?>
<section class="metodology">
  <div class="container">
    <h2><?php if ($titulo_met) { echo $titulo_met; } ?></h2>
    <div class="row align-items-center justify-ceontent-center">
      <div class="col col-lg-5 d-none d-lg-block">
        <img class="img-fluid" src="<?php if ($imagem_met) { echo $imagem_met; } ?>" alt="Metodologia" />
      </div>
      <div class="col col-lg-7 video">
        <?php if ($video_met) { echo $video_met; } ?>
      </div>
    </div>
    <div class="cta d-lg-flex justify-content-between align-items-center mt-2 mt-lg-5">
      <p><?php if ($cta_met['descricao_cta_met']) { echo $cta_met['descricao_cta_met']; } ?></p>
      <a href="<?php if ($cta_met['url_botao_cta_met']) { echo $cta_met['url_botao_cta_met']; } else { echo '#'; } ?>"
        class="btn"><?php if ($cta_met['texto_botao_cta_met']) { echo $cta_met['texto_botao_cta_met']; } ?></a>
    </div>
  </div>
</section>