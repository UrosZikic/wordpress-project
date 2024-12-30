//DOM linked
const navigation = document.querySelector("nav");

//DOM events
window.addEventListener(
  "load",
  () => window.scrollY > 0 && navigation.classList.add("nav-scroll-shadded")
);
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
