const LOGO_TIMING = 4000;
const SLIDESHOW_TIMING = 1000;

document.addEventListener("DOMContentLoaded", () => {
  AnimatedLogo();
  Slideshow();
});

async function AnimatedLogo() {
  const animatedLogo = document.querySelector("#logo-animated");
  const headerLogo = document.querySelector("#logo-header");
  const { x, y, width } = headerLogo.getBoundingClientRect();

  function animateLogo() {
    animatedLogo.classList.add("animate");
  }

  animatedLogo.style.setProperty("--x", `${x}px`);
  animatedLogo.style.setProperty("--y", `${y}px`);
  animatedLogo.style.setProperty("--width", `${width}px`);
  await new Promise((res) => setTimeout(res, LOGO_TIMING));
  animateLogo();
}

function Slideshow() {
  const slides = Array.from(document.querySelectorAll("[data-slide]"));
  if (!slides || !slides?.length) return;
  const state = {
    active: 0,
    limit: slides.length,
  };

  function reset() {
    slides.forEach((slide) => (slide.style.opacity = 0));
  }

  function setNext(number) {
    if (number >= state.limit) return 0;
    return number;
  }

  function updateState() {
    if (state.active === 0) reset();
    slides[state.active].style.opacity = 1;
    state.active = setNext(state.active + 1);
  }

  updateState();
  setInterval(updateState, SLIDESHOW_TIMING);
}
