$(document).ready(() => {
  // set navbar bg to transparent on load
  $(".navbar").css("background", "transparent");

  // change navbar bg when scrolling
  $(window).scroll(() => {
    var scroll = $(window).scrollTop();
    if (scroll > 300) {
      $(".navbar").css("background", "var(--dark-gradient)");
    } else {
      $(".navbar").css("background", "transparent");
    }
  });
});
