<?php
//inicjalizacja biblioteki do wykrywania urządzeń mobilnych
require_once(trailingslashit( get_template_directory() ).'lib/Mobile_Detect.php');

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
    <!-- <link href="<?php bloginfo( 'template_url' ); ?>/css/stylesheet.min.css" rel="stylesheet"> -->
    <link href="<?php bloginfo( 'template_url' ); ?>/css/swiper.min.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_url' ); ?>/style.css" rel="stylesheet">
    <style>
    #preloader {background-color: white; display: table; height: 100%; left: 0; position: fixed; top: 0; width: 100%; z-index: 9999; } #preloader .container { display: table-cell; vertical-align: middle; } #preloader .container .loader { margin: 4em auto; font-size: 10px; width: 1em; height: 1em; border-radius: 50%; position: relative; text-indent: -9999em; -webkit-animation: load5 1.1s infinite ease; animation: load5 1.1s infinite ease; -webkit-transform: translateZ(0); -ms-transform: translateZ(0); transform: translateZ(0); } @-webkit-keyframes load5 { 0%, 100% { box-shadow: 0em -2.6em 0em 0em #ffffff, 1.8em -1.8em 0 0em rgba(86,189,206, 0.2), 2.5em 0em 0 0em rgba(86,189,206, 0.2), 1.75em 1.75em 0 0em rgba(86,189,206, 0.2), 0em 2.5em 0 0em rgba(86,189,206, 0.2), -1.8em 1.8em 0 0em rgba(86,189,206, 0.2), -2.6em 0em 0 0em rgba(86,189,206, 0.5), -1.8em -1.8em 0 0em rgba(86,189,206, 0.7); } 12.5% {box-shadow: 0em -2.6em 0em 0em rgba(86,189,206, 0.7), 1.8em -1.8em 0 0em #ffffff, 2.5em 0em 0 0em rgba(86,189,206, 0.2), 1.75em 1.75em 0 0em rgba(86,189,206, 0.2), 0em 2.5em 0 0em rgba(86,189,206, 0.2), -1.8em 1.8em 0 0em rgba(86,189,206, 0.2), -2.6em 0em 0 0em rgba(86,189,206, 0.2), -1.8em -1.8em 0 0em rgba(86,189,206, 0.5); } 25% { box-shadow: 0em -2.6em 0em 0em rgba(86,189,206, 0.5), 1.8em -1.8em 0 0em rgba(86,189,206, 0.7), 2.5em 0em 0 0em #ffffff, 1.75em 1.75em 0 0em rgba(86,189,206, 0.2), 0em 2.5em 0 0em rgba(86,189,206, 0.2), -1.8em 1.8em 0 0em rgba(86,189,206, 0.2), -2.6em 0em 0 0em rgba(86,189,206, 0.2), -1.8em -1.8em 0 0em rgba(86,189,206, 0.2); } 37.5% {box-shadow: 0em -2.6em 0em 0em rgba(86,189,206, 0.2), 1.8em -1.8em 0 0em rgba(86,189,206, 0.5), 2.5em 0em 0 0em rgba(86,189,206, 0.7), 1.75em 1.75em 0 0em rgba(86,189,206, 0.2), 0em 2.5em 0 0em rgba(86,189,206, 0.2), -1.8em 1.8em 0 0em rgba(86,189,206, 0.2), -2.6em 0em 0 0em rgba(86,189,206, 0.2), -1.8em -1.8em 0 0em rgba(86,189,206, 0.2); } 50% { box-shadow: 0em -2.6em 0em 0em rgba(86,189,206, 0.2), 1.8em -1.8em 0 0em rgba(86,189,206, 0.2), 2.5em 0em 0 0em rgba(86,189,206, 0.5), 1.75em 1.75em 0 0em rgba(86,189,206, 0.7), 0em 2.5em 0 0em #ffffff, -1.8em 1.8em 0 0em rgba(86,189,206, 0.2), -2.6em 0em 0 0em rgba(86,189,206, 0.2), -1.8em -1.8em 0 0em rgba(86,189,206, 0.2); } 62.5% {box-shadow: 0em -2.6em 0em 0em rgba(86,189,206, 0.2), 1.8em -1.8em 0 0em rgba(86,189,206, 0.2), 2.5em 0em 0 0em rgba(86,189,206, 0.2), 1.75em 1.75em 0 0em rgba(86,189,206, 0.5), 0em 2.5em 0 0em rgba(86,189,206, 0.7), -1.8em 1.8em 0 0em #ffffff, -2.6em 0em 0 0em rgba(86,189,206, 0.2), -1.8em -1.8em 0 0em rgba(86,189,206, 0.2); } 75% { box-shadow: 0em -2.6em 0em 0em rgba(86,189,206, 0.2), 1.8em -1.8em 0 0em rgba(86,189,206, 0.2), 2.5em 0em 0 0em rgba(86,189,206, 0.2), 1.75em 1.75em 0 0em rgba(86,189,206, 0.2), 0em 2.5em 0 0em rgba(86,189,206, 0.5), -1.8em 1.8em 0 0em rgba(86,189,206, 0.7), -2.6em 0em 0 0em #ffffff, -1.8em -1.8em 0 0em rgba(86,189,206, 0.2); } 87.5% { box-shadow: 0em -2.6em 0em 0em rgba(86,189,206, 0.2), 1.8em -1.8em 0 0em rgba(86,189,206, 0.2), 2.5em 0em 0 0em rgba(86,189,206, 0.2), 1.75em 1.75em 0 0em rgba(86,189,206, 0.2), 0em 2.5em 0 0em rgba(86,189,206, 0.2), -1.8em 1.8em 0 0em rgba(86,189,206, 0.5), -2.6em 0em 0 0em rgba(86,189,206, 0.7), -1.8em -1.8em 0 0em #ffffff; }} @keyframes load5 { 0%, 100% { box-shadow: 0em -2.6em 0em 0em #ffffff, 1.8em -1.8em 0 0em rgba(86,189,206, 0.2), 2.5em 0em 0 0em rgba(86,189,206, 0.2), 1.75em 1.75em 0 0em rgba(86,189,206, 0.2), 0em 2.5em 0 0em rgba(86,189,206, 0.2), -1.8em 1.8em 0 0em rgba(86,189,206, 0.2), -2.6em 0em 0 0em rgba(86,189,206, 0.5), -1.8em -1.8em 0 0em rgba(86,189,206, 0.7); } 12.5% { box-shadow: 0em -2.6em 0em 0em rgba(86,189,206, 0.7), 1.8em -1.8em 0 0em #ffffff, 2.5em 0em 0 0em rgba(86,189,206, 0.2), 1.75em 1.75em 0 0em rgba(86,189,206, 0.2), 0em 2.5em 0 0em rgba(86,189,206, 0.2), -1.8em 1.8em 0 0em rgba(86,189,206, 0.2), -2.6em 0em 0 0em rgba(86,189,206, 0.2), -1.8em -1.8em 0 0em rgba(86,189,206, 0.5); } 25% {box-shadow: 0em -2.6em 0em 0em rgba(86,189,206, 0.5), 1.8em -1.8em 0 0em rgba(86,189,206, 0.7), 2.5em 0em 0 0em #ffffff, 1.75em 1.75em 0 0em rgba(86,189,206, 0.2), 0em 2.5em 0 0em rgba(86,189,206, 0.2), -1.8em 1.8em 0 0em rgba(86,189,206, 0.2), -2.6em 0em 0 0em rgba(86,189,206, 0.2), -1.8em -1.8em 0 0em rgba(86,189,206, 0.2); } 37.5% { box-shadow: 0em -2.6em 0em 0em rgba(86,189,206, 0.2), 1.8em -1.8em 0 0em rgba(86,189,206, 0.5), 2.5em 0em 0 0em rgba(86,189,206, 0.7), 1.75em 1.75em 0 0em rgba(86,189,206, 0.2), 0em 2.5em 0 0em rgba(86,189,206, 0.2), -1.8em 1.8em 0 0em rgba(86,189,206, 0.2), -2.6em 0em 0 0em rgba(86,189,206, 0.2), -1.8em -1.8em 0 0em rgba(86,189,206, 0.2); } 50% {box-shadow: 0em -2.6em 0em 0em rgba(86,189,206, 0.2), 1.8em -1.8em 0 0em rgba(86,189,206, 0.2), 2.5em 0em 0 0em rgba(86,189,206, 0.5), 1.75em 1.75em 0 0em rgba(86,189,206, 0.7), 0em 2.5em 0 0em #ffffff, -1.8em 1.8em 0 0em rgba(86,189,206, 0.2), -2.6em 0em 0 0em rgba(86,189,206, 0.2), -1.8em -1.8em 0 0em rgba(86,189,206, 0.2); } 62.5% { box-shadow: 0em -2.6em 0em 0em rgba(86,189,206, 0.2), 1.8em -1.8em 0 0em rgba(86,189,206, 0.2), 2.5em 0em 0 0em rgba(86,189,206, 0.2), 1.75em 1.75em 0 0em rgba(86,189,206, 0.5), 0em 2.5em 0 0em rgba(86,189,206, 0.7), -1.8em 1.8em 0 0em #ffffff, -2.6em 0em 0 0em rgba(86,189,206, 0.2), -1.8em -1.8em 0 0em rgba(86,189,206, 0.2); } 75% { box-shadow: 0em -2.6em 0em 0em rgba(86,189,206, 0.2), 1.8em -1.8em 0 0em rgba(86,189,206, 0.2), 2.5em 0em 0 0em rgba(86,189,206, 0.2), 1.75em 1.75em 0 0em rgba(86,189,206, 0.2), 0em 2.5em 0 0em rgba(86,189,206, 0.5), -1.8em 1.8em 0 0em rgba(86,189,206, 0.7), -2.6em 0em 0 0em #ffffff, -1.8em -1.8em 0 0em rgba(86,189,206, 0.2); }87.5% { box-shadow: 0em -2.6em 0em 0em rgba(86,189,206, 0.2), 1.8em -1.8em 0 0em rgba(86,189,206, 0.2), 2.5em 0em 0 0em rgba(86,189,206, 0.2), 1.75em 1.75em 0 0em rgba(86,189,206, 0.2), 0em 2.5em 0 0em rgba(86,189,206, 0.2), -1.8em 1.8em 0 0em rgba(86,189,206, 0.5), -2.6em 0em 0 0em rgba(86,189,206, 0.7), -1.8em -1.8em 0 0em #ffffff; } }
    .animate,.animate-on-start{opacity:0;}
    </style>

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
  
    <div id="preloader">
      <div class="container">
        <div class="loader">
          Ładowanie...
        </div>
      </div>
    </div>

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
          </div>		
      </div><!--/.container -->
    </nav>   