<div class="pages-stack">
  <div class="page project" id="<?php the_title(); ?>">
      <div class="hero__image" style="background:linear-gradient(
      rgba(42, 43, 48, 0.45),
      rgba(42, 43, 48, 0.6),
      rgba(42, 43, 48, 1)

    ), url('<?php the_post_thumbnail_url(); ?>')"></div>

      <header class="bp-header cf animate row center-xs" data-emergence="hidden">
          <h1 class="bp-header__title col-lg-12 col-md-12 col-xs-12 col-sm-12" ><?php the_title(); ?></h1>
          <span class="col-lg-12 col-md-12 col-xs-12 col-sm-12">  <h5> Autorius: 	<?php the_author(); ?>   <br />  Data:  <?php the_date(); ?></h5> </span>
        	<div class="info col-lg-5 col-md-10 col-sm-12 col-xs-12">
        		<?php the_content(); ?>
        	</div>
      </header>
    </div>
    <?php get_template_part(contact); ?>
</div>
