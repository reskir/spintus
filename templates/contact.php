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
                add_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );
                 // if the submit button is clicked, send the email
                    if(isset($_POST['submit']) && ($_POST['name']) !== '' && ($_POST['email']) !== '' && ($_POST['message']) !== '' ) {
                          $to = get_bloginfo('admin_email');
                          $clientname = sanitize_text_field($_POST['client_name']);
                          $email = sanitize_email($_POST['email']);
                          $telephone = sanitize_text_field($_POST['tel']);
                          $subject = 'Spintus.lt užklausa dėl baldų nuo ' . $clientname;
                          $message = 'Telefono numeris: '.$telephone.'<br /> Žinutė: '.sanitize_text_field($_POST['message']);
                          $headers[] = 'From: ' . $email;
                          $headers[] = 'Cc: ' . $email;
                          $headers[] = $to;
                          if(wp_mail( $to, $subject, $message, $headers )) {
                            echo '<div>Jūsų žinūtė išsiųsta</div>';
                          };
                    }
                  // Reset content-type to avoid conflicts -- https://core.trac.wordpress.org/ticket/23578
                  remove_filter( 'wp_mail_content_type', 'wpdocs_set_html_mail_content_type' );
                  
                  function wpdocs_set_html_mail_content_type() {
                      return 'text/html';
                  }                                    
                ?>
              <form method="post" class="form col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <fieldset>
                  <div class="row">
                    <h4 class="col-xs-12">Pasiteiraukite dėl savo projekto</h4>
                    <div class="input-group col-lg-4 col-md-4 col-sm-4 col-xs-12">
                      <input class="input" type="text" id="client_name" name="client_name" required />
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
                          <textarea class="input input--textarea" noresize id="message" name="message" required></textarea>
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