<?php /* Template Name: Gallery */ ?>

  <?php $post_name = $post->post_name; ?>
  
  <section id="<?php echo $post_name; ?>"
  class="template-content <?php $custom_class = get_field('custom_class'); if(!empty($custom_class)) echo $custom_class; ?> "
  style="<?php $background_color = get_field('content_settings_background_color'); if(!empty($background_color)) echo 'background-color:'.$background_color.';'; ?>
  <?php $text_color = get_field('content_settings_text_color'); if(!empty($text_color)) echo 'color:'.$text_color.';'; ?>"   
  >
    <article class="<?php if(get_field('height')!='') echo ' unit '; ?>"
    <?php if(get_field('height')) echo 'data-height="'.(get_field('height')/100).'"'; ?>
    >
    
      <div class="swiper-container" id="swiper-<?php echo $post_name; ?>">
        <div class="swiper-wrapper">
                    
          <?php
           $gallery = grab_ids_from_gallery();                
           foreach($gallery as $gallery_item):                
             $image_full = wp_get_attachment_image_src($gallery_item,'full');
             if($image_full[0])
              $image_src = $image_full[0];
             else   
              $image_src = '';                    
          ?>
          <div class="swiper-slide">
            
            <img data-src="<?php echo $image_src; ?>" alt="<?php the_title(); ?>" class="swiper-lazy" alt="" />
                        
            <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
          </div>  
          <?php endforeach; ?>
                    
        </div>

        <div class="swiper-pagination swiper-pagination-white"></div>

        <div class="swiper-button-prev swiper-button-white"></div>
        <div class="swiper-button-next swiper-button-white"></div>
                
      </div>
      
    </article>    
  </section>
  <?php
  
  $GLOBALS['gallery_swipers'] .="
      var swiper = new Swiper('#swiper-".$post_name."', {
          nextButton: '.swiper-button-next',
          prevButton: '.swiper-button-prev',
          pagination: '.swiper-pagination',
          loop: true,        
          paginationClickable: true,        
          preloadImages: false,
          autoplay: 2500,                  
          lazyLoading: true,";
  
  if(get_field('carousel_autoplay'))
    $GLOBALS['gallery_swipers'] .='autoplay: '.get_field('carousel_interval').',';
  
  
  $GLOBALS['gallery_swipers'] .="
      });
  ";      
  ?>  