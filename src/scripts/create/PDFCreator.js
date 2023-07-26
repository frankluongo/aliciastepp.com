import { jsPDF } from "jspdf";
import { PRINT_PDF } from "../utils/constants.js";

const LOADER = {
  name: "[data-printing]",
  visible: "printing-loader--visible",
};

export default function PDFCreator() {
  const main = document.getElementById("images-wrapper");
  const isMobile =
    /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
      navigator.userAgent
    );
  const { pdfFront, pdfBack } = main.dataset;
  const opts = { unit: "in", format: [8.5, 11] };
  const doc = new jsPDF(opts);
  const loader = document.querySelector(LOADER.name);

  document.addEventListener(PRINT_PDF, onPrint);

  async function showLoader() {
    loader.classList.add(LOADER.visible);
  }

  async function hideLoader() {
    loader.classList.remove(LOADER.visible);
  }

  async function onPrint() {
    showLoader();
    await new Promise((res) => setTimeout(res, 500));
    try {
      addFrontAndBack(pdfFront, true);
      window.photos.forEach(addPhoto);
      addFrontAndBack(pdfBack, false);
      if (isMobile) {
        window.open(doc.output("bloburl"), "_blank");
      } else {
        doc.save("AliciaSteppPhotography.pdf");
      }
    } catch (_) {
      alert("Oh no! Something went wrong. Try again on a computer");
    }
    hideLoader();
  }

  function addPhoto(imgObj) {
    const img = makeImg(imgObj.src);
    const printDims = {
      width: 7.5,
      height: 7.5 / imgObj.proportion,
      left: 0.5,
    };
    if (printDims.height > 10) {
      printDims.height = 10;
      printDims.width = imgObj.proportion * 10;
      printDims.left = (8.5 - printDims.width) / 2;
    }
    printDims.top = (11 - printDims.height) / 2;
    const { top, left, width, height } = printDims;
    doc.addImage(img, "JPEG", left, top, width, height);
    doc.addPage(opts);
  }

  function addFrontAndBack(imgSrc, addPage) {
    const img = makeImg(imgSrc);
    doc.addImage(img, "JPEG", 0, 0, 8.5, 11);
    if (addPage) doc.addPage(opts);
  }

  function makeImg(src) {
    const img = new Image();
    img.src = src;
    return img;
  }
}
