<?php /* Template Name: Square 2 Col. i-c */ ?>

  <section id="<?php echo $post->post_name ?>"
  <?php $custom_class = get_field('custom_class'); if(!empty($custom_class)) echo 'class="'.$custom_class.'"'; ?>
  style="<?php $background_color = get_field('content_settings_background_color'); if(!empty($background_color)) echo 'background-color:'.$background_color.';'; ?>
  <?php $text_color = get_field('content_settings_text_color'); if(!empty($text_color)) echo 'color:'.$text_color.';'; ?>"   
  >
    <article class="unit">      
      <div class="container-fluid">
                            
        <div class="col-md-6 no-padding image-no-fullwidth <?php the_field('image_parallax_type'); ?>" style="background-image:url(<?php the_acf_image(get_field('image',$post->ID),isMobile($md)); ?>);">
          <div class="square-box">
            <div class="square-box-inner">      
              <div class="<?php the_field('content_position_content_position'); ?>">
                <div class="content">
                  <?php the_field('content_2nd_content'); ?>                                    
                </div>
              </div>
            </div>
          </div>
        </div> 

        <div class="col-md-6 no-padding">
          <div class="square-box">
            <div class="square-box-inner">      
              <div class="middle">
                <div class="content">
                  <?php if(!get_field('content_settings_hide_title')): ?>
                  <div class="col-md-12 page-header">
                    <h1 class="text-center"><?php the_title(); ?></h1>
                  </div>
                  <?php endif; ?>
                  <?php the_content(); ?>                                    
                </div>
              </div>
            </div>
          </div>
        </div>
                               
      </div>
    </article>    
  </section>