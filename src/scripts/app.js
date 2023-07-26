import "../styles/app.scss";

import Navigation from "./global/Navigation.js";
import LazyImages from "./global/LazyImages.js";
import DelayedImages from "./global/DelayedImages.js";
import { useSize } from "./hooks/useSize.js";
import { useWindow } from "./hooks/useWindow.js";
import MotionReel from "./global/MotionReel.js";

document.addEventListener("DOMContentLoaded", () => {
  DelayedImages();
  Navigation();
  LazyImages();
  useSize(document.querySelector("[data-header]"), "header");
  useWindow();
  MotionReel();
});

window.addEventListener("load", () => {
  document.documentElement.style.opacity = 1;
  window.dispatchEvent(new Event("resize"));
});
