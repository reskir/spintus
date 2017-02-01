<div class="main-content">
  <div class="page" id="<?php the_title(); ?>">
      <div class="bp-header cf about row">
        	<div class="info col-xs-12 col-lg-8">
            <dl class="accordion">

              <dt><a href="">Kiek kainuoja mūsų baldai?</a></dt>
              <dd>
                Kainos priklauso nuo projekto sudėtingumo ir papildomų reikalavimų. Kainoms taip pat turi įtakos medžiagos, plotis ir kita.
                <table class="table">
                  <colgroup>
                  <col style="width: 70%" />
                  <col style="width: 30%" />
                  
                  </colgroup>
                  <thead>
                    <tr>
                      <th>
                        Darbų tipas
                      </th>
                      <th class="numeric">
                        Kaina
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Virtuvės baldų komplektas</td>
                      <td class="numeric"> €300 - €1200 </td>
                    </tr>
                    <tr>
                      <td>Miegamojo baldų komplektas</td>
                      <td class="numeric"> €300 - €1200 </td>
                    </tr>
                    <tr>
                      <td>Lauko baldų komplektas</td>
                      <td class="numeric"> €300 - €1200 </td>
                    </tr>
                    <tr>
                      <td>
                        <p>Baldų surinkimas ir montavimas
                          <span class="smaller">jeigu baldus užsakote pas mus - surinkimas nemokamas</span>
                        </p>
                      </td>
                      <td class="numeric"> €400 - €600 </td>
                    </tr>
                  </tbody>
                </table>
              
              </dd>

              <dt><a href="">Kaip mes dirbame?</a></dt>
              <dd>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</dd>

              <dt><a href="">Garantinis aptarnavimas</a></dt>
              <dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</dd>

              <dt><a href="">Baldų gaminimo laikas?</a></dt>
              <dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</dd>

              <dt><a href="">Mūsų darbo procesas</a></dt>
              <dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</dd>


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
          return false;
        });

      })(jQuery);
</script>
</div>
<!-- /.blog-post -->
