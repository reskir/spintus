  	<script>

      (function(){
        document.body.classList.remove('fade-out');
      })()
	  </script>

       <div class="footer row top-xs">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 center-xs footer_block">
              <ul class="footer_list">
                <li class="footer_list_item">Ilja Sapožnikov</li>
                <li class="footer_list_item"><?php echo get_option('telephone');?></li>
              </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center-xs footer_block">
              <p class="smaller">facebook</p>
              <p class="smaller">instagram</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 center-xs footer_block">
              <p class="smaller">Informacija apie puslapį</p>
              <p class="smaller"><?php echo "" . date( 'Y', current_time( 'timestamp', 1 ) );?></p>
            </div>
       </div>
    
   <?php wp_footer(); ?>

  </body>
</html>
