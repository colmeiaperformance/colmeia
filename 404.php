<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<main class="error cover-container">
 <div class="container">
	  <div class="py-3 pt-lg-5 pb-lg-5 text-white d-flex mx-auto flex-column align-items-center justify-content-center">
    <h1 class="p-0 pt-lg-5 mb-0 text-center">
			<img src=<?php echo get_template_directory_uri() . '/images/404/404.png' ?> alt="Error 404" width="100%" height="auto">      
		</h1>
    <div class="lead">
			<p>
				A página que você tentou acessar não pode ser encontrada.
			</p>
		</div>
      <a href="<?php echo home_url(); ?>" class="btn border-white rounded-0 mb-0 mb-lg-5"><i class="bi bi-arrow-left-short"></i> Voltar</a>
	</div>
 </div>
</main>