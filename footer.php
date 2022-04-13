<?php 
$logo_v = get_field('logo_v', 'option');
$phone_number = get_field('phone_number', 'option');
$address = get_field('address', 'option');
$email = get_field('email', 'option');
$social_media = get_field('social_media', 'option');
$copyright_text = get_field('copyright_text', 'option');
?>

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
          <a href="<?php home_url(); ?>"><img
              src="<?php if ($logo_v) { echo $logo_v; } else { echo get_template_directory_uri() . '/images/footer/logo-colmeia.svg'; } ?>"
              alt="Logo Colmeia"></a>
        </div>

        <ul class="redes list-unstyled d-flex align-items-center justify-content-center">

          <?php foreach ($social_media as $sm ) { ?>

          <li class="ps-1 pe-1"><a href="<?php if( $sm['sm_url'] ) { echo $sm['sm_url']; } ?>">
              <img src="<?php if( $sm['sm_image'] ) { echo $sm['sm_image']; } ?>" alt="Logo Facebook">
            </a>
          </li>

          <?php } ?>

        </ul>
        <div class="d-none copyright d-lg-flex justify-content-center align-items-center">
          <?php if ($copyright_text) { echo '<p>' . $copyright_text . '</p>'; } ?>
        </div>
      </div>

      <div class="col-lg-3 order-2 order-lg-2 infos text-center text-lg-start mb-2 mb-lg-0">
        <div class="mb-4">
          <?php if( $address ) { ?>
          <div
            class="title d-flex align-items-center justify-content-center justify-content-lg-start text-uppercase color-primary-dark">
            <i class="bi bi-geo-alt"></i>
            <p>Endereço</p>
          </div>
          <?php echo '<p>' . $address . '</p>'; } ?>
        </div>

        <div>
          <?php if( $phone_number ) { ?>
          <div
            class="title d-flex align-items-center justify-content-center justify-content-lg-start text-uppercase color-primary-dark">
            <i class="bi bi-telephone"></i>
            <p>Telefone</p>
          </div>
          <?php echo '<p>' . $phone_number . '</p>'; } ?>
        </div>

        <div>
          <?php if( $email ) { ?>
          <div
            class="title d-flex align-items-center justify-content-center justify-content-lg-start text-uppercase color-primary-dark">
            <i class="bi bi-envelope"></i>
            <p>E-mail</p>
          </div>
          <?php echo '<p>' . $email . '</p>'; } ?>
        </div>

      </div>
    </div>
    <div class="copyright d-lg-flex justify-content-center align-items-center d-lg-none">
      <?php if ($copyright_text) { echo '<p>' . $copyright_text . '</p>'; } ?>
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