<?php get_header(); ?>
  <?php get_template_part('template-parts/navbar'); ?>
  <?php get_template_part('template-parts/breadcrumb'); ?>
<main class="page-sobre">
 <h1 class="d-none">Sobre nós</h1>
  <div class="container">
    <div class="row">
      <div class="col col-12">
        <div class="row d-flex">
          <div class="col-12 col-lg-6 image">        
            <img src=<?php echo get_template_directory_uri() . '/images/sobre/sobre.png' ?> alt="Sobre">            
           </div>
           <div class="col-12 col-lg-6 text">
              <div class="box">
                <h2>Quem somos?</h2>
                <p>Com 7 anos de experiência, <Strong>a Colmeia</Strong> atende empresas <Strong>nacionais</Strong> e <strong>multinacionais</strong> de pequeno e grande porte. Também atuamos como parceiros de <Strong>agências de publicidade e comunicação</Strong> oferecendo performance e criatividade com foco em alavancar resultados.</p>
              </div>
           </div>
        </div>
      </div>

      <div class="col col-12">
        <div class="row d-flex">
          <div class="col-12 col-lg-6 image">        
            <img src=<?php echo get_template_directory_uri() . '/images/sobre/sobre.png' ?> alt="Sobre">            
           </div>
           <div class="col-12 col-lg-6 text">
              <div class="box">
                <p>Juntar os parceiros <strog>certos</strog> e ter uma <strong>visão integrada</strong> do ambiente digital, que potencializa a criatividade e aprofunda o conhecimento, é a <strong>nova fórmula do sucesso</strong> para uma gestão de marketing <stromg>eficiente</stromg>, sem <Stromg>desperdício</Stromg> de forças e recursos financeiros. É aí que nossa expertise se encaixa.</p>
              </div>
           </div>
        </div>
      </div>

      <div class="col col-12">
        <div class="row d-flex">
          <div class="col-12 col-lg-6 image">        
            <img src=<?php echo get_template_directory_uri() . '/images/sobre/sobre.png' ?> alt="Sobre">            
           </div>
           <div class="col-12 col-lg-6 text">
              <div class="box">
                <p>Nossa aposta é em colaboração e complementaridade: um <strong>ecossistema</strong> que junta diferentes expertises para oferecer um portfólio <strong>amplo</strong> e <strong>efetivo</strong>, com a profundidade de conhecimento que cada área exige, tendo o cliente como centro das soluções oferecidas.</p>
              </div>
           </div>
        </div>
      </div>

    </div>
  </div>
  <div class="quote">
    <img src=<?php echo get_template_directory_uri() . '/images/sobre/sobre-quote.png' ?> alt="Sobre">
      <div class="container">
        <p>“Nossa missão é reunir o que existe de melhor em estratégia e produção de conteúdo, ferramentas de mensuração e tecnologias de automação. Após vinte anos de carreira na área de marketing, em empresas de referência como a Coca-Cola Company, Nielsen, Enel e em agências, como DIA Comunicação, estruturei a Colmeia como um verdadeiro hub de inteligência, com foco em performance digital.”</p>
        <h4>Fernando Terra - Sócio da Colmeia</h4>
    </div>
  </div>
  <?php get_template_part('template-parts/sections/blog'); ?>
</main>
<?php get_footer();