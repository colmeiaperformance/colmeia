<?php
  /*
  Template Name: Blog
  */
  ?>
<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<?php get_template_part('template-parts/headers/header-blog'); ?>
<main class="page-blog">
  <!-- <section class="container mt-5 pt-3">
    <div class="row">
      <?php $catquery = new WP_Query( 'cat=11&posts_per_page=1' ); ?>
      <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
      <div class="featurette">
        <div class="col-md-7-">
          <h1 class="featurette-heading"><?php the_title(); ?></h1>
          <p class="lead"><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>" class="btn btn-primary my-2">Leia Mais</a>
        </div>
        <div class="col-md-5-">
          <div class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" style="height:400px;width:100vw;background-image:url('<?php 
            if ( has_post_thumbnail() ) { 
                echo the_post_thumbnail_url();
            }
            else { 
                echo get_template_directory_uri() . '/images/blog-media.jpg';
                } ?>');background-position: center;background-attachment: scroll;background-repeat: no-repeat;background-size: cover;">
          </div>
        </div>
      </div>
      <?php endwhile;  wp_reset_postdata(); ?>
      <div class="py-4">
        <h4 class="fst-italic">Most popular</h4>
        <?php
          if ( function_exists('wpp_get_mostpopular') ) { ?>
        <?php
          /* Get up to the top 5 commented posts from the last 7 days */
          wpp_get_mostpopular(array(
              'limit'     => 5,
              'post_html' => '<dd><a href="{url}">{title}</a></dd>'
          ));
          }
          ?>
      </div>
    </div>
  </section> -->
  <section class="container">
    <div class="row">
      <div class="col-lg-8 pe-lg-4">
        <h2>Últimos posts</h2>
        <?php
          $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
          $args = array(
              'posts_per_page' => 4,
              'paged' => $paged,
          );
          $wp_query = new WP_Query( $args );   
          if ( $wp_query->have_posts() ) : ?>
        <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
        <article class="row">
          <div class="col-12 col-md-5 mb-4 mb-md-0">
            <div class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
              style="height:260px;width:100vw;background-image:url('<?php 
                if ( has_post_thumbnail() ) { 
                    echo the_post_thumbnail_url();
                }
                else { 
                    echo get_template_directory_uri() . '/images/blog-media.jpg';
                    } ?>');background-position: center;background-attachment: scroll;background-repeat: no-repeat;background-size: cover;">
            </div>
          </div>
          <div class="col-12 col-md-7">
            <a href="<?php the_permalink(); ?>" class="text-decoration-none"><h3><?php the_title(); ?></h3></a>
            <p class="lead"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn text-uppercase">Leia Mais</a>
          </div>
        </article>
        <?php endwhile; ?>
        <?php  wp_boostrap_4_pagination();?>
        <?php
          wp_reset_postdata(); 
          else: ?>
        <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
        <?php endif; ?>
      </div>
      <div class="col-lg-4 ps-lg-4">
        <?php get_template_part( '/template-parts/sidebar/aside-blog' ) ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer() ?>