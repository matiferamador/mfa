

document.addEventListener("DOMContentLoaded", function () {
  AOS.init();
  // Verifica si el elemento con la clase .mySwiper existe
  if (document.querySelector('.mySwiper')) {
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 2,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  }
});





