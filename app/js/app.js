// navigation menu

const humberger_menu = document.getElementById("navigation_btn");
const nav_items = document.querySelector(".nav-items");

humberger_menu.onclick = () => {
  nav_items.classList.toggle("menu_open");
};

// header slide_show
const header_slide_image = [
  "/app/assets/images/blog-1.jpg",
  "/app/assets/images/blog-2.jpg",
  "/app/assets/images/blog-3.jpg",
  "/app/assets/images/carousel-1.jpg",
  "/app/assets/images/carousel-2.jpg",
  "/app/assets/images/vision-img.jpg",
];
const heroImage = document.getElementById("heroImage");
let count = 0;

function startSlideShow() {
  setInterval(() => {
    // heroImage.style.backgroundImage = `url(${header_slide_image[count]})`;
    upDateHeroImage(count);
    count = (count + 1) % header_slide_image.length;
    console.log(count);
  }, 3000);
}
function upDateHeroImage(value) {
  heroImage.style.backgroundImage = `url(${header_slide_image[value]})`;
}

window.onload = startSlideShow;

// login

const wrapper = document.querySelector(".wrapper");
const loginLink = document.querySelector(".login-link");
const registerLink = document.querySelector(".register-link");
const iconClose = document.querySelector("icon-close");

registerLink.addEventListener("click", () => {
  wrapper.classList.add("active");
});

loginLink.addEventListener("click", () => {
  wrapper.classList.remove("active");
});

iconClose.addEventListener("click", () => {
  wrapper.classList.remove("active-popup");
});
