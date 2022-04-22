<div class="latest-posts">
  <h4>Últimos posts</h4>
  <ul class="list-group">
    <?php $query = new WP_Query( 'posts_per_page=3' ); ?>
    <?php while($query->have_posts()) : $query->the_post(); ?>
    <li class="list-group-item position-relative d-flex align-items-center jistufy-content-left">
      <div class="d-grid bd-placeholder-img img-fluid rounded-100"
        style="height:70px;width:70px;border-radius:100%;border: 1px solid #FF702E;margin-right: 18px;background-image:url('<?php 
          if ( has_post_thumbnail() ) { 
          echo the_post_thumbnail_url();
          }
          else { 
          echo get_template_directory_uri() . '/images/blog-media.jpg';
          } ?>');background-position: center;background-attachment: scroll;background-repeat: no-repeat;background-size: cover;"></div>
      <div style="width: calc(100% - 88px);">
        <h5><a href="<?php the_permalink(); ?>" class="stretched-link"><?php the_title(); ?></a></h5>
        <p><?php the_time('d') ?> de <?php the_time('F') ?> de <?php the_time('Y') ?></p>
      </div>
    </li>
    <?php endwhile; wp_reset_postdata(); ?>   
  </ul>
</div>