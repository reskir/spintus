<div class="main-content">
  <div class="page" id="<?php the_title(); ?>">
      <div class="bp-header cf about row start-xs">
        	<div class="info col-xs-12 col-md-10 col-sm-12 col-lg-8 start-xs">
            <h3> Dažniausiai užduodami klausimai </h3>
            <dl class="accordion">

              <dt class="active"><a href="">Kiek kainuoja pagaminti baldus?</a></dt>
              <dd class="active">
                <p>Kainos priklauso nuo projekto sudėtingumo ir papildomų reikalavimų. Kainoms taip pat turi įtakos medžiagos, plotis ir kita.</p>
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
                      <td class="numeric"> €500 - €1200 </td>
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
                <div class="smaller"><span class="red">*</span> Lentelėje pateikiamos apytikslės kainos.</div>
              
              </dd>

              <dt ><a href="">Kaip mes dirbame?</a></dt>
              <dd>Iš pradžių mes susitinkame su klientu ir išsiaiškiname kuo mes galėtume jam padėti. Aptarimo metu...</dd>

              <dt><a href="">Garantinis aptarnavimas</a></dt>
              <dd>Parašyti kažką apie garantinį</dd>

              <dt><a href="">Baldų gaminimo laikas?</a></dt>
              <dd>Kiek užtrunka pagaminti baldus</dd>

              <dt><a href="">Mūsų darbo procesas</a></dt>
              <dd>Parodyti arba išaiškinti darbo procesą</dd>

              <dt><a href="">Kaip padaryti užsakymą?</a></dt>
              <dd>
                Paskambinkite arba užpildykite <a href="<?php echo site_url(); ?>/kontaktai"> formą </a> mūsų puslapyje.
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
          return false;
        });

      })(jQuery);
</script>
</div>
<!-- /.blog-post -->
