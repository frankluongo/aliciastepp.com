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
  const titleFns = Titles();
  const scroller = new LocomotiveScroll({
    el: document.querySelector("[data-scroll-container]"),
    smooth: true,
    direction: "horizontal",
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
});
