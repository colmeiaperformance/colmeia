<?php
$titulo_serv = get_field('titulo_serv', 'option' );            
$item_serv = get_field('item_serv', 'option' );
$cor_item_serv = get_field('cor_item_serv');
$page_address = get_permalink();
global $post; 
  $slug_name = $post->post_name;
?>
<style>
  .card.active {
    background: <?php if ($cor_item_serv) { echo $cor_item_serv; } ?>;
    border-left: solid 4px <?php if ($cor_item_serv) { echo $cor_item_serv; } ?>;
    border-right: solid 4px <?php if ($cor_item_serv) { echo $cor_item_serv; } ?>;
  }
  .card.active a {
    color: #fff;
  }
  .card.active::before {
    border-top: solid 5.6569px <?php if ($cor_item_serv) { echo $cor_item_serv; } ?>;
    border-right: solid 5.6569px <?php if ($cor_item_serv) { echo $cor_item_serv; } ?>;
  }
  .card.active::after {
    border-bottom: solid 5.6569px <?php if ($cor_item_serv) { echo $cor_item_serv; } ?>;
    border-left: solid 5.6569px <?php if ($cor_item_serv) { echo $cor_item_serv; } ?>;
  }
  .card.active:hover {
    background: <?php if ($cor_item_serv) { echo $cor_item_serv; } ?>;
    border-left: solid 4px <?php if ($cor_item_serv) { echo $cor_item_serv; } ?>;
    border-right: solid 4px <?php if ($cor_item_serv) { echo $cor_item_serv; } ?>;
  }
  .card.active:hover .card.active::before {
    border-top: solid 5.6569px <?php if ($cor_item_serv) { echo $cor_item_serv; } ?>;
    border-right: solid 5.6569px <?php if ($cor_item_serv) { echo $cor_item_serv; } ?>;
  }
  .card.active:hover .card.active::after {
    border-bottom: solid 5.6569px <?php if ($cor_item_serv) { echo $cor_item_serv; } ?>;
    border-left: solid 5.6569px <?php if ($cor_item_serv) { echo $cor_item_serv; } ?>;
  }

</style>

<section id="services" class="services">
  <div class="container py-5"><h2 class="m-0"><?php if ($titulo_serv) { echo $titulo_serv; } ?></h2></div>
  <div class="container pt-5">
    <div class="row align-items-center justify-content-center">
  
    <?php foreach ($item_serv as $is) { ?>

      <div class="card rounded-0 card rounded-0 position-relative<?php
      if ( $page_address == $is['url_item_serv'] ) { echo ' active'; } ?>">
        <a href="<?php if ($is['url_item_serv']) { echo $is['url_item_serv']; } else { echo '#'; }; ?>" class="stretched-link text-decoration-none">
          <?php if ($is['area_item_serv']) { echo $is['area_item_serv']; }; ?>
        </a>
      </div>

    <?php } ?>
    
    </div>
  </div>
</section>