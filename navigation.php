
<nav class='pages-nav row  middle-xs'>
<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
<?php
  //Primary navigation menu.

  $my_menu = array(
    'container' => '',
    'menu_class' => '',
    'depth'     => 0,
    'before'    => '<span class="screen-reader-text">',
    'after'     => '</span>',
    'theme_location' => 'primary',
    'items_wrap' => '%3$s'
  );
  wp_nav_menu( $my_menu );

?>

</div>

<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12">
  <button class="contact">Susisiekti</button>
</div>

</nav>
