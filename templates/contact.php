<div class="main-content">
  <div class="page contact" id="contact">
      <div class="bp-header cf">
          <div class="info">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="contact_info x--p-l">
                  <li>Ilja Sapožnikov</li>
                  <li>LT 70001 4565454 123213 Swedbank</li>
                  <li>Ulonų g. 5a, Vilnius</li>
                  <li>
                    <strong>
                      <a href="tel:+37060507073">+370 60507073</a>
                    </strong>
                  </li>
                </ul>
              </div>
              <form method="post" action = "<?php $_PHP_SELF ?>" class="form col-lg-12 col-md-12 col-sm-12 col-xs-12" required>
                <fieldset>
                  <div class="row">
                    <h4 class="col-xs-12">Pasiteiraukite dėl savo projekto</h4>
                    <div class="input-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <input class="input" type="text" id="name" name="name" required />
                      <label class="label" id="name" for="name">Vardas</label>
                    </div>
                    <div class="input-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <input class="input" type="email" id="email" name="email" required />
                      <label class="label" id="email" for="email">El.paštas</label>
                    </div>
                    <div class="input-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <input class="input" type="tel" id="tel" name="tel" required />
                      <label class="label" id="tel" for="tel">Telefono numeris</label>
                    </div>
                  </div>

                </fieldset>

                <fieldset>
                  <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-4 col-xs-12">
                      <h4>Mane domintų</h4>
                      <div class="row x--p">
                          <div class="input-group col-lg-5 col-md-6 col-sm-12 col-xs-12">
                            <input class="input--checkbox" type="checkbox" id="test1" />
                            <label class="label" for="test1">Virtuvės</label>
                          </div>
                          <div class="input-group col-lg-5 col-md-6 col-sm-12 col-xs-12">
                            <input class="input--checkbox" type="checkbox" id="test0" />
                            <label class="label" for="test0">Miegamojo</label>
                          </div>
                          <div class="input-group col-lg-5 col-md-6 col-sm-12 col-xs-12">
                            <input class="input--checkbox" type="checkbox" id="test3" />
                            <label class="label" for="test3">Prieškambario</label>
                          </div>
                          <div class="input-group col-lg-5 col-md-6 col-sm-12 col-xs-12">
                            <input class="input--checkbox" type="checkbox" id="test4" />
                            <label class="label" for="test4">Vonios ir tualeto</label>
                          </div>
                          <div class="input-group col-lg-5 col-md-6 col-sm-12 col-xs-12">
                            <input class="input--checkbox" type="checkbox" id="lauko_baldai" />
                            <label class="label" for="lauko_baldai">Lauko</label>
                          </div>
                          <div class="input-group col-lg-5 col-md-6 col-sm-12 col-xs-12">
                            <input class="input--checkbox" type="checkbox" id="kiti" />
                            <label class="label" for="kiti">Kiti</label>
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                        <h4>Komentaras</h4>
                        <div class="input-group">
                          <textarea class="input input--textarea" noresize required id="message" name="message"></textarea>
                        </div>
                        <div>
                          <button class="btn btn--success" name="submit" type="submit" id="submit">Bendrauti</button>
                        </div>
                      </div>
                    </div>
                </fieldset>

              </form>
            </div>
          </div>
      </div>
  </div>
</div>

<?php
  // if the submit button is clicked, send the email
      add_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );
      
      $to = 'kiril.abashkin@gmail.com';
      $subject = 'The subject';
      $body = 'The email body content';
      
      wp_mail( $to, $subject, $body );
      
      // Reset content-type to avoid conflicts -- https://core.trac.wordpress.org/ticket/23578
      remove_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );
      
      function wpdocs_set_html_mail_content_type() {
          return 'text/html';
      }
?>