<section class="sidebar-widget widget_block widget_search">
  <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" >
    <input class="form-control" type="text" placeholder="Поиск" value="<?php echo get_search_query(); ?>" name="s" id="s" />
    <button class="searchform-button">
      <i class="fa fa-search"></i>
    </button>
  </form>
</section>