export default function SeeMore() {
  document.addEventListener("mousemove", onMouseMove);

  function onMouseMove({ offsetX, offsetY }) {
    document.body.style.setProperty("--mouse-x", `${offsetX}px`);
    document.body.style.setProperty("--mouse-y", `${offsetY}px`);
  }
}
