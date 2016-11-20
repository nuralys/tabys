$(document).ready(function(){
      $('.slider').slick({
              autoplay: true,
                arrows: true,
                speed: 1200,
                autoplaySpeed: 19000,
                  easing: 'easeInOutBack'       
            });
                $('.client-carousel').slick({
        autoplay: true,
        speed: 1200,
        slidesToShow: 4,
            slidesToScroll: 1,
          easing: 'easeInOutBack',
           responsive: [
            {
              breakpoint: 990,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                arrows:false,
              }
            },
            {
              breakpoint: 720,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 500,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]       
    });
    var nav = document.querySelector('.menu');
    var mob =  document.createElement('DIV');
    nav.appendChild(mob);
    $(mob).addClass('mob_start');
    $('.mob_start').on('click', function () {
        if($('.menu').hasClass('mob_active')){
            $('.menu').removeClass('mob_active');
        }else{
            $('.menu').addClass('mob_active');
        }                           
    }); 
    $('.catalog-show').on('click', function () {
        if($('.left-category').hasClass('left-category--active')){
            $('.left-category').removeClass('left-category--active');
        }else{
            $('.left-category').addClass('left-category--active');
        }                           
    });    
   $('.product-des').lightTabs(); 
});   
  (function($){  
               
    jQuery.fn.lightTabs = function(options){
        
        var createTabs = function(){
            tabs = this;
            i = 0;
            
            showPage = function(i){
                $('.info-tabs').children("div").hide();
                $('.info-tabs').children("div").eq(i).show();
                $('.tabs').children("div").removeClass("tabs__item--active");
                $('.tabs').children("div").eq(i).addClass("tabs__item--active");
            }
            
            showPage(0);                
            
            $('.tabs').children("div").each(function(index, element){
                $(element).attr("data-page", i);
                i++;                        
            });
            
            $('.tabs').children("div").click(function(){
                showPage(parseInt($(this).attr("data-page")));
            });             
        };      
        return this.each(createTabs);
    };  
})(jQuery); 