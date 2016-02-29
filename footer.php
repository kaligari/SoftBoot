    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <?php dynamic_sidebar( 'footer-1' ); ?>  
          </div>
          <div class="col-md-3">
            <?php dynamic_sidebar( 'footer-2' ); ?>
          </div>
          <div class="col-md-3">
            <?php dynamic_sidebar( 'footer-3' ); ?>
          </div>
          <div class="col-md-3">
            <?php dynamic_sidebar( 'footer-4' ); ?>
          </div>
          <div class="col-md-12 powered text-center">            
            <p>&copy; Wszelkie prawa zastrzeżone. Powered by <a href="http://www.kolorowyinternet.pl/">Ki</a></p>
          </div>
        </div>
      </div>
    </footer>  
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- <script src="<?php bloginfo( 'template_url' ); ?>/js/scripts.min.js"></script> -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/softboot.js"></script>    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/ie10-viewport-bug-workaround.js"></script>
    <script> 
      var $buoop = {vs:{i:10,f:30,o:20,s:7},c:2}; 
      function $buo_f(){ 
       var e = document.createElement("script"); 
       e.src = "//browser-update.org/update.min.js"; 
       document.body.appendChild(e);
      };
      try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
      catch(e){window.attachEvent("onload", $buo_f)}
    </script>
    <?php wp_footer(); ?>     
  </body>
</html>