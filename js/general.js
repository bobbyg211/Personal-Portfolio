// Main menu

$(".header nav .hamburger").click(function () {
  $(this).toggleClass("active");
});

$(window).scroll(function () {
  if ($(window).scrollTop() > 0) {
    $(".header .logo a .name .inner").addClass("hide-name");
  } else {
    $(".header .logo a .name .inner").removeClass("hide-name");
  }
});

setInterval(function () {
  $(".header .sub-ribbon .dot-nav span.blue").toggleClass("active");
}, 500);
