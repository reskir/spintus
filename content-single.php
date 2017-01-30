<div class="main-content">
  <div class="page project" id="<?php the_title(); ?>">
      <div class="hero__image" style="background:linear-gradient(
      rgba(42, 43, 48, 0.05),
      rgba(42, 43, 48, 0.1),
      rgba(42, 43, 48, 0.6),
      rgba(42, 43, 48, 1)

    ), url('<?php the_post_thumbnail_url(); ?>')"></div>

      <div class="bp-header cf animate row" data-emergence="hidden">
          <h1 class="bp-header__title col-lg-12 col-md-12 col-xs-12 col-sm-12" ><?php the_title(); ?></h1>
          <span class="col-lg-12 col-md-12 col-xs-12 col-sm-12">  <div class="smaller"> Autorius: 	<?php the_author(); ?>   <br />  Data:  <?php the_date(); ?></div> </span>
        	<div class="info col-lg-5 col-md-10 col-sm-12 col-xs-12">
        		<?php the_content(); ?>
        	</div>
      </div>
    </div>
    <?php get_template_part(contact); ?>
</div>
