<?php
$codigo_do_formulario_news = get_field('codigo_do_formulario_news', 'option');
?>
<?php if ($codigo_do_formulario_news) { ?>
<section class="newsletter">
  <div class="container">
    <div class="row border py-4 my-1 background-blog">
      <?php echo $codigo_do_formulario_news; ?>
     </div>
  </div>
</section>
<?php } ?>