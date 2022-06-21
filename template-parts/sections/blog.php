<?php
  $codigo_do_formulario_news_blog = get_field('codigo_do_formulario_news_blog', 'option');
  ?>
<section class="sec-blog">
  <div class="container">
    <h2>Blog</h2>
    <div id="oquedizem" class="swiper swiperVisiteBlog" data-bs-ride="carousel">
      <div class="swiper-wrapper mb-4 pb-4 mb-lg-5 pb-lg-5">
        <?php $oquedizem_query = new WP_Query( 'posts_per_page=4' );
          while ( $oquedizem_query->have_posts() ) : $oquedizem_query->the_post();
            $do_not_duplicate = $post->ID; ?>
        <div class="swiper-slide border d-flex">
          <div class="card-image" style="background:url('<?php if ( has_post_thumbnail() ) { echo the_post_thumbnail_url(); } ?>') center no-repeat; background-size:cover;">
          </div>
          <div class="p-3">
            <h6><?php if (strlen($post->post_title) > 50) {echo substr(the_title($before = '', $after = '', FALSE), 0, 50) .'...'; } else {the_title();} ?></h6>
            <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
            <div class="d-flex justify-content-end">
              <a href="<?php the_permalink(); ?>" class="mt-2 stretched-link btn text-white background-mustard-dark rounded-0">
              Saiba mais
              </a>
            </div>
          </div>
        </div>
        <?php endwhile; 
          wp_reset_postdata();
          ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <?php if ($codigo_do_formulario_news_blog) { ?>
    <div class="row mt-2 mt-lg-5 border py-4 m-1 background-blog">
      <?php echo $codigo_do_formulario_news_blog; ?>
    </div>
    <?php } ?>
  </div>
  <script>
    jQuery(document).ready(function() {
      var swiper = new Swiper(".swiperVisiteBlog", {
        slidesPerView: 1,
        slidesPerGroup: 1,
        loop: true,
        spaceBetween: 0,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        breakpoints: {
          640: {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 0,
          },
          768: {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 0,
          },
          1024: {
            slidesPerView: 2,
            slidesPerGroup: 2,
            spaceBetween: 20,
          },
        },
      });
    });
  </script>
</section>