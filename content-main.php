<div class="pages-stack">
  <div class="page home" id="<?php the_title(); ?>">

      <div class="hero animate" data-emergence="hidden">
          <div class="hero__text " >
            <div class="hero__text--default">Long-term furniture</div>
            <!-- <div><span class="hero__text--furniture">Baldai</span></div>
            <div><span class="hero__text--with">su</span></div>
            <div><span class="hero__text--attitude">charakteriu</span></div> -->
          </div>
      </div>

      <header class="bp-header cf">

         <h1 class="bp-header__title " > <?php the_title(); ?> </h1>
         <div class="info main ">
          	<?php the_content(); ?>
         </div>

      </header>
    </div>
    <?php get_template_part(contact); ?>
</div>
<!-- /.blog-post -->
