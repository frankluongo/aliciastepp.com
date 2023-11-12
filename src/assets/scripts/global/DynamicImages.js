export default function DynamicImages() {
  const images = document.querySelectorAll("[data-dynamic-image]");
  if (!images) return;
  images.forEach(DynamicImage);
}

function convertPadding(el, value) {
  const valString = window.getComputedStyle(el).getPropertyValue(value);
  return parseInt(valString.replace("px", ""));
}

function DynamicImage(image) {
  const parent = image.parentElement;

  function getHeight() {
    const { height: pHeight } = parent.getBoundingClientRect().toJSON();
    const pTop = convertPadding(parent, "padding-top");
    const pBot = convertPadding(parent, "padding-bottom");
    const height = pHeight - (pTop + pBot);
    image.style.maxHeight = `${height}px`;
  }

  getHeight();
  window.addEventListener("resize", getHeight);
}
