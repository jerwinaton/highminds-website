$(document).ready(() => {
  $("#whoWeAreDiv1").css({ opacity: "0", transition: "opacity .5s ease" });
  $("#whoWeAreDiv2").css({ opacity: "0", transition: "opacity .5s ease" });
  $("#ourProductsDiv1").css({ opacity: "0", transition: "opacity .5s ease" });
  $("#ourProductsDiv2").css({ opacity: "0", transition: "opacity .5s ease" });
  $("#collectionsSectionDiv").css({
    opacity: "0",
    transition: "opacity .5s ease",
  });
  $("#shopsDiv1").css({ opacity: "0", transition: "opacity .5s ease" });
  $("#shopsDiv2").css({ opacity: "0", transition: "opacity .5s ease" });
  $("#shopsDiv3").css({ opacity: "0", transition: "opacity .5s ease" });
  $("#shopsDiv4").css({ opacity: "0", transition: "opacity .5s ease" });
  $("#shopsDiv5").css({ opacity: "0", transition: "opacity .5s ease" });
  // fade elements on scroll
  $(window).scroll(() => {
    scroll = $(window).scrollTop();
    screenWidth = $(window).width();
    console.log(scroll, screenWidth);
    if (screenWidth > 1500) {
      // who we are section
      if (scroll <= 2600) {
        $("#whoWeAreDiv1").css("opacity", "0");
        $("#whoWeAreDiv2").css("opacity", "0");
      } else if (scroll > 2600) {
        $("#whoWeAreDiv1").css("opacity", "100");
        $("#whoWeAreDiv2").css("opacity", "100");
      }
      // our products section
      if (scroll <= 3400) {
        $("#ourProductsDiv1").css("opacity", "0");
        $("#ourProductsDiv2").css("opacity", "0");
      } else if (scroll > 3400) {
        $("#ourProductsDiv1").css("opacity", "100");
        $("#ourProductsDiv2").css("opacity", "100");
      }
      // collections section
      if (scroll <= 4000) {
        $("#collectionsSectionDiv").css("opacity", "0");
      } else if (scroll > 4000) {
        $("#collectionsSectionDiv").css("opacity", "100");
      }
      // shops section
      if (scroll <= 4300) {
        $("#shopsDiv1").css("opacity", "0");
      } else if (scroll > 4300) {
        $("#shopsDiv1").css("opacity", "100");
      }
      if (scroll <= 4800) {
        $("#shopsDiv2").css("opacity", "0");
      } else if (scroll > 4800) {
        $("#shopsDiv2").css("opacity", "100");
      }
      if (scroll <= 5400) {
        $("#shopsDiv3").css("opacity", "0");
      } else if (scroll > 5400) {
        $("#shopsDiv3").css("opacity", "100");
      }
      if (scroll <= 6100) {
        $("#shopsDiv4").css("opacity", "0");
      } else if (scroll > 6100) {
        $("#shopsDiv4").css("opacity", "100");
      }
      if (scroll <= 6700) {
        $("#shopsDiv5").css("opacity", "0");
      } else if (scroll > 6700) {
        $("#shopsDiv5").css("opacity", "100");
      }
    }

    if (screenWidth <= 1500 && screenWidth > 1100) {
      // who we are section
      if (scroll <= 1800) {
        $("#whoWeAreDiv1").css("opacity", "0");
        $("#whoWeAreDiv2").css("opacity", "0");
      } else if (scroll > 1800) {
        $("#whoWeAreDiv1").css("opacity", "100");
        $("#whoWeAreDiv2").css("opacity", "100");
      }
      // our products section
      if (scroll <= 2500) {
        $("#ourProductsDiv1").css("opacity", "0");
        $("#ourProductsDiv2").css("opacity", "0");
      } else if (scroll > 2500) {
        $("#ourProductsDiv1").css("opacity", "100");
        $("#ourProductsDiv2").css("opacity", "100");
      }
      // collections section
      if (scroll <= 3100) {
        $("#collectionsSectionDiv").css("opacity", "0");
      } else if (scroll > 3100) {
        $("#collectionsSectionDiv").css("opacity", "100");
      }
      // shops section
      if (scroll <= 3500) {
        $("#shopsDiv1").css("opacity", "0");
      } else if (scroll > 3500) {
        $("#shopsDiv1").css("opacity", "100");
      }
      if (scroll <= 3800) {
        $("#shopsDiv2").css("opacity", "0");
      } else if (scroll > 3800) {
        $("#shopsDiv2").css("opacity", "100");
      }
      if (scroll <= 4500) {
        $("#shopsDiv3").css("opacity", "0");
      } else if (scroll > 4500) {
        $("#shopsDiv3").css("opacity", "100");
      }
      if (scroll <= 5100) {
        $("#shopsDiv4").css("opacity", "0");
      } else if (scroll > 5100) {
        $("#shopsDiv4").css("opacity", "100");
      }
      if (scroll <= 5600) {
        $("#shopsDiv5").css("opacity", "0");
      } else if (scroll > 5600) {
        $("#shopsDiv5").css("opacity", "100");
      }
    }

    if (screenWidth <= 1100 && screenWidth > 768) {
      // who we are section
      if (scroll <= 3200) {
        $("#whoWeAreDiv1").css("opacity", "0");
        $("#whoWeAreDiv2").css("opacity", "0");
      } else if (scroll > 3200) {
        $("#whoWeAreDiv1").css("opacity", "100");
        $("#whoWeAreDiv2").css("opacity", "100");
      }
      // our products section
      if (scroll <= 3700) {
        $("#ourProductsDiv1").css("opacity", "0");
        $("#ourProductsDiv2").css("opacity", "0");
      } else if (scroll > 3700) {
        $("#ourProductsDiv1").css("opacity", "100");
        $("#ourProductsDiv2").css("opacity", "100");
      }
      // collections section
      if (scroll <= 4100) {
        $("#collectionsSectionDiv").css("opacity", "0");
      } else if (scroll > 4100) {
        $("#collectionsSectionDiv").css("opacity", "100");
      }
      // shops section
      if (scroll <= 4500) {
        $("#shopsDiv1").css("opacity", "0");
      } else if (scroll > 4500) {
        $("#shopsDiv1").css("opacity", "100");
      }
      if (scroll <= 4900) {
        $("#shopsDiv2").css("opacity", "0");
      } else if (scroll > 4900) {
        $("#shopsDiv2").css("opacity", "100");
      }
      if (scroll <= 5600) {
        $("#shopsDiv3").css("opacity", "0");
      } else if (scroll > 5600) {
        $("#shopsDiv3").css("opacity", "100");
      }
      if (scroll <= 6400) {
        $("#shopsDiv4").css("opacity", "0");
      } else if (scroll > 6400) {
        $("#shopsDiv4").css("opacity", "100");
      }
      if (scroll <= 7000) {
        $("#shopsDiv5").css("opacity", "0");
      } else if (scroll > 7000) {
        $("#shopsDiv5").css("opacity", "100");
      }
    }
    if (screenWidth <= 768) {
      // who we are section
      if (scroll <= 2600) {
        $("#whoWeAreDiv1").css("opacity", "0");
        $("#whoWeAreDiv2").css("opacity", "0");
      } else if (scroll > 2600) {
        $("#whoWeAreDiv1").css("opacity", "100");
        $("#whoWeAreDiv2").css("opacity", "100");
      }
      // our products section
      if (scroll <= 3300) {
        $("#ourProductsDiv1").css("opacity", "0");
        $("#ourProductsDiv2").css("opacity", "0");
      } else if (scroll > 3300) {
        $("#ourProductsDiv1").css("opacity", "100");
        $("#ourProductsDiv2").css("opacity", "100");
      }
      // collections section
      if (scroll <= 3800) {
        $("#collectionsSectionDiv").css("opacity", "0");
      } else if (scroll > 3800) {
        $("#collectionsSectionDiv").css("opacity", "100");
      }
      // shops section
      if (scroll <= 4300) {
        $("#shopsDiv1").css("opacity", "0");
      } else if (scroll > 4300) {
        $("#shopsDiv1").css("opacity", "100");
      }
      if (scroll <= 4600) {
        $("#shopsDiv2").css("opacity", "0");
      } else if (scroll > 4600) {
        $("#shopsDiv2").css("opacity", "100");
      }
      if (scroll <= 5100) {
        $("#shopsDiv3").css("opacity", "0");
      } else if (scroll > 5100) {
        $("#shopsDiv3").css("opacity", "100");
      }
      if (scroll <= 5600) {
        $("#shopsDiv4").css("opacity", "0");
      } else if (scroll > 5600) {
        $("#shopsDiv4").css("opacity", "100");
      }
      if (scroll <= 5900) {
        $("#shopsDiv5").css("opacity", "0");
      } else if (scroll > 5900) {
        $("#shopsDiv5").css("opacity", "100");
      }
    }
  });
});
