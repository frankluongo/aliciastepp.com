import LocomotiveScroll from "locomotive-scroll";
import DynamicImages from "./global/DynamicImages.js";
import GridToggle from "./global/GridToggle.js";
import ScrollPrompt from "./global/ScrollPrompt.js";
import Titles from "./global/Titles.js";
import VerticalImages from "./global/VerticalImage.js";
import MultipleImages from "./global/MultipleImages.js";

document.addEventListener("DOMContentLoaded", () => {
  DynamicImages();
  ScrollPrompt();
  VerticalImages();
  MultipleImages();
});

window.addEventListener("load", () => {
  const el = document.querySelector("[data-scroll-container]");

  const titleFns = Titles();
  const scroller = new LocomotiveScroll({
    el,
    smooth: true,
    direction: "horizontal",
    gestureDirection: "both",
  });
  const mq = window.matchMedia("(min-width: 1024px)");
  mq.addEventListener("change", onMqlChange);

  function handleScroller() {
    if (!mq.matches) return scroller.destroy();
    scroller.init();
  }

  function onMqlChange() {
    handleScroller();
  }

  handleScroller();

  GridToggle(scroller, titleFns);
  setInterval(() => window.dispatchEvent(new Event("resize")), 500);
  ConvertSwipe();
});

function ConvertSwipe() {
  window.addEventListener("wheel", onWheel, { passive: false });

  function onWheel(e) {
    if (e.deltaX === 0) return;
    e.preventDefault();
  }
}
