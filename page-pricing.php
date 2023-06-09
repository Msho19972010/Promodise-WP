<?php get_header(); ?>

<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-contact" id="page-banner">
  <div class="overlay dark-overlay"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
        <div class="banner-content content-padding">
          <h1 class="text-white">Цены на услуги</h1>
          <p>Подберите подходящий тариф</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--MAIN HEADER AREA END -->

<!-- PRICE AREA START  -->
<?php get_template_part( 'template-parts/content', 'price' ); ?>
<!-- PRICE AREA END  -->

<!--  TESTIMONIAL AREA START  -->
<section id="testimonial" class="section-padding">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <div class="mb-5">
          <h3 class="mb-2">Клиенты, которые доверяют нам</h3>
          <p>
            Ниже представлены отзывы от клиентов, с которыми<br />
            мы работаем уже несколько лет подряд
          </p>
        </div>
      </div>
    </div>

    <?php get_template_part( 'template-parts/content', 'testimonial', ['custom_title' => 'Клиенты которые нам  доверяют', 'custom_description' => 'Отзывы постоянных клиентов' ]); ?>
  </div>
</section>
<!--  TESTIMONIAL AREA END  -->
<!--  PARTNER START  -->
<?php get_template_part('template-parts/content', 'partner', ['custom_partner_count' => 8]); ?>
<!--  PARTNER END  -->

<?php get_footer(); ?>