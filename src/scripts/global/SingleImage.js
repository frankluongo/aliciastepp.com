export default function SingleImages() {
  const images = document.querySelectorAll("[data-single-image]");
  if (!images.length) return;

  images.forEach(SingleImage);
}

function SingleImage(image) {
  const data = JSON.parse(image.dataset.imageInfo);
}
