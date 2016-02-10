<?php /* Template Name: Carousel */ ?>
  
  <section id="<?php echo $post->post_name ?>"
  <?php $custom_class = get_field('custom_class'); if(!empty($custom_class)) echo 'class="'.$custom_class.'"'; ?> >
  
    <article class="unit" <?php if(get_field('height')) echo 'data-height="'.(get_field('height')/100).'"'; ?> >
      
      <?php include 'snippet-carousel.php'; ?>
      
    </article>  
  
  </section>