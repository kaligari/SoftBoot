<?php /* Template Name: Google Map */ ?>

  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script>
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
      var myLatlng = new google.maps.LatLng(<?php the_field('google_map_lat'); ?>,<?php the_field('google_map_lng'); ?>);
      var myOptions = {
          zoom: <?php the_field('google_map_zoom'); ?>,
          scrollwheel: false,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          styles: <?php echo htmlspecialchars_decode(get_field('google_map_style')); ?>,
          zoomControl: true,
          zoomControlOptions: {
              position: google.maps.ControlPosition.LEFT_BOTTOM
          }
      };
      var map = new google.maps.Map(document.getElementById('gmap'), myOptions);
      <?php
        $icon = get_field('google_map_marker_icon');
        $marker_icon = $icon['url'];
        if($marker_icon):
      ?>
      var markerImage = new google.maps.MarkerImage('<?php echo $marker_icon; ?>',
                new google.maps.Size(<?php echo $icon['width']; ?>, <?php echo $icon['height']; ?>),
                new google.maps.Point(0, 0),
                new google.maps.Point(<?php echo (int)($icon['width']/2); ?>, <?php echo (int)($icon['height']/2); ?>));                      
                                
      <?php endif; ?>     
      var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          draggable:false,
          <?php if($marker_icon):?>icon:markerImage,<?php endif; ?>
          title: 'Mapa'
      });
    }
  </script>
  <section id="<?php echo $post->post_name ?>">
    <article id="gmap" class="unit" <?php if(get_field('height')) echo 'data-height="'.(get_field('height')/100).'"'; ?> ></article>
  </section>                                             