export function useWindow() {
  function setSize() {
    document.documentElement.style.setProperty(
      `--window-height`,
      `${window.innerHeight}px`
    );
  }
  setSize();
  window.addEventListener("resize", setSize);
}
