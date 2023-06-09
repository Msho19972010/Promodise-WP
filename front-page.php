<?php get_header(); ?>

<!--MAIN BANNER AREA START -->
<div class="banner-area banner-3">
  <div class="overlay dark-overlay"></div>
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
            <div class="banner-content content-padding">
              <h5 class="subtitle"><?php the_field('subtitle', $post->ID); ?></h5>
              <h1 class="banner-title"><?php the_field( 'title', $post->ID); ?></h1>
              <p>
                <?php the_field('banner_description', $post->ID) ?>
              </p>

              <a href="#" class="btn btn-white btn-circled">Начать сотрудничество</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--MAIN HEADER AREA END -->

<!-- ABOUT AREA START  -->
<section id="intro" class="section-padding">
  <div class="container">
    <div class="row">
      <?php the_content(); ?>
    </div>
  </div>
</section>
<!--  ABOUT AREA END  -->

<!--  SERVICE AREA START  -->
<section id="about" class="bg-light">
  <div class="about-bg-img d-none d-lg-block d-md-block"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-sm-12 col-md-8">
        <div class="about-content">
          <h5 class="subtitle">О нас</h5>
          <h3>Мы делаем рабочий инструмент <br />для вашего бизнеса</h3>
          <p>
            Мы создадим сайт про вашу компанию и вам не придется заказывать услуги у фрилансеров, переживая за сроки
            проекта и его качество. В нашей команде есть все нужные специалисты, которые сделаю отличный сайт
          </p>

          <ul class="about-list">
            <li><i class="icofont icofont-check-circled"></i> Адаптивный</li>
            <li><i class="icofont icofont-check-circled"> </i> С анимацией</li>
            <li><i class="icofont icofont-check-circled"> </i> С чистым кодом</li>
            <li><i class="icofont icofont-check-circled"> </i> Готовый к использованию</li>
            <li><i class="icofont icofont-check-circled"> </i> Настроенный под SEO</li>
            <li><i class="icofont icofont-check-circled"></i> Кроссбраузерный</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!--  SERVICE AREA END  -->

<?php echo get_template_part('template-parts/content', 'service', ['class' => 'bg-feature', 'custom_title' => 'Диджитал полного цикла']); ?>

<!-- PRICE AREA START  -->
<?php get_template_part( 'template-parts/content', 'price'); ?>
<!-- PRICE AREA END  -->

<!--  TESTIMONIAL AREA START  -->
<?php get_template_part( 'template-parts/content', 'testimonial'); ?>
<!--  TESTIMONIAL AREA END  -->

<!--  PARTNER START  -->
<?php get_template_part('template-parts/content', 'partner', ['custom_partner_count' => 4]); ?>
<!--  PARTNER END  -->
<!--  BLOG AREA START  -->
<section id="blog" class="section-padding bg-main">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-sm-12 m-auto">
        <div class="section-heading">
          <h4 class="section-title">Журнал</h4>
          <div class="line"></div>
          <p>
            Мы публикуем в блоге интересные кейсы наших клиентов, возможно, <br />
            вы найдете много полезного для себя и своего бизнеса
          </p>
        </div>
      </div>
    </div>

    <div class="row">
    <?php
      global $post;

      $query = new WP_Query( [
        'posts_per_page' => 3,
        'post_type'      => 'post',
        'order'          => 'ASC'
      ] );

      if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
          $query->the_post();
          ?>
          <div class="col-lg-4 col-sm-6 col-md-4">
            <div class="blog-block">
              <?php the_post_thumbnail( 'post-thumbnail', ['class' => 'img-fluid'] ); ?>
              <div class="blog-text">
                <h6 class="author-name"><span><?php
                $category = get_the_category();
                echo $category[0] -> name;
                ?></span><?php the_author(); ?></h6>
                <a href="<?php echo get_the_permalink(); ?>" class="h5 my-2 d-inline-block"><?php the_title(); ?></a>
                <?php the_excerpt(); ?>
              </div>
            </div>
          </div>
          <?php 
        }
      } else {
        // Постов не найдено
      }

      wp_reset_postdata(); // Сбрасываем $post
      ?>
    </div>
  </div>
</section>
<!--  BLOG AREA END  -->
<!--  COUNTER AREA START  -->
<section id="counter" class="section-padding">
  <div class="overlay dark-overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-6 col-md-6">
        <div class="counter-stat">
          <i class="icofont icofont-heart"></i>
          <span class="counter"><?php the_field('numbers_customers', $post->ID) ?></span>
          <h5>счастливых клиентов</h5>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-md-6">
        <div class="counter-stat">
          <i class="icofont icofont-rocket"></i>
          <span class="counter"><?php the_field('numbers_doneProjects', $post->ID); ?></span>
          <h5>выполненных проектов</h5>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-md-6">
        <div class="counter-stat">
          <i class="icofont icofont-hand-power"></i>
          <span class="counter"><?php the_field('numbers_teamMates', $post->ID); ?></span>
          <h5>людей в команде</h5>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-md-6">
        <div class="counter-stat">
          <i class="icofont icofont-shield-alt"></i>
          <span class="counter"><?php the_field('numbers_currentProjects', $post->ID); ?></span>
          <h5>Проектов в работе</h5>
        </div>
      </div>
    </div>
  </div>
</section>
<!--  COUNTER AREA END  -->

<?php get_footer(); ?>