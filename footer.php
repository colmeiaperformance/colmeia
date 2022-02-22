<hr class="m-0">
<footer>
  <div class="container text-center text-lg-start text-black"> 
      <div class="row align-items-center">
        <div class="col-lg-3 order-1 menu mb-4 mb-lg-0">
          <?php
              wp_nav_menu(array(
                  'theme_location' => 'footer-menu',
                  'container' => false,
                  'menu_class' => '',
                  'fallback_cb' => '__return_false',
                  'items_wrap' => '<ul id="%1$s" class="nav flex-column %2$s">%3$s</ul>',
                  'depth' => 2,
                  'walker' => new bootstrap_5_wp_nav_menu_walker()
              ));
              ?>
        </div>

        <div class="col-lg-6 order-0 order-lg-1 social mb-2 mb-lg-0">
          <div class="logo text-center mb-4">
            <a href="/"><img src="<?php echo get_template_directory_uri() . '/images/footer/logo-colmeia.svg' ?>" alt="Logo Colmeia"></a>
          </div>

          <ul class="redes list-unstyled d-flex align-items-center justify-content-center">
            <li><a href="#">      
                <img src="<?php echo get_template_directory_uri() . '/images/footer/icon-facebook.svg' ?>" alt="Logo Facebook">
            </a></li>
             <li class="ms-3"><a href="#">      
                <img src="<?php echo get_template_directory_uri() . '/images/footer/icon-instagram.svg' ?>" alt="Logo Instagram">
            </a></li>
             <li class="ms-3"><a href="#">      
                <img src="<?php echo get_template_directory_uri() . '/images/footer/icon-linkedin.svg' ?>" alt="Logo Linkedin">
            </a></li>
             <li class="ms-3"><a href="#">      
                <img src="<?php echo get_template_directory_uri() . '/images/footer/icon-whatsapp.svg' ?>" alt="Logo Whatsapp">
            </a></li>
          </ul>
          <div class="d-none copyright d-lg-flex justify-content-center align-items-center">
            <p>Colmeia Performance Digital Copyright © 2022</p>  
          </div>
        </div>

        <div class="col-lg-3 order-2 order-lg-2 infos text-center text-lg-start mb-2 mb-lg-0">
            <div class="mb-4"> 
              <div class="title d-flex align-items-center justify-content-center justify-content-lg-start text-uppercase color-primary-dark">
                 <i class="bi bi-geo-alt"></i> <p>Endereço</p>
              </div>
              <p>Rua Eugênio Hussak, 13, Laranjeiras</p>
              <p>Rio de Janeiro – RJ</p> 
             </div>

             <div>
              <div class="title d-flex align-items-center justify-content-center justify-content-lg-start text-uppercase color-primary-dark">
                <i class="bi bi-telephone"></i><p>Telefone</p></div>
               <p>21 2225-6110</p>
             </div>
        </div>
      </div>
        <div class="copyright d-lg-flex justify-content-center align-items-center d-lg-none">
            <p>Colmeia Performance Digital Copyright © 2022</p>  
          </div>
       <p class="float-end top">
          <a href="#">
            <i class="bi bi-arrow-up-circle-fill"></i>
          </a>
         </p> 
  </div>
</footer>
<?php wp_footer(); ?>
<script src="js/main.js"></script>
</body>
</html>