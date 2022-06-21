<?php
$codigo_do_formulario_news_blog = get_field('codigo_do_formulario_news_blog', 'option');
?>
<?php if ($codigo_do_formulario_news_blog) { ?>
<div class="newsletter d-flex flex-column align-items-center justify-content-center background-blog text-white">
  <?php echo $codigo_do_formulario_news_blog; ?>
</div>
<?php } ?>