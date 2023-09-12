jQuery(document).ready(function () {
  //Banner header
  const swiper = new Swiper(".swiperSpotlight", {
    grabCursor: true,
    effect: "fade",
    loop: true,
    loopFillGroupWithBlank: true,
    speed: 300,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
      clickable: true,
    },
    scrollbar: {
      el: ".swiper-scrollbar",
      hide: true,
    },
  });
});

//Show more sidebar button
const loadmore = document.querySelector("#loadmore");
let currentItems = 5;
if (loadmore != null) {
  loadmore.addEventListener("click", (e) => {
    const elementList = [
      ...document.querySelectorAll(".topics-list .cat-item"),
    ];
    for (let i = currentItems; i < currentItems + 5; i++) {
      if (elementList[i]) {
        elementList[i].style.display = "flex";
      }
    }
    currentItems += 5;

    // Load more button will be hidden after list fully loaded
    if (currentItems >= elementList.length) {
      event.target.style.display = "none";
      document.getElementById("loadmore").classList.toggle("d-block");
    }
  });
}
//Bootstrap caroulsel
jQuery(document).ready(function () {
  // Carousel
  jQuery(".carousel").carousel({
    interval: false,
    pause: true,
  });

  jQuery(".carousel .carousel-inner").swipe({
    swipeLeft: function (event, direction, distance, duration, fingerCount) {
      this.parent().carousel("next");
    },
    swipeRight: function () {
      this.parent().carousel("prev");
    },
    threshold: 0,
    tap: function (event, target) {
      window.location = $(this).find(".carousel-item.active a").attr("href");
    },
    excludedElements: "label, button, input, select, textarea, .noSwipe",
  });

  jQuery(".carousel .carousel-inner").on("dragstart", "a", function () {
    return false;
  });
});

jQuery(document).ready(function () {
  var offset = 220;
  var duration = 500;
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > offset) {
      jQuery(".top").fadeIn(duration);
    } else {
      jQuery(".top").fadeOut(duration);
    }
  });
  jQuery(".top").click(function (event) {
    event.preventDefault();
    jQuery("html, body").animate({ scrollTop: 0 }, duration);
    return false;
  });
});

//Btn do prof-card dentro da página masterclass
jQuery(document).ready(function ($) {
  // Quando o botão .btn-infos é clicado
  $(".btn-infos").on("click", function () {
    // Encontre o elemento .prof-card correspondente
    var $profCard = $(this).closest(".prof-card-container").find(".prof-card");

    // Verifique se a classe .active está presente no elemento .prof-card
    if ($profCard.hasClass("active")) {
      // Se estiver presente, remova a classe .active e mude o texto do botão para "Ver mais"
      $profCard.removeClass("active");
      $(this).text("Ver mais");
    } else {
      // Se não estiver presente, adicione a classe .active e mude o texto do botão para "Ver menos"
      $profCard.addClass("active");
      $(this).text("Ver menos");
    }
  });
});
