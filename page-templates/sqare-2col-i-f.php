<?php /* Template Name: Square 2 Col. i-f */ ?>

  <section id="<?php echo $post->post_name ?>"
  class="template-square-2col-i-f <?php $custom_class = get_field('custom_class'); if(!empty($custom_class)) echo $custom_class; ?>"
  style="<?php $background_color = get_field('content_settings_background_color'); if(!empty($background_color)) echo 'background-color:'.$background_color.';'; ?>
  <?php $text_color = get_field('content_settings_text_color'); if(!empty($text_color)) echo 'color:'.$text_color.';'; ?>"   
  >
    <article>      
      <div class="container-fluid">
                            
        <div class="col-md-6 no-padding image-no-fullwidth <?php the_field('image_parallax_type'); ?>" style="background-image:url(<?php the_acf_image(get_field('image',$post->ID),isMobile($md)); ?>);">
          <div class="square-box">
            <div class="square-box-inner">      
              <div class="<?php the_field('content_position_content_position'); ?>">
                <div class="content">
                  <div class="col-md-12">
                    <?php the_field('content_2nd_content'); ?>
                  </div>                                    
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
                  <div class="col-md-12">
                    <?php the_content(); ?>
                    <br /><br />
                  </div>
                  <div class="col-md-12">
                    <form role="form">
                    
                      <div class="form-group">
                        <label for="subject">Temat:</label>
                        <input type="text" class="form-control" id="subject">
                      </div>
                      
                      <div class="form-group">
                        <label for="name">Imię i nazwisko / Nazwa firmy:</label>
                        <input type="text" class="form-control" id="name">
                      </div>
                      
                      <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email">
                      </div>
                      
                      <div class="form-group">
                        <label for="telephone">telefon (nie jest wymagany)</label>
                        <input type="text" class="form-control" id="telephone">
                      </div>
                      
                      <div class="form-group">
                        <label for="content">informacje dodatkowe</label>
                        <textarea class="form-control" id="content"></textarea>
                      </div>
                      
                      <button type="submit" class="btn btn-default">Wyślij zapytanie</button>
                         
                    </form>
                  </div>                          
                </div>
              </div>
            </div>
          </div>
        </div>
                               
      </div>
    </article>    
  </section>