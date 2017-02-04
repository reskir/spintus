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

              <?php
function send_my_awesome_form(){

    if (!isset($_POST['submit'])) { return; }

    // get the info from the from the form
    $form = array();
    $form['name'] = $_POST['name'];
    $form['email'] = $_POST['email'];
    $form['tel'] = $_POST['tel'];

    // Build the message
    $message  = "Name :" . $form['name'] ."\n";
    $message .= "Company :" . $form['email']  ."\n";
    $message .= "Email :" . $form['tel']     ."\n";

    //set the form headers
    $headers = 'From: Contact form <your@contactform.com>';

    // The email subject
    $subject = 'you got mail';

    // Who are we going to send this form too
    $send_to = 'kiril.abashkin@gmail.com';

    if (wp_mail( $send_to, $subject, $message, $headers ) ) {
         wp_redirect(home_url()); exit;
     }
}

            add_action('wp_head', 'send_my_awesome_form');
              ?>

              <form method="post" action="" class="form col-lg-12 col-md-12 col-sm-12 col-xs-12" required>
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
                        <button class="btn btn--success" type="submit" id="submit">Bendrauti</button>
                      </div>
                    </div
                  </div>
                </fieldset>

                <fieldset>
                  <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    </div>

                  </div>
                </fieldset>

              </form>
              
            </div>


          </div>
      </div>



  </div>
</div>
