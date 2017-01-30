
  <div class="" id="home">
    <div class="bp-header cf">
      <?php
        $lastposts = get_posts( array(
            'posts_per_page' => 1
        ) );

        if ( $lastposts ) {
            foreach ( $lastposts as $post ) :
                setup_postdata( $post ); ?>
                <span class="bp-header__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                <p class="info">
                  <?php the_content(); ?>
                </p>
            <?php
            endforeach;
            wp_reset_postdata();
        }
      ?>
    </div>
  </div>



  <div class="page" id="page-docu">
    <?php get_template_part('page-about'); ?>
  </div>


  <div class="page" id="page-manuals">
    <?php get_template_part('page-projects'); ?>
  </div>


  <div class="page" id="page-contact">
    <?php get_template_part('page-contact'); ?>
  </div>

<!-- /pages-stack -->
