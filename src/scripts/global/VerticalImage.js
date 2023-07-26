function convertPadding(el, value) {
  const valString = window.getComputedStyle(el).getPropertyValue(value);
  return parseInt(valString.replace("px", ""));
}

export default function VerticalImages() {
  const images = document.querySelectorAll("[data-vertical-image]");
  if (!images) return;

  function VerticalImage(image) {
    const parent = image.parentElement;

    function getHeight() {
      const { height: pHeight } = parent.getBoundingClientRect().toJSON();
      const pTop = convertPadding(parent, "padding-top");
      const pBot = convertPadding(parent, "padding-bottom");
      // Gap is in rem, so it has to be converted
      const gap = convertPadding(parent, "--gap") * 8;
      const gutter = (images.length - 1) * gap;
      // take the height of the parent
      // subtract the top and bottom padding
      // divide by the number of images
      // subtract the gutter between the images
      const height = (pHeight - (pTop + pBot)) / images.length - gutter;
      image.style.height = `${height}px`;
    }

    getHeight();
    window.addEventListener("resize", getHeight);
  }

  images.forEach(VerticalImage);
}
