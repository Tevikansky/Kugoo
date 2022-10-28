const catalogToggle = document.querySelector(".catalog-menu");
const catalog = document.querySelector(".header-main-left-catalog");



const openMenu = (event) => {
  // функцияя открывания мею
  catalog.classList.add("is-open");
  catalogToggle.classList.add("close-menu");
};

const swiper = new Swiper('.swiper', {
  speed: 500,
  slidesPerView: 4,
  spaceBetween: 100,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});