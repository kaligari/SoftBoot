<?php /* Template Name: Square 4 Col. c-c-c-c */ ?>

  <section id="<?php echo $post->post_name ?>"
  class="template-square-4col-c-c-c-c <?php $custom_class = get_field('custom_class'); if(!empty($custom_class)) echo $custom_class; ?>"
  style="<?php $background_color = get_field('content_settings_background_color'); if(!empty($background_color)) echo 'background-color:'.$background_color.';'; ?>
  <?php $text_color = get_field('content_settings_text_color'); if(!empty($text_color)) echo 'color:'.$text_color.';'; ?>"   
  >
    <article>
      <?php if(get_field('fullwidth_fullwidth')): ?>
      <div class="container-fluid">
      <? else: ?>
      <div class="container">
      <?php endif; ?>

          <div class="col-md-12">
            <?php if(!get_field('content_settings_hide_title')): ?>
            <div class="col-md-12 page-header">
              <h1 class="text-center"><?php the_title(); ?></h1>
            </div>
            <?php endif; ?>
          </div>
          
          <div class="col-md-3">
            <div class="square-box">
              <div class="square-box-inner">      
                <div class="middle">
                  <div class="content">
                    <?php the_content(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="square-box">
              <div class="square-box-inner">      
                <div class="middle">
                  <div class="content">
                    <?php the_field('content_2nd_content'); ?>
                  </div>
                </div>
              </div>
            </div>       
          </div>
          <div class="col-md-3">
            <div class="square-box">
              <div class="square-box-inner">      
                <div class="middle">
                  <div class="content">
                    <?php the_field('content_3rd_content'); ?>
                  </div>
                </div>
              </div>
            </div>       
          </div>
          <div class="col-md-3">
            <div class="square-box">
              <div class="square-box-inner">      
                <div class="middle">
                  <div class="content">
                    <?php the_field('content_4th_content'); ?>
                  </div>
                </div>
              </div>
            </div>       
          </div>

      </div>
    </article>    
  </section>  