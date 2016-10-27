<?php
/*
	Template Name: Projects
*/
?>
<?php get_header(); ?>

<div class="pages-stack">

	<div class="page" id="<?php the_title(); ?>">
		<div class="row animate" data-emergence="hidden">
			<?php // Display blog posts on any page @ http://m0n.co/l
			$temp = $wp_query; $wp_query= null;
			$wp_query = new WP_Query(); $wp_query->query('showposts=10' . '&paged='.$paged);
			while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

				<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
					<header class="bp-header cf project_list" >
							<h1 class="bp-header__title" > <a class="header__link" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h1>
							<span>  <h5> Autorius: 	<?php the_author(); ?>   <br />  Data:  <?php the_date(); ?></h5> </span>
							<div class="info row top-xs">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<a href="<?php the_permalink(); ?>">
										<div class="thumbnail col-lg-12" style="background-image: url('<?php the_post_thumbnail_url() ?>');">
										</div>
									</a>
									<br />
									<a class="link" href=" <?php the_permalink(); ?> "> Skaityti daugiau </a>

								</div>
							</div>
					</header>
			</div>

			<?php endwhile; ?>

			<?php if ($paged > 1) { ?>

			<?php } else { ?>


			<?php } ?>

			<?php wp_reset_postdata(); ?>
		</div>
	</div>


	<?php get_template_part(contact); ?>

 </div>

<?php get_footer(); ?>
