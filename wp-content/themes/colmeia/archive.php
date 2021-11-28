<?php get_header(); ?>
<?php get_template_part('template-parts/header-blog'); ?>
<main>
<section class="mt-5 pt-2">
  <div class="container">
    <?php the_breadcrumb(); ?>
   </div>  
</section>
  <section class="blog">
        <h3 class="section-title">
          <?php the_archive_title(); ?>
        </h3>
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <a class="notice-card-img" href="<?php the_permalink(); ?>">
              <div class="item-media"
                style="background-image:url('<?php 
                  if ( has_post_thumbnail() ) { 
                      echo the_post_thumbnail_url();
                  }
                      else { 
                          echo get_template_directory_uri() . '/images/blog-media.jpg';
                          } ?>');background-position: center;background-attachment: scroll;background-repeat: no-repeat;background-size: cover;">
                <div class="item-content ica-the the-highlight">
                  <p class="notice-card-title">
                    <?php if (strlen($post->post_title) > 70) {echo substr(the_title($before = '', $after = '', FALSE), 0, 70) . '...'; } else {the_title();} ?>        
                  </p>
                </div>
              </div>
            </a>
              <p><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="ica-but but-conversion">Leia mais</a>
          <?php endwhile; ?>
          <div class="pagination">
            <?php 
              echo paginate_links( array(
                  'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                  'current'      => max( 1, get_query_var( 'paged' ) ),
                  'format'       => '?paged=%#%',
                  'show_all'     => false,
                  'total'        => $wp_query->max_num_pages,
                  'type'         => 'plain',
                  'end_size'     => 2,
                  'mid_size'     => 1,
                  'prev_next'    => false,
                  'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Posts', 'text-domain' ) ),
                  'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts', 'text-domain' ) ),
                  'add_args'     => false,
                  'add_fragment' => '',
              ) );
              ?>
          </div>
          <?php else : ?>
          <div class="blog-alert">
            <?php _e( 'Desculpe, nenhum post foi encontrado.' ); ?>
          </div>
          <?php endif; ?>
      <?php get_template_part( '/template-parts/aside-blog' ) ?>
  </section>
</main>
<?php get_footer() ?>