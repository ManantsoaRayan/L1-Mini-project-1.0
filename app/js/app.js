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
    upDateHeroImage();
    count = (count + 1) % header_slide_image.length;
  }, 1500);
}

function upDateHeroImage() {
  heroImage.style.backgroundImage = `url(${header_slide_image[count]})`;
}

window.onload = startSlideShow;
