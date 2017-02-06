<!DOCTYPE html>
<html lang="en" class="js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<title>
		<?php wp_title( '-', true, 'right' ); ?>
	</title>
	<link rel='shortcut icon' type='image/x-icon' href='<?php echo get_template_directory_uri();?>/favicon.ico' />
	<?php wp_head();?>
</head>

<body>
<script>
document.body.className += ' fade-out ';
</script>
<?php ob_start();?>
<?php if( is_front_page() ) {?>
<div class="home">      
    <div class="hero">
      <div class="hero__content">
            <div>
              <img src="<?php echo get_template_directory_uri();?>/images/erdve-2.svg" class="hero__text"/>
            </div>
            <div>
              <img src="<?php echo get_template_directory_uri();?>/images/scroll-down.svg" class="hero__scroll"/>
            </div>
      </div>
    </div>
</div>
<?php } ?>

<div id="header" class="header">

	<div class="row middle-xs header_inner">
		<div class="col-lg-3 col-md-2 col-sm-8 col-xs-8 start-lg start-md end-sm end-xs">
			<a href="<?php echo site_url();?>">
				<img src="<?php echo get_template_directory_uri();?>/images/logo.svg" class="logo" />
			</a>
		</div>

		<nav class="col-lg-9 col-md-10 col-sm-12 col-xs-12 end-xs menu_container hide">
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

		<div class="col-xs-4 col-md-4 col-sm-4 end-xs">
			<button class="menu-button"><span>Menu</span></button>
		</div>
	</div>

</div>

<div class="overlay overlay_is--hidden">
	<nav class="menu_container mobile_menu">
		<?php
		//Primary navigation menu.
		$my_menu = array(
			'container' => 'div',
			'menu_class' => 'col-md-12 col-xs-12',
			'depth'     => 0,
			'before'    => '<span class="screen-reader-text">',
			'after'     => '</span>',
			'theme_location' => 'primary'
		);
		wp_nav_menu( $my_menu );

		?>
	</nav>
</div>