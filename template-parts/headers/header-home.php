<?php 
$banner_home = get_field('banner_home');
$item_cta_banner_home = get_field('item_cta_banner_home');
$i = 0;
$j = 0;
$descricao_cta_banner_ea = get_field('descricao_cta_banner_ea');
?>

<header class="header header--home">
  <div class="swiper swiperHeader">  
    <div class="swiper-wrapper">

      <?php foreach ((array) $banner_home as $bh) {
        ?>

      <div class="swiper-slide">
        <div class="container">
          <div class="row">
            <div class="col-md-7 order-2 order-lg-1 carousel-caption position-relative text-center text-lg-start start-0 end-0">
              <h1>
                <?php if ( $bh['titulo_banner'] ) { echo $bh['titulo_banner']; } ?>
              </h1>
              <?php if ( $bh['descricao_banner'] ) { echo $bh['descricao_banner']; } ?>

              <div>
                <a class="btn btn-md btn-outline-primary"
                  href="<?php if ( $aa['link_do_botao'] ) { echo $aa['link_do_botao']; } ?>">
                  <?php if ( $aa['texto_do_botao'] ) { echo $aa['texto_do_botao']; } ?>
                </a>
              </div>

            </div>
            <div class="col-md-5 order-1 order-lg-2 caroulsel-image">
              <img src="<?php if ($bh['imagem_banner']) { echo $bh['imagem_banner']; } else { echo get_template_directory_uri() . '/images/homem.png'; } ?>" alt="" width="100%"
                height="auto">
            </div>
          </div>
        </div>
      </div>

      <?php 
      $i++;
      $j = 0; 
      } ?>
    </div>
  </div>

 <?php
  if( is_front_page() ) {

    if ( $item_cta_banner_home ) {  ?>
  <div class="container flags">
    <div class="row align-items-center justify-content-around">
      <div
        class="agencias col mx-lg-5 d-flex flex-nowrap align-items-center justify-content-center justify-content-lg-between border border-white">
        <h3 class="order-0"><?php if ($item_cta_banner_home['titulo_cta_banner_home_esquerda']) { echo $item_cta_banner_home['titulo_cta_banner_home_esquerda']; } ?></h3>
        <p class="order-1"><?php if ($item_cta_banner_home['descricao_cta_banner_home_esquerda']) { echo $item_cta_banner_home['descricao_cta_banner_home_esquerda']; } ?></p>
      </div>
    
      <div
        class="clientes col mx-lg-5 d-flex flex-nowrap align-items-center justify-content-center justify-content-lg-between  border border-white">
        <h3 class="order-1"><?php if ($item_cta_banner_home['titulo_cta_banner_home_direita']) { echo $item_cta_banner_home['titulo_cta_banner_home_direita']; } ?></h3>
        <p class="order-0"><?php if ($item_cta_banner_home['descricao_cta_banner_home_direita']) { echo $item_cta_banner_home['descricao_cta_banner_home_direita']; } ?></p>
      </div>

    </div>
  </div>
  <?php } 

  } else { ?>
    
    <div class="container">
      <div class="col agencia">
      <div class="quote">
        <?php if($descricao_cta_banner_ea) { echo $descricao_cta_banner_ea; } ?>
      </div>
    </div>
    </div>
    </div>
  </div>
  <?php } ?>

</header>

<script>
jQuery(document).ready(function() {
  const swiper = new Swiper('.swiperHeader', {
    // Optional parameters
    loop: false,
    slidesPerView: 1,  
  });

});
</script>