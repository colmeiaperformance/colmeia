<?php get_header(); ?>
<main>
    <section class="error">
		<div style="background-image: url('<?php echo get_template_directory_uri() . '/images/background-erro.png' ?>');background-position: center;background-attachment: scroll;background-repeat: no-repeat; background-size: 40%;">
			<h1>
				404
			</h1>
			<h2>
				Página não encontrada :(
			</h2>
			<p>
				Desculpe, a página que você está procurando não existe.
			</p>
			<a href="<?php echo home_url(); ?>" class="ica-but but-conversion">
				Voltar para Home
			</a>
		</div>
	</section>
</main>