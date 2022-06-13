<div class="most-popular">
<h4 class="underline">Artigos mais lidos</h4>
  <?php
if ( function_exists('wpp_get_mostpopular') ) { ?>
    <?php
    /* Get up to the top 5 posts from the last 7 days */
    wpp_get_mostpopular(array(
        'limit'     => 3,
        'order_by' => 'views',
        'post_type' => 'post',
        'stats_date' => 1,
        'excerpt_length' => 123,
        'post_html' => '<ul class="list-group"><li class="list-group-item position-relative"><h3><a href="{url}" class="stretched-link">{title}</a></h3><p>{summary}</p><span>{stats}</span></li>'
    ));
}
?>
</div>
 <!-- <div class="most-popular">
    <h4 class="underline">Artigos mais lidos</h4>
  <ul class="list-group">
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
