const catalogToggle = document.querySelector(".catalog-menu");
const catalog = document.querySelector(".header-main-left-catalog");



const openMenu = (event) => {
  // функцияя открывания мею
  catalog.classList.add("is-open");
  catalogToggle.classList.add("close-menu");
};