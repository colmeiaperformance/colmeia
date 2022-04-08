<?php
$titulo_serv = get_sub_field('titulo_serv');            
$item_serv = get_sub_field('item_serv');            
?>


<section class="services">
  <div class="container py-5"><h2 class="m-0"><?php if ($titulo_serv) { echo $titulo_serv; } ?></h2></div>
  <div class="container pt-5">
    <div class="row align-items-center justify-content-center">
  
    <?php foreach ($item_serv as $is) { ?>

      <div class="card rounded-0">
        <a href="#" class="stretched-link text-decoration-none">
          <?php if ($is['area_item_serv']) { echo $is['area_item_serv']; }; ?>
        </a>
      </div>

    <?php } ?>


     
    </div>
  </div>
</section>
