$(document).ready(() => {
  // change navbar bg when scrolling
  $(window).scroll(() => {
    var scroll = $(window).scrollTop();
    if (scroll > 300) {
      $(".navbar").addClass("navbar-blurred");
      $(".navbar").removeClass("navbar-transparent");
    } else {
      $(".navbar").removeClass("navbar-blurred");
      $(".navbar").addClass("navbar-transparent");
    }
  });
});
