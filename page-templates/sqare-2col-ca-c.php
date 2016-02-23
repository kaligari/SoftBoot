<?php /* Template Name: Square 2 Col. ca-c */ ?>
  
  <?php
    $post_id = $post->ID;
    $post_content = apply_filters('the_content', $post->post_content);
    $post_title = $post->post_title;
  ?>       
      
  <section id="<?php echo $post->post_name ?>"
  <?php $custom_class = get_field('custom_class'); if(!empty($custom_class)) echo 'class="'.$custom_class.'"'; ?>
  style="<?php $background_color = get_field('content_settings_background_color'); if(!empty($background_color)) echo 'background-color:'.$background_color.';'; ?>
  <?php $text_color = get_field('content_settings_text_color'); if(!empty($text_color)) echo 'color:'.$text_color.';'; ?>"   
  >
  
    <article>
      
      <div class="container-fluid">
        
        <div class="col-md-6 no-padding">
          <div class="square-box">
            <div class="square-box-inner no-padding">
              <div class="content"> 
                <div class="<?php the_field('content_position_content_position'); ?>">
                  <div class="content">                          
                    <div class="col-md-12">              
                      <?php the_field('content_2nd_content'); ?>
                    </div>                                               
                  </div>
                </div>
              </div>
              <?php include 'snippet-carousel.php'; ?>
              
            </div>
          </div>
        </div>
        
        <div class="col-md-6 no-padding image-no-fullwidth">
          <div class="square-box">
            <div class="square-box-inner">      
              <div class="middle">
                <div class="content">
                  <?php if(!get_field('content_settings_hide_title',$post_id)): ?>
                  <div class="col-md-12 page-header">
                    <h1 class="text-center"><?php echo $post_title; ?></h1>
                  </div>
                  <?php endif; ?>
                  <?php echo $post_content; ?>                     
                </div>
              </div>
            </div>
          </div>
        </div>
          
      </div>
      
    </article>  
  
  </section>