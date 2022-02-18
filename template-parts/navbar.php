<nav class="navbar navbar-expand-md navbar-light bg-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">  
       <img src=<?php echo get_template_directory_uri() . '/images/logo.png' ?> alt="Logotipo Colmeia Performance" width="200px" height="auto">
    </a>
    <a class="btn btn-md btn-primary" href="#">Agências</a> <a class="btn btn-md btn-outline-primary" href="#">Clientes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ms-auto" id="navbarCollapse">
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