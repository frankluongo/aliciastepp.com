// These images load up after the DOM is done loading

export default function DelayedImages() {
  const delayeds = document.querySelectorAll("[data-delayed-image]");
  if (!delayeds) return null;
  delayeds.forEach(DelayedImage);
}

function DelayedImage(image) {
  image.src = image.dataset.src;
}
