<?php
$codigo_do_formulario_news = get_field('codigo_do_formulario_news', 'option');
?>
<?php if ($codigo_do_formulario_news) { ?>
<div class="newsletter d-flex flex-column align-items-center justify-content-center background-blog text-white">
  <h4>Newsletter</h4>
  <h5>Lorem Ipsum Subscribers!</h5>
  <?php echo $codigo_do_formulario_news; ?>
</div>
<?php } ?>