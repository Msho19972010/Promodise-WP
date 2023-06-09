<!--  PARTNER START  -->
<section class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 text-center text-lg-left">
        <div class="mb-5">
          <h3 class="mb-2">Эти компании доверяют нам</h3>
          <p>Компании, с которыми мы работаем давно</p>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
        global $post;
        $partner_count = $args['custom_partner_count'];
        $query = new WP_Query( [
          'posts_per_page'   => $partner_count,
          'post_type'        => 'partner',
          'order'            => 'ASC'
        ] );
        
        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post();
            ?>
            <div class="col-lg-3 col-sm-6 col-md-3 text-center">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="partner" class="img-fluid" />
            </div>
            <?php 
          }
        } else {
          ?>
          <p>Партнёров пока нет.</p>
          <?php
        }
        
        wp_reset_postdata(); // Сбрасываем $post
      ?>
    </div>
  </div>
</section>
<!--  PARTNER END  -->