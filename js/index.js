$(document).ready(function () {
  $(".eventos .cards-mobile, .campanhas .cards-mobile").slick({
    infinite: false,
    dots: true,
    slidesToShow: 1,
    slidestoScroll: 1,
    arrows: false
  });

  $(".parceiros__brands--mobile").slick({
    infinite: false,
    dots: true,
    slidesToShow: 2,
    slidestoScroll: 1,
    arrows: false,
    variableWidth: true
  })

  $(".navbar-toggler").on("click", function () {
    $(this).find(".hamburger").toggleClass("active");
    $(".navbar-collapse").slideToggle({
      start: function () {
        $(this).css("display", "flex");
      }
    }, 200);
  });

  $(".fontsize-up").on("click", function () {
    $("p:not(.no-js)").css({ "font-size": "+=2" })
  });

  $(".fontsize-down").on("click", function () {
    $("p:not(.no-js)").css({ "font-size": "-=2" })
  });
});
