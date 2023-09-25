import { usePortal } from "./hooks/usePortal.js";

function GalleryImages() {
  const images = document.querySelectorAll("img[data-lightbox-image]");
  images.forEach((image, i) => GalleryImage(image, i, images));
}

function GalleryImage(image, initialIndex, images) {
  const credits = document.querySelector("[data-credits]")?.innerHTML || "";
  const title = document.querySelector("[data-title]")?.innerHTML || "";
  const length = images.length - 1;
  let index = initialIndex;
  let closeButton;
  let nextButton;
  let prevButton;
  let imageElement;

  const { closePortal, openPortal, fillPortal } = usePortal();
  const { alt, src } = image;

  const imageMarkup = /*html*/ `
    <div class="lightbox-image-wrapper">
      <img data-lightbox-element class="lightbox-image" src="${src}" alt="${alt}" />
      <div class="lightbox-credits">
        <div class="lightbox-credit" data-lightbox-credit>
          <h2>${title}</h2>
          ${credits}
        </div>
        <div class="lightbox-controls">
          <button class="lightbox-control" data-prev-button type="button" title="View previous photo">
            <svg class="lightbox-control__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
              <path d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z" />
            </svg>
          </button>
          <button class="lightbox-control" data-close-button type="button" title="Close lightbox">
            <svg class="lightbox-control__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path d="M224 416c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L224 338.8l169.4-169.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-192 192C240.4 412.9 232.2 416 224 416z" />
            </svg>
          </button>
          <button class="lightbox-control" data-next-button type="button" title="View next photo">
            <svg class="lightbox-control__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
              <path d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  `;

  image.addEventListener("click", handleClick);

  function getNextImage(inc) {
    const proposedNext = index + inc;
    if (proposedNext > length) return 0;
    if (proposedNext < 0) return length;
    return proposedNext;
  }

  function handleClick() {
    fillPortal(imageMarkup);
    openPortal();
    observeLightbox();
  }

  function handleNextClick() {
    index = getNextImage(1);
    imageElement.src = images[index].src;
  }

  function handlePrevClick() {
    index = getNextImage(-1);
    imageElement.src = images[index].src;
  }

  function observeLightbox() {
    closeButton = document.querySelector("[data-close-button]");
    nextButton = document.querySelector("[data-next-button]");
    prevButton = document.querySelector("[data-prev-button]");
    imageElement = document.querySelector("[data-lightbox-element]");

    closeButton.addEventListener("click", closePortal);
    nextButton.addEventListener("click", handleNextClick);
    prevButton.addEventListener("click", handlePrevClick);
  }
}

GalleryImages();
