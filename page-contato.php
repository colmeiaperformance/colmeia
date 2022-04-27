<?php get_header(); ?>
  <?php get_template_part('template-parts/navbar'); ?>
  <?php get_template_part('template-parts/breadcrumb'); ?>
<main class="page-contato">

  <div class="container">
      <div class="row d-flex align-items-stretch">
        <div class="text-contact col-lg-6 d-flex flex-column text-center text-lg-start my-5 justify-content-left align-items-left px-4">
          <div class="title w-lg-75 mb-4">
            <h1>Vamos<br>conversar?</h1>
          </div>
          <div class="text w-lg-75">
            <p> 
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
              sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
              Nascetur ridiculus mus mauris vitae ultricies. Bibendum ut 
              tristique et egestas quis ipsum suspendisse ultrices gravida. 
              Consectetur libero id faucibus nisl tincidunt eget nullam non.s
            </p>
          </div>
        </div>
        <div class="contact-area col-lg-6 d-flex justify-content-center align-items-center">
          <div class="form-contact d-flex justify-content-center align-items-center my-5">
            
          </div>
        </div>      
      </div>
    </div>
    <div class="image-contact d-flex justify-content-center align-items-center mt-4">
      <div class="image-text text-center">
        <p>Nossa localização?</p>
        <h1><b>Anywhere</b></h1>
        <p>nos orgulhamos de ser Remote First!</p>
      </div>
    </div>

  <?php get_template_part('template-parts/flexible-content'); ?>
  <?php get_template_part('template-parts/sections/newsletter'); ?>
</main>
<?php get_footer();