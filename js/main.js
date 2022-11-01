const catalogToggle = document.querySelector(".catalog-menu");
const catalog = document.querySelector(".header-main-left-catalog");



const openMenu = (event) => {
  // функцияя открывания мею
  catalog.classList.add("is-open");
  catalogToggle.classList.add("close-menu");
};

const swiper = new Swiper('.swiper', {
  speed: 400,
  slidesPerView: 1,
  spaceBetween: 29,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    // when window width is >= 300px
    320: {
      slidesPerView: 2,
    },
    824: {
      slidesPerView: 3,
    },
    1400: {
      slidesPerView: 4,
    }
  }
});

const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialog");

document.addEventListener("click", (event) => {
  if (
    event.target.dataset.toggle == "modal" ||
    event.target.parentNode.dataset.toggle == "modal" ||
    (!event.composedPath().includes(modalDialog) && modal.classList.contains("is-open"))
  ) {
    event.preventDefault();
    modal.classList.toggle("is-open");
  }
});
document.addEventListener('keyup', (event) => {
  if (event.key == "Escape" && modal.classList.contains("is-open")) {
    modal.classList.toggle("is-open");
  }
});