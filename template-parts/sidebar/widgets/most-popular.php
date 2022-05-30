  <div class="most-popular">
    <h4 class="underline">Artigos mais lidos</h4>
      <?php
        query_posts('meta_key=post_views_count&posts_per_page=5&orderby=meta_value_num&order=DESC');
        if (have_posts()) : while (have_posts()) : the_post();
      ?>
        <ul class="list-group">
          <li class="list-group-item position-relative"> 
            <h3><a href="<?php the_permalink(); ?>" class="stretched-link"><?php the_title();?></a></h3>
            <p><?php the_excerpt(); ?></p>
            <span>Por: <?php the_author(); ?> - <?php the_time('d') ?> de <?php the_time('F') ?> de <?php the_time('Y') ?></span>
          </li>
        </ul>
      <?php
      endwhile; endif;
      wp_reset_query();
      ?>
  

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
    </ul> -->
  </div>