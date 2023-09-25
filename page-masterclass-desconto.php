<?php
/**
* Template name: Masterclass Desconto
*/

get_header(); ?>
<main class="page-masterclass-desconto">
  <section class="masterclass-desconto-header container-fluid gx-0">
    <header class="py-5">
      <div class="header-extra py-5 px-4">
        <div class="container">
          <div class="row">
            <h2 class="header-badge">
              <strong>Novo</strong> curso:
            </h2>
          </div>
          <div class="header-title-container col-12 col-lg-6">
            <div class="row">
              <h1 class="header-title">"Marketing Digital para o Setor de Energia"</h1>
            </div>
            <div class="row header-description">
              Aprenda a conquistar a energia das vendas: aquisição inteligente, awareness estratégico e marca forte.
            </div>
          </div>
        </div>
      </div>
    </header>
  </section>
  <section id="masterclass-form" class="masterclass-form container-fluid px-4">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
          <!-- <h2 class="form-title pt-5">
          </h2> -->
          <p class="form-subtitle col-12 pb-3 pt-5 py-lg-5">
            Preencha o <strong>formulário abaixo</strong> para receber condições especiais e mais informações sobre o
            <strong>curso e o mercado de energia</strong>.
          </p>
        </div>
        <div class="col-12 col-lg-6 text-center">
          <img class="form-img img-fluid d-none d-lg-block mx-auto"
            src="<?php echo get_template_directory_uri() . '/images/masterclass/elipse2.png'; ?>"
            alt="">
        </div>
      </div>

      <?php get_template_part('/template-parts/forms/form-masterclass-desconto'); ?>

    </div>
  </section>
</main>


<?php wp_footer(); ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NG9C76V" height="0" width="0"
    style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

</html>