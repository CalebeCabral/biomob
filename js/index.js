$(document).ready(function () {
  $(".eventos .cards-mobile, .campanhas .cards-mobile").slick({
    infinite: false,
    dots: true,
    slidesToShow: 1,
    slidestoScroll: 1,
    arrows: false
  });

  $(".parceiros__brands").slick({
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
  })
});
