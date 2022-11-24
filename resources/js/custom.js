$(document).ready(function () {
  $(".loading-area").fadeOut(1000);

  $(window).on("scroll", function () {
    // > Window on scroll header color fill
    color_fill_header();

    // scroll to top

    scroll_top();
  });

  mobile_nav();
  mobile_side_drawer();
  counter_section();
  scroll_bar_custom();
  sidebarCollapse();

  setTimeout(function () {
    $(".has-child")
      .find("li.active")
      .parents(".has-child")
      .find(".submenu-toogle")
      .click();
  }, 100);
});

//custom functions
function color_fill_header() {
  var scroll = $(window).scrollTop();
  if (scroll >= 100) {
    $(".sticky-header").addClass("color-fill is-fixed");
  } else {
    $(".sticky-header").removeClass("color-fill is-fixed");
  }
}

function scroll_top() {
  $("button.scroltop").on("click", function () {
    $("html, body").animate({ scrollTop: 0 }, 0);
    return false;
  });

  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();
    if (scroll > 900) {
      $("button.scroltop").fadeIn(1000);
    } else {
      $("button.scroltop").fadeOut(1000);
    }
  });
}

function mobile_nav() {
  $(".sub-menu").parent("li").addClass("has-child");
  $("<div class='fa fa-angle-right submenu-toogle'></div>").insertAfter(
    ".has-child > a"
  );

  $(".has-child a+.submenu-toogle").on("click", function (ev) {
    $(this)
      .parent()
      .siblings(".has-child ")
      .children(".sub-menu")
      .slideUp(500, function () {
        $(this).parent().removeClass("nav-active");
      });

    $(this)
      .next($(".sub-menu"))
      .slideToggle(500, function () {
        $(this).parent().toggleClass("nav-active");
      });

    ev.stopPropagation();
  });
}

// Mobile side drawer function by = custom.js
function mobile_side_drawer() {
  $("#mobile-side-drawer").on("click", function () {
    $(".mobile-sider-drawer-menu").toggleClass("active");
  });
}

function counter_section() {
  $(".counter").counterUp({
    delay: 10,
    time: 3000,
  });
}

function scroll_bar_custom() {
  $(".scrollbar-macosx").scrollbar();
}

function sidebarCollapse() {
  $("#sidebarCollapse").on("click", function () {
    $("#header-admin, #sidebar-admin-wraper, #content").toggleClass("active");
  });
}
