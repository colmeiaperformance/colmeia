<?php
/**
* Template name: Masterclass
*/

get_header(); ?>
<main class="page-masterclass">
  <!-- Header -->
  <section class="container-fluid masterclass-header gx-0">
    <header>
      <div class="row header-row">
        <div class="header-image col-12 col-lg-7"
          style="background:url(<?php echo get_template_directory_uri() . '/images/masterclass/masterclass-header.jpg'?>);background-size:cover;background-repeat:no-repeat;object-position:left top;">
        </div>
        <div class="header-content col-12 col-lg-5 d-flex flex-column justify-content-end px-5 px-lg-auto">
          <div class="header-badge"><span>Novo curso</span></div>
          <div>
            <h1 class="header-title">Domine o Marketing Digital para o Setor de Energia B2B.</h1>
          </div>
        </div>
      </div>
    </header>
    <div class="divider container mt-5 mx-4 mx-md-auto"></div>
    <div class="header-extra py-5 px-4">
      <div class="container">
        <div class="row">
          <h2 class="extra-title">
            Ao final do curso, você vai:
          </h2>
        </div>
        <ul class="extra-container row pt-5">
          <div class="col-12 col-lg-6 d-flex flex-column">
            <li class="extra-item d-flex align-items-center mb-5 pt-3">
              <div class="extra-counter me-3 text-center"></div>
              <div class="extra-text">Entender o panorama do mercado de energia no Brasil em 2023 e além;</div>
            </li>
            <li class="extra-item d-flex align-items-center mb-5 pt-3">
              <div class="extra-counter me-3 text-center"></div>
              <div class="extra-text">Identificar as ferramentas de marketing digital cruciais para o setor de energia;
              </div>
            </li>
            <li class="extra-item d-flex align-items-center mb-5 pt-3">
              <div class="extra-counter me-3 text-center"></div>
              <div class="extra-text">Desenvolver uma estratégia de marketing digital B2B para o mercado livre e geração
                distribuída;</div>
            </li>
          </div>
          <div class="col-12 col-lg-6 d-flex flex-column">
            <li class="extra-item d-flex align-items-center mb-5 pt-3">
              <div class="extra-counter me-3 text-center"></div>
              <div class="extra-text">Executar ações de marketing digital eficazes e impactantes;</div>
            </li>
            <li class="extra-item d-flex align-items-center mb-5 pt-3">
              <div class="extra-counter me-3 text-center"></div>
              <div class="extra-text">Medir e avaliar, com precisão, os resultados das suas campanhas de marketing
                digital.</div>
            </li>
          </div>
        </ul>
      </div>
    </div>
  </section>
  <!-- END Header -->
  <!-- Form -->
  <section class="container-fluid masterclass-form px-4" id="masterclass-form">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6">
          <h2 class="form-title pt-5">
            Curso: Marketing Digital para o Setor de Energia
          </h2>
          <!-- <p class="form-description col-12 py-3 py-lg-5 text-body-secondary">
          </p> -->
        </div>
        <div class="col-12 col-lg-6 text-center">
          <img class="form-img img-fluid d-none d-lg-block mx-auto"
            src="<?php echo get_template_directory_uri() . '/images/masterclass/elipse.png'; ?>"
            alt="">
        </div>
      </div>

      <?php //get_template_part('/template-parts/forms/form-masterclass');?>

    </div>
  </section>
  <!-- END Form -->
  <!-- New Course -->
  <section class="container-fluid masterclass-new px-4">
    <div class="container py-5">
      <div class="row">
        <div class="col-12 col-lg-6">
          <span class="new-title masterclass-green">Curso inédito, com</span>
          <span class="new-title highlight">4 aulas gravadas e</span>
          <span class="new-title highlight">1 encontro ao vivo</span>
        </div>
        <div class="col-12 col-lg-6 d-flex align-items-center">
          <div class="new-text">
            <p>
              Para quem quer encontrar estratégias de marketing digital direcionadas à <strong>indústria de
                energia</strong>, com foco no <strong>mercado livre, geração distribuída</strong> e empresas B2B de toda
              a
              cadeia de valor.
            </p>
            <p class="mb-0">
              Aprenda a conquistar a energia das vendas: aquisição inteligente, awareness estratégico e marca forte.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END New Course -->
  <!-- Instructors -->
  <section class="container-fluid masterclass-profs py-5 px-4">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-3 prof-card-container">
          <div class="prof-card"
            style="background-image:url('<?php echo get_template_directory_uri() . '/images/masterclass/prof1.jpg'; ?>');background-size:cover;background-position:center;">
            <div class="prof-bg"></div>
            <div class="prof-badge">Professor</div>
            <div class="prof-infos">
              <div class="prof-bio-text">
                Durante este período, assumiu várias posições estratégicas nas áreas de marketing,
                comunicação integrada, pesquisa e gestão. Alcançou resultados inéditos em relação à percepção do
                cliente,
                construção de marca e vendas.
                <br><br>
                Nos últimos 8 anos, esteve à frente, como fornecedor, de toda a presença digital da Enel X (site, redes
                sociais, Inbound Marketing, mídia e CRM) e mais recentemente prestando serviços para a Quanta Geração.
              </div>
            </div>
          </div>
          <div class="prof-btn">
            <a class="btn btn-infos d-grid d-lg-none">Ver mais</a>
          </div>
          <div class="prof-resume mt-4 mb-5">
            <strong>Fernando Terra —</strong> Profissional com 15 anos de experiência na área de marketing para o setor,
            com MBA de
            Gestão de Negócios para o
            Setor Elétrico.
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 prof-card-container">
          <div class="prof-card"
            style="background-image:url('<?php echo get_template_directory_uri() . '/images/masterclass/prof2.jpg'; ?>');background-size:cover;background-position:center;">
            <div class="prof-bg"></div>
            <div class="prof-badge">Professor</div>
            <div class="prof-infos">
              <div class="prof-bio-text">
                Atuando em soluções de tecnologia e acelerando processos para encurtar distâncias entre as ações de
                marketing e o resultado de vendas. Em 2022 criou a ferramenta HOOK, um sistema para integrações que já
                está disponível na loja de APP da RD Station MKT, e também fundador da Plataforma Educacional MOLTI, que
                distribui conteúdo mensal para mais de 150 mil pessoas.
              </div>
            </div>
          </div>
          <div class="prof-btn">
            <a class="btn btn-infos d-grid d-lg-none">Ver mais</a>
          </div>
          <div class="prof-resume mt-4 mb-5">
            <strong>Willian Thiago Crizostimo —</strong> CEO da BW8 Martech, agência com time de mais de 70
            especialistas em Marketing Digital, Vendas, Automação e Performance. 
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 prof-card-container">
          <div class="prof-card"
            style="background-image:url('<?php echo get_template_directory_uri() . '/images/masterclass/prof3.jpg'; ?>');background-size:cover;background-position:center;">
            <div class="prof-bg"></div>
            <div class="prof-badge">Professor</div>
            <div class="prof-infos">
              <div class="prof-bio-text">
                Engenheiro hídrico formado pela Universidade Federal de Itajubá, com MBA pela FGV. Na plataforma
                ePowerBay, introduziu novos métodos de análise para Geração Centralizada, Distribuída e Mercado Livre.
                Como Diretor Técnico pelos últimos 8 anos, lidera inovações, tecnologias e análises estratégicas para o
                setor elétrico.
              </div>
            </div>
          </div>
          <div class="prof-btn">
            <a class="btn btn-infos d-grid d-lg-none">Ver mais</a>
          </div>
          <div class="prof-resume mt-4 mb-5">
            <strong>André Felber —</strong> Cofundador da ePowerbay, plataforma de Inteligência de Mercado para Projetos
            de Energia.
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 prof-card-container">
          <div class="prof-card"
            style="background-image:url('<?php echo get_template_directory_uri() . '/images/masterclass/prof4.jpg'; ?>');background-size:cover;background-position:center;">
            <div class="prof-bg"></div>
            <div class="prof-badge">Professora</div>
            <div class="prof-infos">
              <div class="prof-bio-text">
                Executiva de Marketing com mais de 20 anos de bagagem e passagem por empresas como Schneider-Electric,
                Bematech e 20th Century Fox na Alemanha. Especialista em Branding, foca hoje suas energias no Bonö
                Group, holding de empresas do setor de energia onde lidera as estratégias de Branding, Marketing &
                Comunicação e Employer Branding do grupo.
              </div>
            </div>
          </div>
          <div class="prof-btn">
            <a class="btn btn-infos d-grid d-lg-none">Ver mais</a>
          </div>
          <div class="prof-resume mt-4 mb-5">
            <strong>Valéria Lopes —</strong> CMO do Bonö Group, Um dos maiores grupos do setor de energia do Brasil.
          </div>
        </div>



      </div>
    </div>
  </section>
  <!-- END Instructors -->
  <!-- Price -->
  <section class="container-fluid masterclass-pricing py-5 px-4">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 class="pricing-title masterclass-green mb-4">
            Domine o Marketing Digital para o Setor de Energia.
          </h2>
          <div class="pricing-text mb-4">
            <span class="d-block text-header">Por apenas</span>
            <div class="d-block text-price masterclass-green">
              <span class="currency">R$</span><span class="value">840</span><span class="digits">,00</span>
            </div>
            <span class="d-block text-splits">ou 6x de R$140,00</span>
          </div>
          <div class="pricing-footer">
            <p class="highlight">
              Com certificado de conclusão
            </p>
          </div>
          <div class="cta-btn pt-4">
            <a target="_blank" href="https://www.asaas.com/c/652207984113" type="button"
              class="btn masterclass-btn">Compre agora</a>
          </div>
        </div>
        <div class="col-12 col-lg-6 order-1 order-lg-2">
          <img
            src="<?php echo get_template_directory_uri() . '/images/masterclass/pricing-img.jpg'; ?>"
            class="img-fluid" alt>
        </div>
      </div>
    </div>
  </section>
  <!-- END Price -->
  <!-- Video -->
  <section>
    <div class="container-fluid masterclass-video pt-5 px-4">
      <div class="container">
        <div class="row text-white">
          <h2 class="video-title pt-3">Perdeu a nossa Masterclass?</h2>
          <p class="py-4">Assista agora e fique por dentro dos temas que farão parte do curso.</p>
          <div class="video-container text-center">
            <!-- <embed src="https://www.youtube.com/watch?v=H1Q8fC3ei2s" type="video"> -->
            <iframe class="youtube-video" src="https://www.youtube.com/embed/H1Q8fC3ei2s?rel=0&amp;controls=0&amp;showinfo=0&amp;modestbranding=1&amp;playsinline=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
            </iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END Video -->
  <!-- Classes -->
  <section class="container-fluid masterclass-classes px-4">
    <div class="container">
      <div class="row pt-5">
        <div class="class-bg-cyan col-12 col-lg-6 order-2 order-lg-1 p-4 p-md-5">
          <div class="class-badge"></div>
          <div class="class-title">
            Inteligência de Mercado - Crie estratégias baseadas em dados
          </div>
          <div class="class-description">
            <ul class="list-unstyled list-class">
              <li>Decifre as tendências energéticas de 2023.</li>
              <li>Decisões precisas com indicadores-chave.</li>
              <li>Ferramentas poderosas de inteligência de mercado.</li>
            </ul>
          </div>
        </div>
        <div class="class-img col-12 col-lg-6 order-1 order-lg-2"
          style="background:url(<?php echo get_template_directory_uri() . '/images/masterclass/modulo01.jpg'; ?>);background-size: cover;background-position: top center;">
        </div>
      </div>
      <div class="row pt-5">
        <div class="class-bg-cyan col-12 col-lg-6 order-2 order-lg-2 p-4 p-md-5">
          <div class="class-badge"></div>
          <div class="class-title">
            Marca poderosa - Posicione-se em um mercado em crescimento
          </div>
          <div class="class-description">
            <ul class="list-unstyled list-class">
              <li>Construa uma marca sólida e resiliente no setor.</li>
              <li>Estratégias de posicionamento para destaque.</li>
              <li>Vantagens de uma marca forte.</li>
            </ul>
          </div>
        </div>
        <div class="class-img col-12 col-lg-6 order-1 order-lg-1"
          style="background:url(<?php echo get_template_directory_uri() . '/images/masterclass/modulo02.jpg'; ?>);background-size: cover;background-position: top center;">
        </div>
      </div>
      <div class="row pt-5">
        <div class="class-bg-cyan col-12 col-lg-6 order-2 order-lg-1 p-4 p-md-5">
          <div class="class-badge"></div>
          <div class="class-title">
            Planejamento de conteúdo - Defina os temas que engajam e convertem
          </div>
          <div class="class-description">
            <ul class="list-unstyled list-class">
              <li>SEO e Marketing de Conteúdo: Fundamentos.</li>
              <li>ICP (Perfil do Cliente Ideal): Base estratégica.</li>
              <li>Jornada de Decisão: Conteúdo para conversão.</li>
            </ul>
          </div>
        </div>
        <div class="class-img col-12 col-lg-6 order-1 order-lg-2"
          style="background:url(<?php echo get_template_directory_uri() . '/images/masterclass/modulo03.jpg'; ?>);background-size: cover;background-position: top center;">
        </div>
      </div>
      <div class="row pt-5">
        <div class="class-bg-cyan col-12 col-lg-6 order-2 order-lg-2 p-4 p-md-5">
          <div class="class-badge"></div>
          <div class="class-title">
            Canais de aquisição - Amplie a presença online
          </div>
          <div class="class-description">
            <ul class="list-unstyled list-class">
              <li>Canais Digitais de Impacto: Energia em foco.</li>
              <li>Sincronização Estratégica: Canais alinhados.</li>
              <li>Atração e Fortalecimento de Marca: Conscientização ampliada.</li>
            </ul>
          </div>
        </div>
        <div class="class-img col-12 col-lg-6 order-1 order-lg-1"
          style="background:url(<?php echo get_template_directory_uri() . '/images/masterclass/modulo04.jpg'; ?>);background-size: cover;background-position: top center;">
        </div>
      </div>
      <div class="row pt-5">
        <div class="class-bg-cyan col-12 col-lg-6 order-2 order-lg-1 p-4 p-md-5">
          <div class="class-badge"></div>
          <div class="class-title">
            Metodologias de aquisição de clientes - Efetividade na conversão
          </div>
          <div class="class-description">
            <ul class="list-unstyled list-class">
              <li>Domine o inbound, outbound e marketing baseado em contas (ABM).</li>
              <li>Estratégias alinhadas às necessidades corporativas.</li>
            </ul>
          </div>
        </div>
        <div class="class-img col-12 col-lg-6 order-1 order-lg-2"
          style="background:url(<?php echo get_template_directory_uri() . '/images/masterclass/modulo05.jpg'; ?>);background-size: cover;background-position: top center;">
        </div>
      </div>
      <div class="row pt-5">
        <div class="class-bg-cyan col-12 col-lg-6 order-2 order-lg-2 p-4 p-md-5">
          <div class="class-badge"></div>
          <div class="class-title">
            Métricas sintonizadas - Mensuração e otimização estratégica
          </div>
          <div class="class-description">
            <ul class="list-unstyled list-class">
              <li>Métricas essenciais para marketing B2B.</li>
              <li>Avalie resultados com precisão.</li>
              <li>Aumente conversões com CRM inteligente.</li>
            </ul>
          </div>
        </div>
        <div class="class-img col-12 col-lg-6 order-1 order-lg-1"
          style="background:url(<?php echo get_template_directory_uri() . '/images/masterclass/modulo06.jpg'; ?>);background-size: cover;background-position: top center;">
        </div>
      </div>
    </div>
    <div class="container masterclass-cta pt-5">
      <div class="row d-flex flex-column">
        <div class="cta-title">Vagas limitadas!</div>
        <div class="cta-subtitle py-4 py-lg-5">Domine as técnicas de marketing para
          o setor de energia B2B</div>
        <div class="cta-btn text-center">
          <a target="_blank" href="https://www.asaas.com/c/652207984113" type="button"
            class="btn masterclass-btn">Compre agora</a>
        </div>
      </div>
    </div>
  </section>
  <!-- END Classes -->
</main>


<?php wp_footer(); ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NG9C76V" height="0" width="0"
    style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>

</html>