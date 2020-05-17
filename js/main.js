var main = function() {
  $('.menu-open').click(function() {
    $('.nav-primary').animate({
      left: "0"
    }, 500);
  });
  $('.menu-close').click(function() {
    $('.nav-primary').animate({
      left: "-320px"
    }, 500);
  });
};
$(document).ready(main);
