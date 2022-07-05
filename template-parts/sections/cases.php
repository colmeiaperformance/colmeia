<?php 
$titulo_cases = get_sub_field('titulo_cases');
$item_cases = get_sub_field('item_cases');
$num_case = 1;
?>
<section class="cases">
  <div class="container">
    <h2><?php if ($titulo_cases) { echo $titulo_cases; } ?></h2>
    <div class="row text-center">

    <?php foreach ($item_cases as $ic) { ?>
    
      <div class="col-12 col-lg-4 px-3">
        <div class="card rounded-0 bg-transparent text-white">
            <div class="icon d-inline">
                <img src="<?php if ($ic['imagem_item_cases']) { echo $ic['imagem_item_cases']; } ?>" alt="Case <?php echo $num_case; ?>">
            </div>
            <a href="#" class="stretched-link"><h4><?php if ($ic['titulo_item_cases']) { echo $ic['titulo_item_cases']; } ?></h4></a>
            <div class="mb-3">
              <p><?php if ($ic['descricao_item_cases']) { echo $ic['descricao_item_cases']; } ?></p>
            </div>
            <div class="fw-bold">
              <p><?php if ($ic['pessoa_item_cases']) { echo $ic['pessoa_item_cases']; } ?></p>
            </div>
            <p><?php if ($ic['cargo_item_cases']) { echo $ic['cargo_item_cases']; } ?></p>
          </div>
      </div>

    <?php 
    $num_case++;
    } ?>

    </div>
  <div>
  </div>
</section>
