<div class="main-content">
  <div class="page" id="<?php the_title(); ?>">
      <div class="bp-header cf about row start-xs">
        	<div class="info col-xs-12 col-md-12 col-sm-12 col-lg-12">
            <h3> Dažniausiai užduodami klausimai </h3>
            <dl class="accordion">

              <dt ><a href="">Kaip mes dirbame?</a></dt>
              <dd class="col-xs-12 start-xs">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/prototype.svg" class="accordion_prototype--desktop" />
                    <img src="<?php echo get_template_directory_uri(); ?>/images/prototype-mobile.svg" class="accordion_prototype--mobile" />
              </dd>

              <dt><a href="">Garantinis aptarnavimas</a></dt>
              <dd class="col-xs-12 col-md-10 col-sm-12 col-lg-8 start-xs">Mūsų gaminiams ir jų montavimui skiriama <strong>1 metų garantija</strong>.</dd>

              <dt><a href="">Baldų gaminimo laikas?</a></dt>
              <dd class="col-xs-12 col-md-10 col-sm-12 col-lg-8 start-xs">
                <p>Baldų pagaminimo laikas gali trūkti nuo 1 iki 2 mėnesių, priklauso nuo sudėtingumo ir apimties.
                Tam, kad tiksliau įvertinti gaminimo laiką <a href="tel:<?php echo get_option('telephone'); ?>">paskambinkite mums</a> arba užpildykite <a href="<?php echo get_permalink( get_page_by_title( 'Kontaktai' ) ) ?>"> formą </a>.</p>
              </dd>

              <dt><a href="">Kaip padaryti užsakymą?</a></dt>
              <dd class="col-xs-12 col-md-10 col-sm-12 col-lg-8 start-xs">
                <a href="tel:<?php echo get_option('telephone'); ?>">Paskambinkite mums</a> arba užpildykite <a href="<?php echo get_permalink( get_page_by_title( 'Kontaktai' ) ) ?>"> formą </a> mūsų puslapyje.
              </dd>


            </dl>
        	</div>
      </div>
    </div>
    <script>

    (function($) {
        var allPanels = $('.accordion > dd');
        var allHeaders = $('.accordion > dt');
        
        $('.accordion > dt > a').click(function() {
          allPanels.removeClass('active');
          allHeaders.removeClass('active');
          $(this).parent().addClass('active');
          $(this).parent().next().addClass('active');
          $('body').scrollTo($(this).parent());
          return false;
        });

      })(jQuery);
</script>
</div>
<!-- /.blog-post -->
