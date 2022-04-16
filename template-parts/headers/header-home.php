<?php 
$banner_home = get_field('banner_home');
$botoes_banner = get_field('botoes_banner');
$item_cta_banner_home = get_field('item_cta_banner_home');
$i = 0;
$j = 0;
$descricao_cta_banner_ea = get_field('descricao_cta_banner_ea');
?>

<header class="header header--home">
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    
    <div class="carousel-inner">

      <?php foreach ((array) $banner_home as $bh) {
        ?>

      <div class="carousel-item<?php if ($i == 0) { echo ' active'; } ?>">
        <div class="container">
          <div class="row">
            <div
              class="col-md-7 order-2 order-lg-1 carousel-caption position-relative text-center text-lg-start start-0 end-0">
              <h1>
                <?php if ( $bh['titulo_banner'] ) { echo $bh['titulo_banner']; } ?>
              </h1>
              <?php if ( $bh['descricao_banner'] ) { echo $bh['descricao_banner']; } ?>
              <div>

                <?php
                foreach ($botoes_banner as $bb) { ?>
                
                <a class="btn btn-md <?php if ( $j == 0 ) { echo 'btn-primary btn-active' . ' ' . $j;} else { echo 'btn-outline-primary' . ' ' . $j; }?>" href="<?php if ($bb['url_bb']) { echo $bb['url_bb']; } ?>">
                <?php if ($bb['texto_bb']) { echo $bb['texto_bb']; } ?>
                </a>
                  
                <?php 
                $j++;
                } ?>
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

    <div class="carousel-indicators">

      <?php
      $k = 0;
      while ($k < $i) { ?>
        
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="<?php echo $k; ?>" class="<?php if ($k == 0 ) { echo 'active'; } ?>" aria-label="Slide <?php echo $k + 1;?>"></button>

      <?php
      $k++;
      }
      ?>

      <!-- <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active"
        aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button> -->


    </div>
    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button> -->
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
    
    <div class="col agencia">
      <div class="quote">
        <?php if($descricao_cta_banner_ea) { echo $descricao_cta_banner_ea; } ?>
      </div>
    </div>
    </div>
  </div>
  <?php } ?>

</header>