<div class="main-content">
  <div class="page" id="<?php the_title(); ?>">
      <div class="bp-header cf about animate row" data-emergence="hidden" >
          <h1 class="bp-header__title animate col-lg-12 col-md-12 col-sm-12 col-xs-12" data-emergence="hidden"> <?php the_title(); ?> </h1>
        	<div class="info col-lg-6 col-md-8 col-sm-12 col-xs-12">
        		<?php the_content(); ?>
        	</div>
      </div>
    </div>
   <?php get_template_part(contact); ?>
</div>
<!-- /.blog-post -->
