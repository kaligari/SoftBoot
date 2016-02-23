<?php /* Template Name: Carousel */ ?>
  
  <section id="<?php echo $post->post_name ?>"
  <?php $custom_class = get_field('custom_class'); if(!empty($custom_class)) echo 'class="'.$custom_class.'"'; ?> >
  
    <article class="unit relative" <?php if(get_field('height')) echo 'data-height="'.(get_field('height')/100).'"'; ?> >
    
      <div class="content"> 
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
      
      <?php include 'snippet-carousel.php'; ?>
      
    </article>  
  
  </section>