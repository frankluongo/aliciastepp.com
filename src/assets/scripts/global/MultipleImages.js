export default function MultipleImages() {
  const multiples = document.querySelectorAll("[data-multiple-images]");
  if (!multiples?.length) return;
  multiples.forEach(MultipleImage);
}

function MultipleImage(image) {
  const mql = matchMedia("(max-width: 1023px)");

  const state = {
    isMobile: mql.matches,
    windowHeight: window.innerHeight,
  };
  const pictures = image.querySelectorAll("[data-picture]");
  const inner = image.querySelector("[data-inner]");
  const info = JSON.parse(image.dataset.info);
  const imgStyles = getComputedStyle(image);
  const innerStyles = getComputedStyle(inner);
  const rows = parseInt(info.rows);

  function calcHeight() {
    const gutter = parseInt(innerStyles.gap);

    const availableHeight = getAvailableHeight();
    const gutters = (rows - 1) * (gutter / 2);

    return availableHeight / rows - gutters;
  }

  function getAvailableHeight() {
    const screen = window.innerHeight;
    const bottomPadding = parseInt(imgStyles.paddingBottom);
    const topPadding = parseInt(imgStyles.paddingTop);
    if (state.isMobile) {
      return screen - 72 - (topPadding + bottomPadding);
    } else {
      return screen - (topPadding + bottomPadding);
    }
  }

  function sizeImages(bypass = false) {
    if (bypass) {
      pictures.forEach((pic) => {
        pic.style.height = `${calcHeight()}px`;
      });
    } else {
      const currentWindowHeight = window.innerHeight;
      if (currentWindowHeight !== state.windowHeight) {
        pictures.forEach((pic) => {
          pic.style.height = `${calcHeight()}px`;
        });
        state.windowHeight = currentWindowHeight;
      }
    }
  }

  function onMqlChange({ matches }) {
    state.isMobile = matches;
  }

  sizeImages(true);
  mql.addEventListener("change", onMqlChange);
  window.addEventListener("resize", sizeImages);
}
