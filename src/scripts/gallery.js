import { usePortal } from "./hooks/usePortal.js";

function GalleryImages() {
  const images = document.querySelectorAll("img[data-lightbox-image]");
  images.forEach(GalleryImage);
}

function GalleryImage(image, i) {
  const { openPortal, fillPortal } = usePortal();
  const { alt, src } = image;

  const imageMarkup = /*html*/ `
    <div class="lightbox-image-wrapper">
      <img class="lightbox-image" src="${src}" alt="${alt}" />
    </div>
  `;

  image.setAttribute("data-lightbox-index", i);
  image.addEventListener("click", handleClick);

  function handleClick() {
    fillPortal(imageMarkup);
    openPortal();
  }
}

GalleryImages();
