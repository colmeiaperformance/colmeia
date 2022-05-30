  <div class="most-popular">
    <h4 class="underline">Artigos mais lidos</h4>
    <ul class="list-group">
    <?php 
      $popularpost = new WP_Query( array( 'posts_per_page' => 3, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
      while ( $popularpost->have_posts() ) : $popularpost->the_post();
      the_title();
      endwhile;
    ?>
     </ul>

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