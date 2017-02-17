<div class="main-content">
  <div class="page home" id="<?php the_title(); ?>">
      <div class="bp-header cf">

         <div class="info main">
            <div class="row middle-xs home_block">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 first-lg first-md first-sm" >
                <img src="http://spintus.lt/dev/wp-content/uploads/2016/10/kitchen-1-1024x683.jpg" alt="" class="alignnone x--pv-l" style="width:100%;" />
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 first-xs">
                <div class="x--ph-l">
                  <h2> Nuo matavimo iki montavimo </h2>
                  <p>
                    Baldininkas paruoš projektą pagal jūsų poreikius ir gyvenimo būdą, suplanuos erdvė ir pagamins baldus atitinkančius jums.

                  </p>
                </div>
              </div>
            </div>

            <div class="line"></div>

            <div class="row middle-lg home_block">
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="x--ph-l">
                  <h2> Kokybė ir kruopštumas </h2>
                  <p>
                    Kiek daug smulkmenų turi įtakos gyvenimo kokybei ir komfortui. Baldai neatsiejamai yra tapatinami su tuo. Mes ne tik įrenginėjam jūsų erdvė, bet ir sukuriam baldus su integruotu apšvietimu, funkcionaliu dizainu iš ilgaamžiškų ir naturalių medžiagų.
                  </p>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" >
                <img src="<?php echo get_template_directory_uri();?>/images/kitchen-sketch.png" alt="" class="alignnone x--pv-l" style="width:100%" />
              </div>
            </div>

           <div class="line"></div>

            <div class="row center-xs">
              <h2>Klientų atsiliepimai</h2>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="review_slider">
                  <?php
                        $args =  array(
                          'post_type' => 'reviews'
                        );
                        $custom_query = new WP_Query( $args );
                        while ($custom_query->have_posts()) : $custom_query->the_post(); ?>

                        <div class="review" style="background:linear-gradient(to bottom, 
                        rgba(0,0,0, 0.1),
                        rgba(0,0,0, 0.3),
                        rgba(0,0,0,0.4),
                        rgba(0,0,0,0.5),
                        rgba(0,0,0,0.6),
                        rgba(0,0,0,0.7)), url('<?php echo the_post_thumbnail_url();?>') no-repeat center center/cover;">
                          <div class="row start-xs">
                            <div class="col-sm-7 col-xs-12 review_content">
                              <blockquote class="review_quote">
                                <?php echo strip_tags( get_the_excerpt())?>
                              </blockquote>
                              <div class="review_author">
                                <?php   $mykey_values = get_post_custom_values( 'client' );
                                        foreach ( $mykey_values as $key => $value ) {
                                          echo "$value"; 
                                        }?>
                              </div>
                            </div>
                          </div>
                        </div>

                  <?php endwhile; ?>
                </div>
              </div>
            </div>

        </div>

      </div>
    </div>
</div>
<script>

 var $ = jQuery;

 var setHeight = function(){
   $('.hero').height(window.innerHeight - ($('.header').outerHeight()));
 }
 setHeight()

 $( window ).resize(function() {
    if(window.innerHeight/window.innerWidth > 2) {
      setHeight()
    }
});

 $('.hero__scroll').click(function() {
    $('body,html').animate({scrollTop: $('.hero').height()}, 600); 
 });
</script>
<!-- /.blog-post -->
