<?php
/*
Template Name: Contact
*/
?>

<?php get_header() ?>


        <?php
  				if ( have_posts() ) : while ( have_posts() ) : the_post();

  					get_template_part( 'templates/contact', get_post_format() );

  				endwhile; endif;
  			?>

<?php get_footer() ?>
