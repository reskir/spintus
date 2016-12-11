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
			  <button class="menu-button"><span>Menu</span></button>
	      <h5 style="margin:0;">
					<a class="logo" href="<?php bloginfo('url'); ?>"> <?php bloginfo('name'); ?> </a>
				</h5 style="display:inline-block; margin:0;">
	  </div>



<?php get_template_part(navigation); ?>
