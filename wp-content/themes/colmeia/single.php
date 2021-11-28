<?php get_header(); ?>
<?php get_template_part('template-parts/header-home'); ?>

<main>
<section class="container mt-5 pt-2">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
    </div>
  </div>
</section>

<section class="mt-5 pt-2">
  <div class="container">
    <?php the_breadcrumb(); ?>
   </div>  
</section>

<section class="container">
    <div class="row g-5">   
        <div class="col-md-8">
        <?php 
        if ( have_posts() ) : 
        while ( have_posts() ) : the_post();  ?>
        <?php endwhile; ?>
        <article class="blog-post">
            <h2 class="blog-post-title"><?php the_title(); ?></h2>
            <p class="blog-post-meta"><a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('d'));  ?>"><?php the_time('j') ?> de <?php the_time('F') ?>, <?php the_time('Y') ?></a> por <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a> em <?php the_category(', '); ?>
            <div class="featurette-image img-fluid mx-auto overflow-hidden">
                <?php the_post_thumbnail(); ?>
            </div>
            <?php the_content('Leia mais'); ?>      
        </article>

        <!-- Add the pagination functions here. -->
        <div class="blog-pagination" aria-label="Pagination">
           <?php next_post_link( '%link', 'Próximo Artigo' ); ?>
           <?php previous_post_link( '%link', 'Artigo Anterior'); ?>
        </div>

        <?php else: ?>
        <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
        <?php 
        wp_reset_postdata();     
        endif; 
        ?>
        </div>

        <?php get_template_part( '/template-parts/aside-blog' ) ?>
    </div>
</section>

<section class="container related mt-2">
<div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">Featured post</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0">Post title</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
  </div>
      </section>
</main>
<?php get_footer() ?>