AOS.init();

const menuIcon = document.querySelector("#nav-toggler");
const mainNav = document.querySelector(".main-nav");
const handleOpen = () => {
  mainNav.classList.toggle("main-nav--open");
};

menuIcon.addEventListener("click", handleOpen);
