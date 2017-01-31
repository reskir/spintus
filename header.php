<!DOCTYPE html>
<html lang="en" class="js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>
		<?php wp_title( '-', true, 'right' ); ?>
	</title>

	<?php wp_head();?>
</head>

<body>



<div id="header" class="header">
	<div class="row middle-lg header_inner">
		<div class="col-lg-3 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12 start-lg center-xs center-md center-sm">
			<a class="logo" href="<?php bloginfo('url'); ?>"> <?php bloginfo('name'); ?> </a>
		</div style="display:inline-block; margin:0;">
		<nav class="col-lg-8 col-md-12 col-sm-12 col-xs-12 end-lg menu_container">
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
	</div>
</div>

<div id="header" class="header header_fixed hide">
	<div class="row middle-lg header_inner">
		<div class="col-lg-3 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12 start-lg center-xs center-md center-sm">
			<a class="logo" href="<?php bloginfo('url'); ?>"> <?php bloginfo('name'); ?> </a>
		</div style="display:inline-block; margin:0;">
		<nav class="col-lg-8 col-md-12 col-sm-12 col-xs-12 end-lg menu_container">
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
	</div>
</div>
