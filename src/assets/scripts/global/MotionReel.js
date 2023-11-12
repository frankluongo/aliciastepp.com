import { usePortal } from "../hooks/usePortal.js";

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

export default function MotionReel() {
  console.log("motion");
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
