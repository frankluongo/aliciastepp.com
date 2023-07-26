import { PHOTOS_UPDATE, photosUpdate } from "../utils/constants.js";
import { removePhotoFromArray } from "../utils/helpers.js";

export default function PhotoSelector() {
  window.photos = [];
  const main = document.getElementById("images-wrapper");

  main.addEventListener("click", onPhotoClick);
  document.addEventListener(PHOTOS_UPDATE, onPhotosUpdate);

  function onPhotoClick(e) {
    const { target } = e;
    if (!target.hasAttribute("data-image")) return;
    togglePhoto(target);
  }

  function onPhotosUpdate() {
    const imgButtons = document.querySelectorAll("[data-image]");
    imgButtons.forEach(setState);
  }

  function togglePhoto(img) {
    const { src } = img.dataset;
    const { width, height } = img.querySelector("img").getBoundingClientRect();
    const proportion = width / height;

    const newState = !getState(img);
    img.setAttribute("data-selected", newState);
    newState ? addPhoto({ src, proportion }) : removePhoto({ src });
  }

  function addPhoto(srcObj) {
    window.photos.push(srcObj);
    const cachedPhoto = new Image();
    cachedPhoto.src = srcObj.src;
    main.dispatchEvent(photosUpdate);
  }

  function removePhoto(srcObj) {
    removePhotoFromArray(srcObj);
    main.dispatchEvent(photosUpdate);
  }

  function getState(img) {
    const imgState = img.getAttribute("data-selected");
    return imgState === "true";
  }

  function setState(img) {
    const { src } = img.dataset;
    const hasItem = window.photos.filter((item) => item.src === src).length > 0;
    img.setAttribute("data-selected", hasItem);
  }
}
