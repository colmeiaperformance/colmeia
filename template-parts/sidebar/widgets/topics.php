  <div class="topics">
    <h4>Explore Topics</h4>
    <ul class="topics-list">
      <?php wp_list_categories( array(
        'title_li'    => '',
        'hide_empty'   => true
        ) );
        ?>
    </ul>
     <div class="d-flex align-items-center justify-content-end">
       <button id="loadmore" class="btn p-0">Ver mais+</button>
     </div>
  </div>