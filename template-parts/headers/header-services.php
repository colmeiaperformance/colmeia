<?php 
$banner_serv = get_field('banner_serv');
$a = 0;
$b = 0;
?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<header class="header header--services" style="background: #30719A;padding: 65px 0 30px 0;">
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

      <?php foreach ((array) $banner_serv as $bs) { ?>

      <div class="carousel-item<?php if ($a == 0) { echo ' active'; } ?>">
        <div class="container">
          <div class="row" style="padding-bottom:0;">
            <div
              class="col-lg-7 order-2 order-lg-1 carousel-caption position-relative text-center text-lg-start start-0 end-0 pe-lg-5">
              <h1 class="text-bold">
                <?php if ( $bs['titulo_st'] ) { echo $bs['titulo_st']; } ?>
              </h1>
              <?php if ( $bs['descricao_st'] ) { echo $bs['descricao_st']; } ?>

              <div><a class="btn btn-md btn-outline-primary"
                  href="<?php if ( $bs['link_botao_st'] ) { echo $bs['link_botao_st']; } ?>"><?php if ( $bs['texto_botao_st'] ) { echo $bs['texto_botao_st']; } ?></a>
              </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 caroulsel-image text-center">
              <img src="<?php if ( $bs['imagem_st'] ) { echo $bs['imagem_st']; } ?>" alt="" width="100%" height="auto">
            </div>
          </div>
        </div>
      </div>

      <?php 
  $a++;
  $b = 0;
  } ?>
    </div>

    <div class="carousel-indicators">

      <?php
      $k = 0;
      while ($k < $a) { ?>
        
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="<?php echo $k; ?>" class="<?php if ($k == 0 ) { echo 'active'; } ?>" aria-label="Slide <?php echo $k + 1;?>"></button>

      <?php
      $k++;
      }
      ?>
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
</header>