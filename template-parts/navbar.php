<?php
$logo_h = get_field('logo_h', 'option');
$menu_index = get_field('menu_index', 'option');
?>
<nav class="navbar navbar-expand-lg bg-white">
  <div class="container">
    <a class="navbar-brand" href="<?php home_url(); ?>">
      <img src=<?php if($logo_h) { echo $logo_h; } else { echo get_template_directory_uri() . '/images/logo.png'; } ?>
        alt="Logotipo Colmeia Performance" width="194px" height="auto">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
      aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <img src=<?php echo get_template_directory_uri() . '/images/toggler.svg' ?> alt="Logotipo Colmeia Performance">
    </button>
    <div class="collapse navbar-collapse ms-auto" id="navbarCollapse">
      <div class="d-flex align-items-center my-3 m-lg-0">
        <?php
        foreach ($menu_index as $mi) { ?>
          <a class="btn" href="<?php echo $mi['link_pagina_index']; ?>">
            <?php echo $mi['texto_botao_index']; ?>
          </a>  
        <?php } ?>
      </div>
      <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
    </div>
  </div>
</nav>