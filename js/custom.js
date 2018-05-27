
jQuery(function($) {

  var $hamburger = $(".hamburger");
  $hamburger.on("click", function(e) {
    $hamburger.toggleClass("is-active");
    // Do something else, like open/close menu
  });

  /* ===== OVERLAY MENU ======= */

  $('.hamburger').click(function(){
    $('.qs-menu-overlay').css('display', 'block');
    $('body').css('position', 'fixed');
  });

});
