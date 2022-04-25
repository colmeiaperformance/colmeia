<?php get_header(); ?>
  <?php get_template_part('template-parts/navbar'); ?>
  <?php get_template_part('template-parts/breadcrumb'); ?>
<main class="page-sobre">


  <div class="container">
    <div class="row d-flex align-items-stretch">
      <div class="quem-somos col-lg-6 d-flex flex-column text-center text-lg-start my-5 justify-content-left align-items-left px-4">
        <div class="titulo w-lg-75">
          <h1>Quem Somos?</h1>
        </div>
        <div class="text w-lg-75">
          <p>Com 7 anos de experiência, a Colmeia atende empresas nacionais e multinacionais de pequeno e grande porte. Também atuamos como parceiros de agências de publicidade e comunicação oferecendo performance e criatividade com foco em alavancar resultados. 
            <br><br>
            A gestão de marketing por áreas que não interagem e métricas que não conversam entre si leva ao desperdício de forças e recursos financeiros e, por consequência, de competitividade. Juntar os parceiros certos e trazer uma visão integrada, que potencializa a criatividade e aprofunda o conhecimento, é a nova fórmula do sucesso. É aí que nossa expertise se encaixa. 
            <br><br>
            Nossa aposta é em colaboração e complementaridade: um ecossistema que junta diferentes expertises para oferecer um portfólio amplo e efetivo, com a profundidade de conhecimento que cada área exige, tendo o cliente como centro das soluções oferecidas. 
            
          </p>
        </div>
      </div>
      <div class="col-lg-6 d-flex justify-content-center align-items-center">
        <div class="card d-flex justify-content-center align-items-center">
          <div class="testimonial d-flex justify-content-center align-items-center text-center flex-column">
            <div class="testimonial-text px-5 py-4 mx-2 my-5">
              <p>Nossa missão é reunir o que existe de melhor em estratégia e produção de conteúdo, ferramentas de mensuração e tecnologias de automação. Após vinte anos de carreira na área de marketing, em empresas de referência como a Coca-Cola Company, Nielsen, Enel e em agências, como DIA Comunicação, estruturei a Colmeia como um verdadeiro hub de inteligência, com foco em performance digital.</p>
            </div>
            <div class="testimonial-autor w-100">
              <div class="autor-name">
                <p><b>Fernando Terra</b></p>
              </div>
              <div class="autor-cargo">
                <p>Sócio da Colmeia</p>
              </div>
            </div>
            <div class="icon">
              <img src="" alt="">
            </div>
          </div>
        </div>
      </div>      
    </div>
  </div>
  <div class="image-sobre mt-4">
    <img class="img-fluid" src="/images/sobre/sobre.png" alt="sobre">
  </div>


  <?php get_template_part('template-parts/flexible-content'); ?>
  <?php get_template_part('template-parts/sections/newsletter'); ?>
</main>
<?php get_footer();