//DOM linked
const navigation = document.querySelector("nav");
const navMenuContainer = document.querySelector(".nav-menu-container");
const navMenuLine = document.querySelectorAll(".nav-menu-line");
const menuList = document.querySelector(".menu-list");
const html = document.querySelector("html");

const thumbnailImage = document
  .querySelector(".attachment-post-thumbnail")
  .classList.add("radius-right-side");

//DOM events
window.addEventListener("load", () => {
  window.scrollY > 0 && navigation.classList.add("nav-scroll-shadded");
});
window.addEventListener("scroll", () => {
  if (!is_scrolled) {
    is_scrolled = true;
    nav_event();
  }
});

// nav part
let is_scrolled = false;

function nav_event() {
  // console.log("testing feature");

  const navigation_event = setTimeout(() => {
    if (
      window.scrollY > 0 &&
      !navigation.classList.contains("nav-scroll-shadded")
    ) {
      navigation.classList.add("nav-scroll-shadded");
    } else if (
      window.scrollY <= 0 &&
      navigation.classList.contains("nav-scroll-shadded")
    ) {
      navigation.classList.remove("nav-scroll-shadded");
    }
    is_scrolled = false;
  }, 300);
}

// Open menu
navMenuContainer.addEventListener("click", () => {
  menuList.classList.toggle("menu-list-revealed");
  navMenuLine.forEach((line) => line.classList.toggle("nav-menu-active"));
});
