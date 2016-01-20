jQuery(function(){  
  
  var mobileWidth   = 768;
  var windowHeight;
    
  function initialize(){ 
    var sWidth = $(window).width();
    var sHeight = $(window).height();
    
    /* UNITS HEIGHT */
    $('.unit').each(function(){      
      if($(this).data('height')>0){
        /*if(sWidth<=mobileWidth)
          $(this).height((sHeight)*$(this).data('height'));
        else                       */
          if($('.navbar-fixed-top').length||$('.navbar-static').length)
            $(this).height((sHeight-$('.navbar-fixed-top,.navbar-static').height())*$(this).data('height'));
          else
            $(this).height((sHeight)*$(this).data('height'));
      }
    });
    /* UNITS HEIGHT */
    
    /* PARALLAX EFFECT INIT*/  
    if(sWidth>mobileWidth){
      var scrollTop = $(document).scrollTop();          
      $('.parallax').each(function(i){                
        $(this).data('offsetTop',$(this).offset().top);
        $(this).data('outerHeight',$(this).outerHeight());                                                                                                        
        var bgOffset = 100*($(this).data('offsetTop')-scrollTop)/(sHeight-$(this).data('outerHeight'));
        $(this).css('background-position','center '+bgOffset+'%');        
      });
    } else {
      $('.parallax').css({'background-position':'center center'});        
      $('.parallax-intro').css('background-position','center top');
    } 
    windowHeight = $(window).height(); 
    /* PARALLAX EFFECT INIT */
    
    /* BOOTSRTAP MENU */    
    if($('.custom-navbar-bottom').length){
      //pierwszy ekran po menu      
      var firstElement = $('.custom-navbar-bottom').next();
      //dodajemy padding wielkości menu
      if(sWidth<=mobileWidth){
        //jeśli mniejszy niz mobilny, to CSS przykleji menu do góry, a tu dodaj padding dla body na wysokość menu
        $('body').css('padding-top',$('.custom-navbar-bottom').height());
        firstElement.css('padding-bottom',0);
      } else {
        //jeśli większy niz mobilny, to CSS przykleji menu do dołu pierwszego elementu, a tu dodaj padding dla tego elementu na wysokość menu i usuń body padding
        $('body').css('padding-top',0);
        firstElement.css('padding-bottom',$('.custom-navbar-bottom').height());
      }
      //jesli pierwszy element nie jest na pełną wysokość, to przesuwamy Navbar do góry
      if(firstElement.find('.unit').data('height')!=1)
        $('.custom-navbar-bottom').css('bottom',sHeight-firstElement.height()-$('.custom-navbar-bottom').height());
      //ustawiamy momeny przyklejania meny do góry
      $('.custom-navbar-bottom').affix({
        offset: {        
          top: firstElement.height()
        }
      });
    }
    //przy zwykłym fixed menu ustalamy górny padding dla body
    if($('.navbar-fixed-top').length){
      $('body').css('padding-top',$('.navbar-fixed-top').height())
    }
    /* BOOTSRTAP MENU */    
  }
  
  $(window).resize(function() {
    initialize();                
  });
  
  $(window).ready(function() {
    initialize();
    
    /* SCROLL TO */
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            $('.navbar').find('.active').removeClass('active');
            $(this).parent('li').addClass('active');
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top-$('.navbar').height()+2
                    }, 1000);
                    return false;
                }
            }
        });
    });
    /* SCROLL TO */                	                
  });
  
  $(window).scroll(function() {  
    /* PARALLAX EFFECT */
                 
    if($(window).width()>mobileWidth){    
      var scrollTop = $(document).scrollTop();
      
      
      //console.log(windowHeight);      
      $('.parallax').each(function(i){                          
        var bgOffset = 100*($(this).data('offsetTop')-scrollTop)/(windowHeight-$(this).data('outerHeight'));      
        $(this).css({backgroundPosition:'center '+bgOffset+'%'});        
      });      
      $('.parallax-intro').css('background-position','center '+$(document).scrollTop()/1.8+'px');
    }      
    /* PARALLAX EFFECT */
    
  });
  
});