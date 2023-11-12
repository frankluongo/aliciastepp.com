const TIMING = 1000;

export default function Slideshow() {
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
  setInterval(updateState, TIMING);
}
