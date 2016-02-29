<?php /* Template Name: Square 2 Col. c-ca */ ?>
  
  <?php
    $post_content = apply_filters('the_content', $post->post_content);
    $post_title = $post->post_title;
  ?> 
         
  <section id="<?php echo $post->post_name ?>"
  class="template-square-2col-c-ca <?php $custom_class = get_field('custom_class'); if(!empty($custom_class)) echo $custom_class; ?>"
  style="<?php $background_color = get_field('content_settings_background_color'); if(!empty($background_color)) echo 'background-color:'.$background_color.';'; ?>
  <?php $text_color = get_field('content_settings_text_color'); if(!empty($text_color)) echo 'color:'.$text_color.';'; ?>"   
  >
  
    <article>
      
      <div class="container-fluid">      
        
        <?php

          ob_start();
          include 'snippet-carousel.php';        
          $snippet_carousel = ob_get_clean(); 

        ?>
        
        <div class="col-md-6 no-padding mobile-only">
          <div class="square-box">
            <div class="square-box-inner no-padding">
              <?php echo $snippet_carousel; ?>
            </div>
          </div>
        </div>
                       
        <div class="col-md-6 no-padding image-no-fullwidth">
          <div class="square-box">
            <div class="square-box-inner">      
              <div class="middle">
                <div class="content">
                  <?php if(!get_field('content_settings_hide_title',$post_id)): ?>
                  <div class="row">
                    <div class="col-md-offset-3 col-md-6 page-header">
                      <h1 class="text-center"><?php echo $post_title; ?></h1>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php echo $post_content ?>                     
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-6 no-padding desktop-only">
          <div class="square-box">
            <div class="square-box-inner no-padding">
              <?php echo $snippet_carousel; ?>
            </div>
          </div>
        </div>        
          
      </div>
      
    </article>  
  
  </section>