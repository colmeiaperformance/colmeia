<?php
  /* Template Name: Blog*/
  ?>
<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<?php get_template_part('template-parts/headers/header-blog'); ?>
<main class="page-blog">
  <section class="container">
    <div class="row">
      <div class="col-lg-8 pe-lg-4">
        <!-- Featured -->
        <div class="blog-spotlight">

          
          <div class="swiper swiperFeaturedBlog">  
            <div class="swiper-wrapper">
              

              <?php $catquery = new WP_Query( 'cat=1&posts_per_page=3' ); ?>
              <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
              <div class="swiper-slide">
                <article class="spotlight-item text-white position-relative active">
                  <div class="spotlight-image img-fluid position-relative"
                    style="width:100vw;background-image:url('<?php 
                    if ( has_post_thumbnail() ) { 
                        echo the_post_thumbnail_url();
                    }
                    else { 
                        echo get_template_directory_uri() . '/images/blog-media.jpg';
                        } ?>');background-position: center;background-attachment: scroll;background-repeat: no-repeat;background-size: cover;filter: brightness(0.6);">
                  </div>
                  <div class="col-md-10 position-absolute bottom-0 spotilight-content">
                    <h2 class="color-white"><a href="<?php the_permalink(); ?>"
                        class="color-white text-decoration-none stretched-link">
                        <?php the_title(); ?>
                      </a>
                    </h2>
                    <?php the_excerpt(); ?>
                  </div>
                </article>
              </div>
              <?php endwhile;  wp_reset_postdata(); ?>


            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

          </div>

        </div>
        <!-- Featured End -->
        <div class="latest-posts">
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
              <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                <h3><?php the_title(); ?></h3>
              </a>
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
      </div>
      <div class="col-lg-4 ps-lg-4">
        <?php get_template_part( '/template-parts/sidebar/aside-blog' ) ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer() ?>
<script>
jQuery(document).ready(function() {
  const swiper = new Swiper('.swiperFeaturedBlog', {
    // Optional parameters
    loop: true,
    slidesPerView: 1,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      spaceBetween: 10
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    }
  
  });

});
</script>