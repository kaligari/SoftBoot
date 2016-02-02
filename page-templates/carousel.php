<?php /* Template Name: Carousel */ ?>
  
  <section id="<?php echo $post->post_name ?>"
  <?php $custom_class = get_field('custom_class'); if(!empty($custom_class)) echo 'class="'.$custom_class.'"'; ?> >
  
    <article class="unit" <?php if(get_field('height')) echo 'data-height="'.(get_field('height')/100).'"'; ?> >
      
      <div id="carousel-<?php echo $post->post_name ?>" class="carousel slide relative
        <?php if(get_field('image',$post->ID)): ?>
        image
        <?php the_field('image_parallax_type'); ?>"
        <?php endif; ?>
      data-ride="carousel"
      <?php if(get_field('carousel_autoplay')): ?>
      data-interval="<?php the_field('carousel_interval'); ?>"
      <?php else: ?>
      data-interval="false"
      <?php endif; ?>      
      
      style="
      <?php if(get_field('image',$post->ID)): ?>
      background-image:url(<?php the_acf_image(get_field('image',$post->ID),isMobile($md)); ?>);
      <?php endif; ?>      
      ">
      
      <?php
      $image_overlay = get_field('image_overlay');
      if($image_overlay):
    ?>
      <div class="<?php if(get_field('image_overlay_loop')) echo 'overlay-loop'; else echo 'overlay'; ?>"
           style="background-image:url(<?php echo $image_overlay; ?>)"></div>
    <?php endif; ?>
      
      <div class="<?php the_field('image_content_position'); ?> static-content-inner">
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
            
      <?php   
          $args = array(
              'post_type'      => 'page',
              'posts_per_page' => -1,
              'post_parent'    => $post->ID,
              'order'          => 'ASC',
              'orderby'        => 'menu_order'
            );
                        
            $carousel = new WP_Query( $args );
            
            $carousel_item_count = $carousel->post_count;
      
            echo '<ol class="carousel-indicators">';
                  
            for($i=0;$i<$carousel_item_count;$i++)
              if($i==0)
                echo '<li data-target="#carousel-'.$post->post_name.'" data-slide-to="'.$i.'" class="active"></li>
                ';
              else                                                    
                echo '<li data-target="#carousel-'.$post->post_name.'" data-slide-to="'.$i.'"></li>
                ';
            
            echo '</ol><div class="carousel-inner" role="listbox">';
                                          
            $i = 0;
                                    
            if ( $carousel->have_posts() ) : ?>
              <?php while ( $carousel->have_posts() ) : $carousel->the_post(); ?>
                <?php if($i==0) $carousel_item_active = true; else $carousel_item_active = false;?>               
                <?php include 'carousel-item.php'; ?>
                <?php $i++; ?>
              <?php endwhile; ?>
            <?php endif; wp_reset_query(); ?>
        
        <a class="left carousel-control" href="#carousel-<?php echo $post->post_name ?>" role="button" data-slide="prev" onclick="$('#carousel-<?php echo $post->post_name ?>').carousel('prev')">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        
        <a class="right carousel-control" href="#carousel-<?php echo $post->post_name ?>" role="button" data-slide="next" onclick="$('#carousel-<?php echo $post->post_name ?>').carousel('next')">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        
      </div>
      
    </article>  
  
  </section>