<?php
$titulo_prod = get_sub_field('titulo_prod');            
$item_prod = get_sub_field('item_prod');            
?>

<section class="products position-relative">
  <div class="container">
    <h2><?php if ($titulo_prod) { echo $titulo_prod; } ?></h2>
    <div class="row row-cols-1 row-cols-md-3 gy-3 gy-lg-0 gx-5 text-center">

    <?php foreach ($item_prod as $ip) { ?>
      
      <div class="col">
        <div class="card rounded-0 mb-4 mb-lg-0 border-0 bg-transparent text-white">
          <div class="icon-square">
            <img class="" src="<?php if ($ip['imagem_item_prod']['url']) { echo $ip['imagem_item_prod']['url']; }; ?>"
            alt="Diagnóstico">
          </div>
          <h4><?php if ($ip['titulo_item_prod']) { echo $ip['titulo_item_prod']; }; ?></h4>
          <p><?php if ($ip['descricao_item_prod']) { echo $ip['descricao_item_prod']; }; ?></p>
          </div>
        </div>

      <?php } ?>
        

    </div>
    <div>
</section>