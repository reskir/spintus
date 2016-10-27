<div class="pages-stack">
  <div class="page" id="<?php the_title(); ?>">
      <header class="bp-header cf animate" data-emergence="hidden">
          <h1 class="bp-header__title" ><?php the_title(); ?></h1>
        	<div class="info">
        		<?php the_content(); ?>
        	</div>
      </header>
    </div>
    <?php get_template_part(contact); ?>
</div>
<!-- /.blog-post -->
