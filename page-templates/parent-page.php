<?php /* Template Name: Parent Page */ ?>

<?php get_header(); ?>
<?
  $args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
  );  
  
  $parent = new WP_Query( $args );
  
  if ( $parent->have_posts() ) : ?>
    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>              
        <?php @include(locate_template(get_page_template_slug($post->ID))); ?>            
    <?php endwhile; ?>    
  <?php endif; wp_reset_query(); ?>
<?php get_footer(); ?> 