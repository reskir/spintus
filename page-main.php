<?php
/*
Template Name: Main
*/
?>

<?php get_header() ?>
      

        <?php
  			get_template_part( 'templates/main', get_post_format() );
  		?>

<?php get_footer() ?>
