<div class="main-content">
  <div class="page contact" id="contact">
      <div class="bp-header cf">
          <div class="info">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="contact_info x--p-l">
                  <li>Ilja Sapožnikov</li>
                  <li><?php echo get_option('bank_acc'); ?></li>
                  <li><?php echo get_option('address'); ?></li>
                  <li>
                    <strong>
                      <a href="tel:<?php echo str_replace('/\s+/', ' ', get_option('telephone')); ?>"><?php echo get_option('telephone'); ?></a>
                    </strong>
                  </li>
                </ul>
              </div>

              
                <?php
                 // if the submit button is clicked, send the email
                    if(isset($_POST['submit'])) {
                          $to = 'kiril.abashkin@gmail.com';
                          $client_name = sanitize_text_field($_POST['client_name']);
                          $email = sanitize_email($_POST['email']);
                          $telephone = sanitize_text_field($_POST['tel']);
                          $subject = 'Jums rašo ' . $client_name . $telephone;
                          $message = sanitize_text_field($_POST['message']);
                          $headers[] = $email;
                          $headers[] = $to;
                          wp_mail( $to, $subject, $message, $headers );
                    }                                    
                ?>
              <form method="post" class="form col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <fieldset>
                  <div class="row">
                    <h4 class="col-xs-12">Pasiteiraukite dėl savo projekto</h4>
                    <div class="input-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <input class="input" type="text" id="client_name" client_name="client_name" required />
                      <label class="label" id="client_name" for="client_name">Vardas</label>
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
                          <textarea class="input input--textarea" noresize id="message" name="message"></textarea>
                        </div>
                        <div>
                          <input  class="btn btn--success" name="submit" type="submit" value="Bendrauti" />
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