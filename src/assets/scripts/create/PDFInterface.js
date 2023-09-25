import { PHOTOS_UPDATE, photosUpdate, printPDF } from "../utils/constants.js";
import { removePhotoFromArray } from "../utils/helpers.js";

import HorizontalScroller from "../global/HorizontalScroller.js";

export default function PDFInterface() {
  const state = {
    trayExists: false,
    photoLength: 0,
    photos: null,
    dragging: null,
    draggedOver: null,
  };

  const tray = document.createElement("section");
  const trayPhotosWrapper = document.createElement("div");
  const trayPhotos = document.createElement("div");
  const trayButton = document.createElement("div");
  tray.classList.add("tray", "z-90");
  trayPhotosWrapper.classList.add("tray__photos-wrapper");
  trayPhotos.classList.add("tray__photos");
  trayButton.classList.add("tray__button");
  trayButton.innerHTML = buildButton();
  tray.appendChild(trayPhotosWrapper);
  trayPhotosWrapper.appendChild(trayPhotos);
  HorizontalScroller(trayPhotosWrapper, trayPhotos);
  tray.appendChild(trayButton);

  document.addEventListener(PHOTOS_UPDATE, onPhotosUpdate);

  function onPhotosUpdate() {
    const { photos } = window;
    if (photos.length < 1) destroy();
    if (photos.length === 1 && !state.trayExists) build();
    if (photos.length > 1) addPhotoToTray();
  }

  function onTrayClick(e) {
    const { action, src } = e.target.dataset;
    if (action === "remove") {
      e.target.parentElement.remove();
      removePhotoFromArray({ src });
      tray.dispatchEvent(photosUpdate);
    }
    if (action === "create") tray.dispatchEvent(printPDF);
  }

  function onPhotoDrag(e) {
    state.dragging = e.target.dataset.src;
  }
  function onPhotoDragover(e) {
    state.draggedOver = e.target.dataset.src;
  }
  function onPhotoDrop() {
    const { dragging, draggedOver } = state;
    const item1 = window.photos.findIndex((item) => item.src === dragging);
    const item2 = window.photos.findIndex((item) => item.src === draggedOver);
    const origItem = window.photos[item1];
    const photoCopy = [...window.photos];
    photoCopy.splice(item1, 1);
    photoCopy.splice(item2, 0, origItem);
    window.photos = photoCopy;
    tray.dispatchEvent(photosUpdate);
  }

  function addPhotoToTray() {
    trayPhotos.innerHTML = window.photos.map(buildMarkup).join("");
    state.photos = trayPhotos.querySelectorAll("[data-photo]");
    state.photos.forEach((pho) => pho.addEventListener("drag", onPhotoDrag));
    state.photos.forEach((pho) =>
      pho.addEventListener("dragover", onPhotoDragover)
    );
    state.photos.forEach((pho) => pho.addEventListener("drop", onPhotoDrop));
  }

  function build() {
    state.trayExists = true;
    document.body.appendChild(tray);
    document.body.classList.add("tray-active");
    tray.addEventListener("click", onTrayClick);
    tray.addEventListener("dragover", (e) => e.preventDefault());
    addPhotoToTray();
  }

  function destroy() {
    state.trayExists = false;
    tray.removeEventListener("click", onTrayClick);
    document.body.removeChild(tray);
    document.body.classList.remove("tray-active");
  }
  //
  // Helpers
  //
  function buildMarkup(img) {
    return `
      <div class="tray__photo tray-photo" draggable data-photo style="width: ${
        img.proportion * 12
      }rem">
        <img
          class="tray-photo__img"
          src="${img.src}?format=200w"
          data-src="${img.src}"
          alt="Selected Photo"
        />
        <button
          class="tray-photo__remove"
          data-action="remove"
          data-src="${img.src}"
        >
          <span class="tray-button__text">
            Remove
          </span>
        </button>
      </div>
    `;
  }
  function buildButton() {
    return `
      <button class="tray-button__create" data-action="create">
        <span class="tray-button__text">
          Create PDF
        </span>
      </button>
    `;
  }
}
