$("document").ready(() => {
  let lastScrollY = window.scrollY;

  window.addEventListener("scroll", () => {
    if (lastScrollY < window.scrollY) {
      $(".navbar").addClass("hidden");
    } else {
      $(".navbar").removeClass("hidden");
    }
    lastScrollY = window.scrollY;
  });
});
