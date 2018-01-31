var main = function() {
  $('.icon-menu').click(function() {
    $('.nav-primary').animate({
      right: "0"
    }, 500);
  });
  $('.icon-close').click(function() {
    $('.nav-primary').animate({
      right: "-1024px"
    }, 500);
  });
};
$(document).ready(main);