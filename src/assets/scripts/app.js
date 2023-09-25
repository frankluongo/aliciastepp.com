import { usePortal } from "./hooks/usePortal";

const url = "https://player.vimeo.com/video/802856858";
const params = new URLSearchParams({
  h: "f03be04a0a",
  autoplay: 1,
  loop: 1,
  title: 0,
  byline: 0,
  portrait: 0,
  controls: 0,
});

const embedContent = /*html*/ `
  <div class="video-embed">
    <iframe src="${url}?${params.toString()}" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
  </div>
  `;
const linkHash = "#motion-reel";

document.addEventListener("DOMContentLoaded", () => {
  MotionReel();
  Navigation();
});

window.addEventListener("load", () => {
  document.documentElement.style.opacity = 1;
});

function MotionReel() {
  const mainMenu = document.querySelector("#menu-main-menu");
  const motion = mainMenu.querySelector(`a[href="${linkHash}"]`);
  if (!motion) return;
  const { openPortal, fillPortal } = usePortal();

  function handleClick(e) {
    e.preventDefault();
    fillPortal(embedContent);
    openPortal();
  }

  motion.addEventListener("click", handleClick);
}

function Navigation() {
  const toggle = document.querySelector("[data-toggle]");
  const nav = document.querySelector("[data-nav]");
  const mql = window.matchMedia("(max-width: 1023px)");
  if (!nav || !toggle) return null;
  setNav(mql.matches);

  function onToggle() {
    const state = nav.getAttribute("aria-hidden") === "true";
    setNav(!state);
  }

  function onChange({ matches }) {
    setNav(matches);
  }

  function setNav(bool) {
    nav.setAttribute("aria-hidden", bool);
  }

  toggle.addEventListener("click", onToggle);
  mql.addEventListener("change", onChange);
}