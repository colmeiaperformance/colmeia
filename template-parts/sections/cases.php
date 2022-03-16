<?php 
$titulo_cases = get_sub_field('titulo_cases');
$item_cases = get_sub_field('item_cases');
?>
<section class="cases">
  <div class="container">
    <h2><?php if ($titulo_cases) { echo $titulo_cases; } ?></h2>
    <div class="row row-cols-1 row-cols-lg-3 gy-3 gy-lg-0 gx-5 text-center">

    <?php foreach ($item_cases as $ic) { ?>
    
      <div class="col">
        <div class="card rounded-0 bg-transparent text-white">
            <div class="icon">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/cases/case.png" alt="Diagnóstico">
            </div>
            <h4><?php if ($ic['titulo_item_cases']) { echo $ic['titulo_item_cases']; } ?></h4>
            <div class="mb-3">
              <p><?php if ($ic['descricao_item_cases']) { echo $ic['descricao_item_cases']; } ?></p>
            </div>
            <div class="fw-bold">
              <p><?php if ($ic['pessoa_item_cases']) { echo $ic['pessoa_item_cases']; } ?></p>
            </div>
            <p><?php if ($ic['cargo_item_cases']) { echo $ic['cargo_item_cases']; } ?></p>
          </div>
      </div>

    <?php } ?>

    </div>
  <div>
  </div>
</section>
