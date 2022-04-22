<!-- author box -->
<?php
$author_id = get_the_author_meta( 'ID' );
?>
<div class="author-box-wrap">
  <a href="<?php echo esc_url(get_author_posts_url($author_id)) ?>">
    <?php echo get_avatar(get_the_author_meta('email', $author_id), '92') ?>
  </a>

<div class="desc">
  <p>Sobre o autor</p>
  <a href="<?php echo esc_url(get_author_posts_url($author_id)) ?>">
   <?php echo get_the_author_meta('display_name', $author_id) ?>
  </a>

  <div class="author-description">
    <?php echo esc_html(get_the_author_meta('description', $author_id)) ?>
  </div>
</div>

</div>