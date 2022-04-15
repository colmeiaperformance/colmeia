<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<section id="breadcrumb" class="breadcrumb">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/blog" rel="category tag">Blog</a></li>
        <li class="breadcrumb-item"><?php the_title(); ?></li>
      </ol>
    </nav>
  </div>
</section>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<header class="header--single">
  <div class="container position-relative overflow-hidden">
    <div class="col p-lg-5 text-center">
      <h1><?php the_title(); ?></h1>
      <div>
        <div class="avi"><?php echo get_avatar( get_the_author_meta('ID') , 92 ); ?></div>
        <div>
          <h4><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></h4>
          <p><a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('d'));  ?>"><?php the_time('d') ?> de <?php the_time('F') ?> de <?php the_time('Y') ?></a></p>
        </div>
      </div>
    </div>
  </div>
</header>
<main class="page-blog">
  <section class="container">
    <div class="row">
      <div class="col-lg-8 pe-lg-4">
        <article class="blog-post">
          <div class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
            style="height:340px;width:700px;background-image:url('<?php 
              if ( has_post_thumbnail() ) { 
                  echo the_post_thumbnail_url();
              }
              else { 
                  echo get_template_directory_uri() . '/images/blog-media.jpg';
                  } ?>');background-position: center;background-attachment: scroll;background-repeat: no-repeat;background-size: cover;">
          </div>
          <?php the_content(' '); ?>
          <div>
            <?php $tags = get_tags(); ?>
            <div class="tags">
              <?php foreach ( $tags as $tag ) { ?>
              <a href="<?php echo get_tag_link( $tag->term_id ); ?> " rel="tag">#<?php echo $tag->name; ?></a>
              <?php } ?>
            </div>
          </div>
        </article>
        <?php endwhile; wp_reset_postdata(); ?>   
        <?php else : ?>
        <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
        <?php endif; ?>
      </div>
      <div class="col-lg-4 ps-lg-4">
        <?php get_template_part( '/template-parts/sidebar/aside-single' ) ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer() ?>