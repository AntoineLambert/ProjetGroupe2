var $ = jQuery.noConflict();
jQuery(document).ready(function( $ ){
    scrollToTop.init( );
});

var scrollToTop =
{
/**
 * When the user has scrolled more than 100 pixels then we display the scroll to top button using the fadeIn function
 * If the scroll position is less than 100 then hide the scroll up button
 *
 * On the click event of the scroll to top button scroll the window to the top
 */
init: function(  ){

        //Check to see if the window is top if not then display button
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });

        // Click event to scroll to top
        $('.scrollToTop').click(function(){
            $('html, body').animate({scrollTop : 0},800);
            return false;
        });
    }
};

$(".scroll").click(function(event){
     event.preventDefault();
     //calculate destination place
     var dest=0;
     if($(this.hash).offset().top > $(document).height()-$(window).height()){
          dest=$(document).height()-$(window).height();
     }else{
          dest=$(this.hash).offset().top;
     }
     //go to destination
     $('html,body').animate({scrollTop:dest}, 1000,'swing');
 });

//Smooth Scroll To Top Ying Yang
function clic(calque) {
    var el = document.getElementById(calque);
    el.style.display = (!el.style.display || el.style.display == "none") ? "block" : "none";
}