<?php 
$imagem_mobile_qs = get_field('imagem_mobile_qs');
$card_imagem_qs = get_field('card_imagem_qs');
$citacao_qs = get_field('citacao_qs');
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<?php get_template_part('template-parts/breadcrumb'); ?>
<main class="page-sobre">
  <h1 class="d-none">Sobre nós</h1>
  <div class="container">
    <div class="row">


      <?php foreach ($card_imagem_qs as $ci) {
      
      if ( $ci['posicao_da_imagem'] == 'right' ) { ?>

      <div class="col col-12">
        <div class="row d-flex">
          <div class="col-12 col-lg-6 image order-1">
            <img src="<?php if ($ci['imagem']) { echo $ci['imagem']; } ?>" alt="Sobre">
          </div>
          <div class="col-12 col-lg-6 text order-2">
            <div class="box">
              <h2><?php if ($ci['titulo']) { echo $ci['titulo']; } ?></h2>
              <?php if ($ci['texto']) { echo $ci['texto']; } ?>
            </div>
          </div>
        </div>
      </div>

      <?php }elseif ( $ci['posicao_da_imagem'] == 'left' ) { ?>

      <div class="col col-12">
        <div class="row d-flex">
          <div class="col-12 col-lg-6 image order-2">
            <img src="<?php if ($ci['imagem']) { echo $ci['imagem']; } ?>" alt="Sobre">
          </div>
          <div class="col-12 col-lg-6 text order-1">
            <div class="box">
              <h2><?php if ($ci['titulo']) { echo $ci['titulo']; } ?></h2>
              <?php if ($ci['texto']) { echo $ci['texto']; } ?>
            </div>
          </div>
        </div>
      </div>

      <?php }

    } ?>


      <!-- <div class="col col-12">
        <div class="row d-flex">
          <div class="col-12 col-lg-6 image order-1">
            <img src=<?php //echo get_template_directory_uri() . '/images/sobre/sobre.png' ?> alt="Sobre">
          </div>
          <div class="col-12 col-lg-6 text order-2">
            <div class="box">
              <h2>Quem somos?</h2>
              <p>Com 7 anos de experiência, <Strong>a Colmeia</Strong> atende empresas <Strong>nacionais</Strong> e
                <strong>multinacionais</strong> de pequeno e grande porte. Também atuamos como parceiros de
                <Strong>agências de publicidade e comunicação</Strong> oferecendo performance e criatividade com foco em
                alavancar resultados.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col col-12">
        <div class="row d-flex">
          <div class="col-12 col-lg-6 image order-2">
            <img src=<?php //echo get_template_directory_uri() . '/images/sobre/sobre.png' ?> alt="Sobre">
          </div>
          <div class="col-12 col-lg-6 text order-1">
            <div class="box">
              <p>Juntar os parceiros <strog>certos</strog> e ter uma <strong>visão integrada</strong> do ambiente
                digital, que potencializa a criatividade e aprofunda o conhecimento, é a <strong>nova fórmula do
                  sucesso</strong> para uma gestão de marketing <stromg>eficiente</stromg>, sem <Stromg>desperdício
                </Stromg> de forças e recursos financeiros. É aí que nossa expertise se encaixa.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col col-12">
        <div class="row d-flex">
          <div class="col-12 col-lg-6 image order-1">
            <img src=<?php //echo get_template_directory_uri() . '/images/sobre/sobre.png' ?> alt="Sobre">
          </div>
          <div class="col-12 col-lg-6 text order-2">
            <div class="box">
              <p>Nossa aposta é em colaboração e complementaridade: um <strong>ecossistema</strong> que junta diferentes
                expertises para oferecer um portfólio <strong>amplo</strong> e <strong>efetivo</strong>, com a
                profundidade de conhecimento que cada área exige, tendo o cliente como centro das soluções oferecidas.
              </p>
            </div>
          </div>
        </div>
      </div> -->

    </div>
  </div>

  <?php if( have_rows('citacao_qs') ): ?>
  <?php while( have_rows('citacao_qs') ): the_row(); ?>
  <div class="quote">
    <img src=<?php echo get_template_directory_uri() . '/images/sobre/sobre-quote.png' ?> alt="Sobre">
    <div class="container">
      <?php if ($citacao_qs['texto_da_citacao']) { echo $citacao_qs['texto_da_citacao']; } ?>
      <h4><?php if ($citacao_qs['autor']) { echo $citacao_qs['autor']; } ?> <?php if ($citacao_qs['cargo']) { echo '- ' . $citacao_qs['cargo']; } ?></h4>
    </div>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>

  <?php get_template_part('template-parts/sections/blog'); ?>
</main>
<?php get_footer();