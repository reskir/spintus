<div class="main-content">
  <div class="page" id="<?php the_title(); ?>">
      <div class="bp-header cf animate" data-emergence="hidden">
          <h1 class="bp-header__title" ><?php the_title(); ?></h1>
        	<div class="info">
        		<?php the_content(); ?>
        	</div>
      </div>
    </div>
    <?php get_template_part(contact); ?>
</div>
<!-- /.blog-post -->
