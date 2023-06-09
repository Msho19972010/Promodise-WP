<?php get_header(); ?>

<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-contact" id="page-banner">
    <div class="overlay dark-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                <div class="banner-content content-padding">
                    <h1 class="text-white">Promodise журнал</h1>
                    <p>Полезные статьи про маркетинг и диджитал</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MAIN HEADER AREA END -->

<section class="section blog-wrap ">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 pb-5">
                    <div class="row">
                    <?php
                    $counter = 0;
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                    $counter++;
                    switch ($counter) {
                      case "3" : ?>
                      <div class="col-lg-12">
                            <div class="blog-post">
                              <?php 
                                if( has_post_thumbnail() ) {
                                  the_post_thumbnail('post-thumbnail', $default_attr = array('class' => "img-fluid w-100"));
                                }
                                else {
                                  echo '<img src="'.get_bloginfo("template_url").'/images/blog/blog-1.jpg" />';
                                }
                              ?>
                                <div class="mt-4 mb-3 d-flex">
                                    <div class="post-author mr-3">
                                        <i class="fa fa-user"></i>
                                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>" class="h6 text-uppercase"><?php the_author(); ?></a>
                                    </div>

                                    <div class="post-info">
                                        <i class="fa fa-calendar-check"></i>
                                        <span><?php the_time('j F Y'); ?></span>
                                    </div>
                                </div>
                                <a href="<?php echo get_the_permalink(); ?>" class="h4 "><?php the_title(); ?></a>
                                <p class="mt-3"><?php the_excerpt(); ?></p>
                                <a href="<?php echo get_the_permalink(); ?>" class="read-more">Читать статью <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <?php break;
                        default : ?>
                        <div class="col-lg-6">
                            <div class="blog-post">
                              <?php 
                                if( has_post_thumbnail() ) {
                                  the_post_thumbnail('post-thumbnail', $default_attr = array('class' => "img-fluid w-100"));
                                }
                                else {
                                  echo '<img src="'.get_bloginfo("template_url").'/images/blog/blog-2.jpg" />';
                                }
                              ?>
                                <div class="mt-4 mb-3 d-flex">
                                    <div class="post-author mr-3">
                                        <i class="fa fa-user"></i>
                                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>" class="h6 text-uppercase"><?php the_author(); ?></a>
                                    </div>

                                    <div class="post-info">
                                        <i class="fa fa-calendar-check"></i>
                                        <span><?php the_time('j F Y'); ?></span>
                                    </div>
                                </div>
                                <a href="<?php echo get_the_permalink(); ?>" class="h4 "><?php the_title(); ?></a>
                                <p class="mt-3"><?php the_excerpt(); ?></p>
                                <a href="<?php echo get_the_permalink(); ?>" class="read-more">Читать статью <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <?php endwhile; else : ?>
                      <p>Записей нет.</p>
                    <?php endif; ?>
                    <?php the_posts_pagination(array(
                      'prev_text'    => __('<span class = "p-2 border">« Предыдущие посты</span>'),
                      'next_text'    => __('<span class = "p-2 border">Слудующие посты »</span>'),
                      'before_page_number' => '<span class = "p-2 border">',
                      'after_page_number'  => '</span>'
                    )); ?>
                    </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>