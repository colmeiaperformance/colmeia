<div class="latest-posts">
  <h4>Últimos posts</h4>
  <?php $query = new WP_Query( 'posts_per_page=4' ); ?>
      <?php while($query->have_posts()) : $query->the_post(); ?>
  <ul class="list-group">
    <li class="list-group-item position-relative">
      <div class="bd-placeholder-img img-fluid rounded"
        style="height:70px;width:70px;background-image:url('<?php 
          if ( has_post_thumbnail() ) { 
          echo the_post_thumbnail_url();
          }
          else { 
          echo get_template_directory_uri() . '/images/blog-media.jpg';
          } ?>');background-position: center;background-attachment: scroll;background-repeat: no-repeat;background-size: cover;"></div>
      <div class="d-flex">
        <h4><a href="<?php the_permalink(); ?>" class="stretched-link"><?php the_title(); ?></a></h4>
        <p><a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('d'));  ?>"><?php the_time('d') ?> de <?php the_time('M') ?> de <?php the_time('Y') ?></a></p>
      </div>
    </li>
  </ul>
  <?php endwhile; wp_reset_postdata(); ?>   
</div>