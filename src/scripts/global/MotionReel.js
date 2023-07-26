import { usePortal } from "../hooks/usePortal.js";

const embedContent = `
  <div class="video-embed">
    <iframe src="https://player.vimeo.com/video/802856858?h=f03be04a0a" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
  </div>
  `;
const linkHash = "#motion-reel";

export default function MotionReel() {
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
