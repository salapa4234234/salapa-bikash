var heroBanner = new MasterSlider();
var windowheight = $(window).height();
var bannerHeight = 586;
if (windowheight <= 750) {
  bannerHeight = 450;
} else {
  bannerHeight = 586;
}
heroBanner.setup("hero-banner", {
  width: 1200, // slider standard width
  height: bannerHeight, // slider standard height
  space: 1,
  layout: "fullwidth",
  view: "parallaxMask",
  instantStartLayers: true,
  preload: 0,
  autoplay: true,
});
heroBanner.control("bullets", { autohide: false, dir: "h", align: "bottom" });

// Featured Counter
var animatedCount = false;
$(window).load(function () {
  if (animatedCount) {
    return;
  }
  $(".count").each(function () {
    $(this)
      .prop("Counter", 0)
      .animate(
        {
          Counter: $(this).attr("data-count"),
        },
        {
          duration: 2000,
          easing: "swing",
          step: function (now) {
            $(this).text(Math.round(now * 100) / 100);
          },
        }
      );
  });
  animatedCount = true;
});

// slider show section transision & Scroll Animation
var grpList = $(".slide-up").length;
var totalgrpList = grpList * 300;
var attr = "800ms" + " " + "ease-out" + " ";
$(".slide-up").each(function () {
  var that = $(this);
  if (!$(that).is(":first-child")) {
    that.css("transition", attr + (totalgrpList + "ms"));
    totalgrpList = totalgrpList + 300;
  }
});

$(document).scroll(function () {
  var appScrollPos = $(document).scrollTop();
  //On Scroll show group
  var sliderPos = $(".slider-show").position();
  var newsPos = $(".new-event-updates").position();
  if (appScrollPos >= sliderPos.top - 300) {
    $(".slide-up").css({
      transform: "translateY(0)",
      opacity: 1,
    });
  }
  if (appScrollPos >= newsPos.top - 800) {
    $(".news").css("transform", "translateY(0)");
  }

  //show floating angles on scroll
  var updatesPos = $(".civil-updates-section").position();
  if (appScrollPos >= updatesPos.top - 300) {
    $(".floating-angles").addClass("show");
  }
});

//News Update Slide in mobile
$(".new-event-updates").slick({
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  autoplay: true,
  mobileFirst: true,
  responsive: [
    {
      breakpoint: 0,
      settings: "slick",
    },
    {
      breakpoint: 530,
      settings: {
        slidesToShow: 1,
      },
    },
    {
      breakpoint: 1023,
      settings: "unslick",
    },
  ],
});

//Social Update Slide in mobile
$(".stories-wrap").slick({
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  autoplay: true,
  mobileFirst: true,
  responsive: [
    {
      breakpoint: 0,
      settings: "slick",
    },
    {
      breakpoint: 530,
      settings: {
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 1023,
      settings: "unslick",
    },
  ],
});

$(document).ready(function ($) {
  $("#myCarousel").carousel({
    interval: 6000,
  });

  //open popup
  $(".popup").addClass("is-visible");

  //close popup
  $("popup-close").on("click", function (event) {
    if ($(event.target).is(".popup-close") || $(event.target).is(".popup")) {
      event.preventDefault();
      $(this).removeClass("is-visible");
    }
  });
  //close popup when clicking the esc keyboard button
  $(document).keyup(function (event) {
    if (event.which == "27") {
      $(".popup").removeClass("is-visible");
    }
  });
  //close popup when clicking close or overlay
  $(".popup-close, .pop-overlay").click(function () {
    $(".popup").removeClass("is-visible");
  });
});

$(document).ready(function () {
  //#submit contact form
  $("body").on("submit", ".newsletter", function (e) {
    e.preventDefault();
    var _this = $(this);
    var email = _this.find('[name="email"]').val();
    var err = 0;

    function showErrSpan(outputClass, msg) {
      _this
        .find("span." + outputClass)
        .text(msg)
        .css("display", "inline-block");
      err = 1;
    }
    function isEmail(str) {
      if (typeof str !== "string") {
        return false;
      }

      var re =
        /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(str);
    } //isEmail()

    if (email === "") {
      showErrSpan("email", "Email Address is required");
    } else if (!isEmail(email)) {
      showErrSpan("email", "Invalid Email Address");
    }
    if (err === 1) {
      return false;
    }
    var formData = _this.serialize();
    $.ajax({
      type: "POST",
      url: site_url("home/signupNewsletter"),
      data: formData,
      dataType: "json",
      success: function (data) {
        //                    $('#section3-owner-registration').addClass('success');
        $(".frm-err").hide();
        $(".frm-scs")
          .text(data.msg)
          .css("display", "inline-block")
          .delay(3000)
          .fadeOut();
        if (data.status == "success") {
          _this.find("input:text").val("");
        }
      },
      error: function (data) {
        console.log("err", data);
        $(".frm-scs").hide();
        $(".frm-err").text(data.msg).css("display", "inline-block");
      },
    });
  });
  $("body").on("click", "span.error", function () {
    $(this).hide().prev("input").focus();
  });
  $("body").on("focus", "input", function () {
    $(this).next("span.error").hide();
  });
  $("body").on("click", "#form-success-button", function () {
    $(".frm-err").hide();
    $(".frm-scs").hide();
  });
});
