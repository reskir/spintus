<nav class="col-lg-10 col-md-10 col-sm-12 col-xs-12 end-lg menu_container">
    <?php
      //Primary navigation menu.
      $my_menu = array(
        'container' => '',
        'menu_class' => '',
        'depth'     => 0,
        'before'    => '<span class="screen-reader-text">',
        'after'     => '</span>',
        'theme_location' => 'primary',
        'items_wrap' => '<div id="%1$s" class="%2$s">%3$s</div>'
      );
      wp_nav_menu( $my_menu );

    ?>
</nav>
