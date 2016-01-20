<?php
//inicjalizacja biblioteki do wykrywania urządzeń mobilnych
require_once(trailingslashit( get_template_directory() ).'lib/Mobile_Detect.php');

//inicjalizacja biblioteki integracji bootstrap menu
require_once(trailingslashit( get_template_directory() ).'lib/wp_bootstrap_navwalker.php');

global $md;
$md = new Mobile_Detect;
?>
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="Kolorowy Internet">
    <link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/img/favicon.ico">

    <title><?php wp_title(''); ?></title>
    
    <link href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_url' ); ?>/css/softboot.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_url' ); ?>/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php bloginfo( 'template_url' ); ?>/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php bloginfo( 'template_url' ); ?>/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>

  <body>

    <!-- navbar -->        
    <?php
      switch(get_field('global_settings_menu_type',134)){
        case 'static':
          echo '<nav class="navbar navbar-default navbar-static">';
          break;
        case 'fixed':
          echo '<nav class="navbar navbar-default navbar-fixed-top">';
          break;
        case 'fixed-bottom':
          echo '<nav class="navbar navbar-default navbar-static custom-navbar-bottom">';
          break;
        default:
          echo '<nav class="navbar navbar-default navbar-static ">';          
      }  
    ?>
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>          
        </div>
          <div id="navbar" class="navbar-collapse collapse">
            <?php
              $menu_defaults = array(                
                'menu_class'        => 'nav navbar-nav',
              );
              wp_nav_menu($menu_defaults);
            ?>
            <!--<ul class="nav navbar-nav">              
              <li><a href="#o-nas"><?php the_field('menu_type',134) ?></a></li>              
              <li><a href="#oferta">Oferta</a></li>
              <li><a href="#kontakt-mapa">Kontakt</a></li>
            </ul>-->          
          </div>		
      </div><!--/.container -->
    </nav>   