  <div class="most-popular">
    <h4 class="underline">Artigos mais lidos</h4>
   <!-- <ul class="list-group">
      <li class="list-group-item position-relative"> 
        <h3><a href="#" class="stretched-link">Lorem ipsum dolor sit amet, consectetur</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        <span>Por: Admin - 01 de Março de 2022</span>
      </li>
       <li class="list-group-item position-relative"> 
        <h3><a href="#" class="stretched-link">Lorem ipsum dolor sit amet, consectetur</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        <span>Por: Admin - 01 de Março de 2022</span>
      </li>
       <li class="list-group-item position-relative"> 
        <h3><a href="#" linkclass="stretched-link">Lorem ipsum dolor sit amet, consectetur</a></h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        <span>Por: Admin - 01 de Março de 2022</span>
      </li>
    </ul>  -->
    <?php
$popularpostbyview = array(
    'meta_key'  => 'wp_post_views_count', // set custom meta key
    'orderby'    => 'meta_value_num',
    'order'      => 'DESC',
    'posts_per_page' => 4
);
 
// Invoke the query
$prime_posts = new WP_Query( $popularpostbyview );
 
if ( $prime_posts->have_posts() ) :?>
    <ul>
        <?php
            while ( $prime_posts->have_posts() ) : $prime_posts->the_post();
            ?>
                <li>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                      <?php the_title(); ?>
                    </a>
                </li>
            <?php
            endwhile;
            wp_reset_postdata();
        ?>
    </ul>
<?php 
endif;
?>
  </div>