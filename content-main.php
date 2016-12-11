<div class="pages-stack">
  <div class="page home" id="<?php the_title(); ?>">

      <div class="hero" >
          <div class="hero__text animate"  data-emergence="hidden">
            <h3 class="hero__text--default">Baldai, <br> prisitaikantys <br> <span class="red">jūsų</span> poreikiams</h3>
          </div>
      </div>

      <header class="bp-header cf">

         <div class="info main ">
          	<?php the_content(); ?>
         </div>

      </header>
    </div>
    <?php get_template_part(contact); ?>
</div>
<!-- /.blog-post -->
