<footer class="footer">
  <div class="container py-5 text-white">
    <div class="row">
      <div class="col-lg-2">
        <h5>Section</h5>
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

      <div class="col-lg-2">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
      </div>

      <div class="col-lg-2">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
      </div>

      <div class="col-lg-4 offset-lg-1">
        <form>
          <h5>Assine a nossa newsletter</h5>
          <p>Monthly digest of whats new and exciting from us.</p>
          <div class="d-flex w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email">
            <button class="btn btn-primary" type="button">Cadastrar</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex justify-content-between py-4 my-4 border-top border-secondary">
      <p>© 2021 Colmeia. Todos os direitos reservados.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-dark" href="#"><i class="bi bi-twitter"></i></a></li> 
        <li class="ms-3"><a class="link-dark" href="#"><i class="bi bi-facebook"></i></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><i class="bi bi-instagram"></i></a></li>
      </ul>
    </div>
   <p class="float-end"><a href="#">Ir ao topo</a></a></p>
  </div>
</footer>
<?php wp_footer(); ?>
<script src="js/main.js"></script>
</body>
</html>