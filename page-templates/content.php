<?php /* Template Name: Content */ ?>

  <section id="<?php echo $post->post_name ?>"
  <?php $custom_class = get_field('custom_class'); if(!empty($custom_class)) echo 'class="'.$custom_class.'"'; ?>
  style="<?php $background_color = get_field('content_settings_background_color'); if(!empty($background_color)) echo 'background-color:'.$background_color.';'; ?>
  <?php $text_color = get_field('content_settings_text_color'); if(!empty($text_color)) echo 'color:'.$text_color.';'; ?>"   
  >
    <article class="unit"
    <?php if(get_field('height')) echo 'data-height="'.(get_field('height')/100).'"'; ?>
    >
      <?php if(get_field('fullwidth_fullwidth')): ?>
      <div class="container-fluid">
      <? else: ?>
      <div class="container">
      <?php endif; ?>
        <div class="row">
          <?php if(!get_field('content_settings_hide_title')): ?>
          <div class="col-md-12 page-header">
            <h1 class="text-center"><?php the_title(); ?></h1>
          </div>
          <?php endif; ?>
          <div class="col-md-12">
            <?php the_content(); ?>
          </div>      
      </div>
      </div>
    </article>    
  </section>  
    