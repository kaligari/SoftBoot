<?php

//Włączenie obsługi miniatur
add_theme_support( 'post-thumbnails' );

//Włączenie obsługi Menu
add_theme_support( 'menus' );

//Włączenie obsługi stopki
if (function_exists('register_sidebar')) {
 register_sidebar(array(
  'name' => 'Footer 1',
  'id'   => 'footer-1',
  'description'   => 'Footer 1',
  'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',
	'after_title'   => '',      
 ));
 register_sidebar(array(
  'name' => 'Footer 2',
  'id'   => 'footer-2',
  'description'   => 'Footer 2',
  'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',
	'after_title'   => '',      
 ));
 register_sidebar(array(
  'name' => 'Footer 3',
  'id'   => 'footer-3',
  'description'   => 'Footer 3',
  'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',
	'after_title'   => '',      
 ));
 register_sidebar(array(
  'name' => 'Footer 4',
  'id'   => 'footer-4',
  'description'   => 'Footer 4',
  'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',
	'after_title'   => '',      
 ));
}

//funkcja do sprawdzania czy urządzenie jest mobilne
function isMobile($detect){
  return $detect->isMobile();
}

//Dodaje taksonomię Opcje Strony
add_action( 'init', 'theme_options_taxonomy' );

//Ładuje obiekt do obsługi formatowania menu Bootstrap 3
//require_once('lib/wp_bootstrap_navwalker.php');

//Pobiera thumbnail ze wskazanego postu. Jako drugi argument przyjmuje informację o wersji mobilnej
function the_thumbnail($page_id,$is_mobile = false,$size = ''){
  if($is_mobile&&$size!=''){
    $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($page_id),$size);    
    echo  $image_url[0];
  } else echo wp_get_attachment_url(get_post_thumbnail_id($page_id));
}

function get_the_thumbnail($page_id,$is_mobile = false,$size = ''){
  if($is_mobile&&$size!=''){
    $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($page_id),$size);    
    return $image_url[0];
  } else return wp_get_attachment_url(get_post_thumbnail_id($page_id));
}

function the_acf_image($field,$is_mobile = false,$size = ''){
  if($is_mobile&&$size!=''){
    echo $field['sizes'][$size];
  } else 
    echo $field['url'];  
}

function get_the_acf_image($field,$is_mobile = false,$size = ''){
  if($is_mobile&&$size!=''){
    return $field['sizes'][$size];
  } else 
    return $field['url'];  
}

function show_content($page_id,$is_mobile = false){
  $page_data = get_page( $page_id );
  $content = $page_data->post_content;   
  $content = apply_filters('the_content', $content);
  echo $content;
}

function theme_options_taxonomy() {
  $labels = array(
    'name' => __( 'Opcje strony', 'post type general name' ),
    'singular_name' => __( 'Opcja', 'post type singular name' ),
    'add_new' => __( 'Dodaj nową' ),
    'add_new_item' => __( 'Dodaj nową opcję' ),
    'edit_item' => __( 'Edytuj opcję' ),
    'new_item' => __( 'Nowe opcję' ),
    'view_item' => __( 'Zobacz opcję' ),
    'search_items' => __( 'Szukaj opcji' ),
    'not_found' => __( 'Nie znaleziono opcji' ),
    'not_found_in_trash' => __( 'Brak opcji w koszu' ),
    'parent_item_colon' => ''
  );  
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false,
    'hierarchical' => false,
    'show_in_menu' => true,
    'menu_position' =>6,
    'menu_icon' => 'dashicons-admin-appearance',
    'supports' => array( 'title' )
  );
  register_post_type( 'opcje', $args );
}

//inicjalizacja widgetów w stopce
if (function_exists('register_sidebar')) {
 register_sidebar(array(
  'name' => 'Footer 1',
  'id'   => 'footer-1',
  'description'   => 'Footer 1',
  'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',
	'after_title'   => '',      
 ));
 register_sidebar(array(
  'name' => 'Footer 2',
  'id'   => 'footer-2',
  'description'   => 'Footer 2',
  'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',
	'after_title'   => '',      
 ));
 register_sidebar(array(
  'name' => 'Footer 3',
  'id'   => 'footer-3',
  'description'   => 'Footer 3',
  'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',
	'after_title'   => '',      
 ));
 register_sidebar(array(
  'name' => 'Footer 4',
  'id'   => 'footer-4',
  'description'   => 'Footer 4',
  'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',
	'after_title'   => '',      
 ));
}

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');