// Main Menu animation responsive and hover/click
$(".change_language").on("click", function () {
  var lang = $(this).val();
  var base_url = $("#base-url").val();
  $.ajax({
    url: base_url + "page/change_language",
    type: "GET",
    data: "lang=" + lang,
    success: function () {
      window.location.href = window.location.href;
    },
  });
});
$(".sub-toggler").click(function () {
  $(".sub-toggler").removeClass("active");
  $(this).toggleClass("active");
});
$(".has-child").click(function () {
  $(this).addClass("active");
});
$("#nav-toggler").click(function () {
  $(this).toggleClass("open");
  $(this).parent().toggleClass("active");
  $(this).parent().prev().toggleClass("active");

  if ($(".header-bottom").hasClass("active")) {
    $("body").css("overflow", "hidden");
    $(".overlay").fadeIn("slow");
  } else {
    $("body").removeAttr("style");
    $(".overlay").fadeOut("slow");
    $(".has-child").removeClass("active");
  }
});

// start search toggler
$(".btn-toggle-search").click(function () {
  var that = this;
  $(".search-wrap-box").toggleClass("open");
  setTimeout(function () {
    if ($(that).parent().hasClass("open")) {
      $(that).prev().focus();
    } else {
      $(that).prev().focusout();
    }
  }, 700);
  // clear search field on box close
  if ($("#search-field").val() != "") {
    $("#search-field").val("");
    $(".btn-search").removeClass("show-search");
  }
});
// show Search btn if input value is not empty
$("#search-field").keyup(function () {
  if ($("#search-field").val() != "") {
    $(".btn-search").addClass("show-search");
  } else {
    $(".btn-search").removeClass("show-search");
  }
});

//show forex
$(".btn-forex").click(function () {
  $(".forex-pop").fadeIn();
  $(".forex-pop").addClass("show");
  $(".overlay-light-black").fadeIn("slow");
  $("body").css("overflow", "hidden");
});

//close Forex
$(".close-forex").click(function () {
  $(".forex-pop").fadeOut();
  $(".forex-pop").removeClass("show");
  $(".overlay-light-black").fadeOut("slow");
  $("body").removeAttr("style");
});

function resize() {
  var windowWidth = $(window).width();
  var headerHeight = $("header").outerHeight();
  if (windowWidth > 1023) {
    var footerHeight = $("footer").outerHeight();

    // push bottom if footer fixed and push from top
    // $("main").css("padding-top", headerHeight);
    // $("main").css("margin-bottom", footerHeight);
  } else {
    // $("main").css("padding-top", headerHeight);
    // $("main").css("margin-bottom", 0);
  }

  //On Scroll fixed header
  $(window).scroll(function () {
    var didScroll;
    var lastScrollTop = 0;

    $(window).scroll(function (event) {
      didScroll = true;
    });

    setInterval(function () {
      if (didScroll) {
        hasScrolled();
        didScroll = false;
      }
    }, 250);

    function hasScrolled() {
      var scroll = $(this).scrollTop();

      if (scroll > lastScrollTop && scroll > 39) {
        $("header").addClass("fixed").addClass("up");
      } else if (scroll === 0) {
        $("header").removeClass("fixed");
      } else {
        if (scroll + $(window).height() < $(document).height()) {
          $("header").addClass("fixed").removeClass("up");
        }
      }

      lastScrollTop = scroll;
    }
  });
}

$(window).load(function () {
  setTimeout(function () {
    $(".loader").fadeOut("slow");
    $("body").removeClass("overflow-hidden");
  }, 1000);
  resize();
});

$(window).resize(function () {
  resize();
});

$(window).load(function () {
  var heightCollapse =
    $(".collapseable-readmore p:first-child").outerHeight() + 40;
  $(".collapseable-readmore").css("max-height", heightCollapse);
  $(".btn-open-more").click(function () {
    var that = this;
    if (!$(that).parent().hasClass("open")) {
      $(that).parent().addClass("open");
      $(that).parent().css("max-height", "1000px");
    } else {
      setTimeout(function () {
        $(that).parent().removeClass("open");
      }, 500);
      $(that).parent().css("max-height", heightCollapse);
    }
  });
});

// convert img url to svg if it has svg class
$(document).ready(function () {
  function svg() {
    /*
     * Replace all SVG images with inline SVG
     */
    $("img.svg").each(function () {
      var $img = $(this);
      var imgID = $img.attr("id");
      var imgClass = $img.attr("class");
      var imgURL = $img.attr("src");

      $.get(
        imgURL,
        function (data) {
          // Get the SVG tag, ignore the rest
          var $svg = $(data).find("svg");

          // Add replaced image's ID to the new SVG
          if (typeof imgID !== "undefined") {
            $svg = $svg.attr("id", imgID);
          }
          // Add replaced image's classes to the new SVG
          if (typeof imgClass !== "undefined") {
            $svg = $svg.attr("class", imgClass + " replaced-svg");
          }

          // Remove any invalid XML tags as per http://validator.w3.org
          $svg = $svg.removeAttr("xmlns:a");

          // Replace image with new SVG
          $img.replaceWith($svg);
        },
        "xml"
      );
    });
  }
  svg();
});

// $(document).ready(function () {
//   $.stellar({
//     horizontalScrolling: false,
//     responsive: true,
//   });
//   if ($("select").length > 0) {
//     $("select").select2({
//       minimumResultsForSearch: Infinity,
//     });
//   }
//   function searchToggle(obj, evt) {
//     var container = $(obj).closest(".search-wrapper");
//     if (!container.hasClass("active")) {
//       container.addClass("active");
//       evt.preventDefault();
//     } else if (
//       container.hasClass("active") &&
//       $(obj).closest(".input-holder").length == 0
//     ) {
//       container.removeClass("active");
//       container.find(".search-input").val("");
//     }
//   }
// });
