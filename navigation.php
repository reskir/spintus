


<?php
  //Primary navigation menu.

  $my_menu = array(
    'container' => 'nav',
    'menu_class' => 'pages-nav',
    'depth'     => 0,
    'before'    => '<span class="screen-reader-text">',
    'after'     => '</span>',
    'theme_location' => 'primary',
    'items_wrap' => '%3$s'
  );
  wp_nav_menu( $my_menu );

?>
