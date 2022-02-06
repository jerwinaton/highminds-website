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
    console.log($(window).width());
    screenWidth = $(window).width();
    if (screenWidth > 1500) {
      // who we are section
      if (scroll <= 300) {
        $("#whoWeAreDiv1").css("opacity", "0");
        $("#whoWeAreDiv2").css("opacity", "0");
      } else if (scroll > 300) {
        $("#whoWeAreDiv1").css("opacity", "100");
        $("#whoWeAreDiv2").css("opacity", "100");
      }
      // our products section
      if (scroll <= 800) {
        $("#ourProductsDiv1").css("opacity", "0");
        $("#ourProductsDiv2").css("opacity", "0");
      } else if (scroll > 800) {
        $("#ourProductsDiv1").css("opacity", "100");
        $("#ourProductsDiv2").css("opacity", "100");
      }
      // collections section
      if (scroll <= 1300) {
        $("#collectionsSectionDiv").css("opacity", "0");
      } else if (scroll > 1300) {
        $("#collectionsSectionDiv").css("opacity", "100");
      }
      // shops section
      if (scroll <= 2000) {
        $("#shopsDiv1").css("opacity", "0");
      } else if (scroll > 2000) {
        $("#shopsDiv1").css("opacity", "100");
      }
      if (scroll <= 2200) {
        $("#shopsDiv2").css("opacity", "0");
      } else if (scroll > 2200) {
        $("#shopsDiv2").css("opacity", "100");
      }
      if (scroll <= 2800) {
        $("#shopsDiv3").css("opacity", "0");
      } else if (scroll > 2800) {
        $("#shopsDiv3").css("opacity", "100");
      }
      if (scroll <= 3450) {
        $("#shopsDiv4").css("opacity", "0");
      } else if (scroll > 3450) {
        $("#shopsDiv4").css("opacity", "100");
      }
      if (scroll <= 4000) {
        $("#shopsDiv5").css("opacity", "0");
      } else if (scroll > 4000) {
        $("#shopsDiv5").css("opacity", "100");
      }
    }

    if (screenWidth <= 1500 && screenWidth > 1100) {
      // who we are section
      if (scroll <= 300) {
        $("#whoWeAreDiv1").css("opacity", "0");
        $("#whoWeAreDiv2").css("opacity", "0");
      } else if (scroll > 300) {
        $("#whoWeAreDiv1").css("opacity", "100");
        $("#whoWeAreDiv2").css("opacity", "100");
      }
      // our products section
      if (scroll <= 800) {
        $("#ourProductsDiv1").css("opacity", "0");
        $("#ourProductsDiv2").css("opacity", "0");
      } else if (scroll > 800) {
        $("#ourProductsDiv1").css("opacity", "100");
        $("#ourProductsDiv2").css("opacity", "100");
      }
      // collections section
      if (scroll <= 1300) {
        $("#collectionsSectionDiv").css("opacity", "0");
      } else if (scroll > 1300) {
        $("#collectionsSectionDiv").css("opacity", "100");
      }
      // shops section
      if (scroll <= 1700) {
        $("#shopsDiv1").css("opacity", "0");
      } else if (scroll > 1700) {
        $("#shopsDiv1").css("opacity", "100");
      }
      if (scroll <= 2000) {
        $("#shopsDiv2").css("opacity", "0");
      } else if (scroll > 2000) {
        $("#shopsDiv2").css("opacity", "100");
      }
      if (scroll <= 2600) {
        $("#shopsDiv3").css("opacity", "0");
      } else if (scroll > 2600) {
        $("#shopsDiv3").css("opacity", "100");
      }
      if (scroll <= 3400) {
        $("#shopsDiv4").css("opacity", "0");
      } else if (scroll > 3400) {
        $("#shopsDiv4").css("opacity", "100");
      }
      if (scroll <= 4000) {
        $("#shopsDiv5").css("opacity", "0");
      } else if (scroll > 4000) {
        $("#shopsDiv5").css("opacity", "100");
      }
    }

    if (screenWidth <= 1100 && screenWidth > 768) {
      // who we are section
      if (scroll <= 300) {
        $("#whoWeAreDiv1").css("opacity", "0");
        $("#whoWeAreDiv2").css("opacity", "0");
      } else if (scroll > 300) {
        $("#whoWeAreDiv1").css("opacity", "100");
        $("#whoWeAreDiv2").css("opacity", "100");
      }
      // our products section
      if (scroll <= 800) {
        $("#ourProductsDiv1").css("opacity", "0");
        $("#ourProductsDiv2").css("opacity", "0");
      } else if (scroll > 800) {
        $("#ourProductsDiv1").css("opacity", "100");
        $("#ourProductsDiv2").css("opacity", "100");
      }
      // collections section
      if (scroll <= 1100) {
        $("#collectionsSectionDiv").css("opacity", "0");
      } else if (scroll > 1100) {
        $("#collectionsSectionDiv").css("opacity", "100");
      }
      // shops section
      if (scroll <= 1500) {
        $("#shopsDiv1").css("opacity", "0");
      } else if (scroll > 1500) {
        $("#shopsDiv1").css("opacity", "100");
      }
      if (scroll <= 1700) {
        $("#shopsDiv2").css("opacity", "0");
      } else if (scroll > 1700) {
        $("#shopsDiv2").css("opacity", "100");
      }
      if (scroll <= 2300) {
        $("#shopsDiv3").css("opacity", "0");
      } else if (scroll > 2300) {
        $("#shopsDiv3").css("opacity", "100");
      }
      if (scroll <= 3100) {
        $("#shopsDiv4").css("opacity", "0");
      } else if (scroll > 3100) {
        $("#shopsDiv4").css("opacity", "100");
      }
      if (scroll <= 3800) {
        $("#shopsDiv5").css("opacity", "0");
      } else if (scroll > 3800) {
        $("#shopsDiv5").css("opacity", "100");
      }
    }
    if (screenWidth <= 768) {
      // who we are section
      if (scroll <= 300) {
        $("#whoWeAreDiv1").css("opacity", "0");
        $("#whoWeAreDiv2").css("opacity", "0");
      } else if (scroll > 300) {
        $("#whoWeAreDiv1").css("opacity", "100");
        $("#whoWeAreDiv2").css("opacity", "100");
      }
      // our products section
      if (scroll <= 800) {
        $("#ourProductsDiv1").css("opacity", "0");
        $("#ourProductsDiv2").css("opacity", "0");
      } else if (scroll > 800) {
        $("#ourProductsDiv1").css("opacity", "100");
        $("#ourProductsDiv2").css("opacity", "100");
      }
      // collections section
      if (scroll <= 1100) {
        $("#collectionsSectionDiv").css("opacity", "0");
      } else if (scroll > 1100) {
        $("#collectionsSectionDiv").css("opacity", "100");
      }
      // shops section
      if (scroll <= 1500) {
        $("#shopsDiv1").css("opacity", "0");
      } else if (scroll > 1500) {
        $("#shopsDiv1").css("opacity", "100");
      }
      if (scroll <= 1700) {
        $("#shopsDiv2").css("opacity", "0");
      } else if (scroll > 1700) {
        $("#shopsDiv2").css("opacity", "100");
      }
      if (scroll <= 2300) {
        $("#shopsDiv3").css("opacity", "0");
      } else if (scroll > 2300) {
        $("#shopsDiv3").css("opacity", "100");
      }
      if (scroll <= 2700) {
        $("#shopsDiv4").css("opacity", "0");
      } else if (scroll > 2700) {
        $("#shopsDiv4").css("opacity", "100");
      }
      if (scroll <= 3200) {
        $("#shopsDiv5").css("opacity", "0");
      } else if (scroll > 3200) {
        $("#shopsDiv5").css("opacity", "100");
      }
    }
  });
});
