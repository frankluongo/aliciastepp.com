import PDFCreator from "./create/PDFCreator.js";
import PhotoSelector from "./create/PhotoSelector.js";
import PDFInterface from "./create/PDFInterface.js";

document.addEventListener("DOMContentLoaded", () => {
  PDFCreator();
  PhotoSelector();
  PDFInterface();
});
