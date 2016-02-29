<?php /* Template Name: Carousel Item */ ?>

  <div class="item template-carousel-item image <?php if($carousel_item_active) echo 'active'; ?>
    <?php $custom_class = get_field('custom_class'); if(!empty($custom_class)) echo $custom_class; ?>
    <?php the_field('image_parallax_type'); ?>"
    <?php if(get_field('height')) echo 'data-height="'.(get_field('height')/100).'"'; ?>
    style="background-image:url(<?php the_acf_image(get_field('image',$post->ID),isMobile($md)); ?>);">

    <?php
      $image_overlay = get_field('image_overlay');
      if($image_overlay):
    ?>
      <div class="<?php if(get_field('image_overlay_loop')) echo 'overlay-loop'; else echo 'overlay'; ?>"
           style="background-image:url(<?php echo $image_overlay; ?>)"></div>
    <?php endif; ?>
    
    <div class="<?php the_field('content_position_content_position'); ?>">
      <div class="content">        
        <div class="container">      
          <div class="row">
            <div class="col-md-12">              
              <?php the_content(); ?>
            </div>     
          </div>
        </div>
      </div>
    </div>
    
  </div>