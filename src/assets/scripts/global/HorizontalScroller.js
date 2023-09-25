export default function HorizontalScroller(element, elemToScroll) {
  element.addEventListener("wheel", scrollContent);

  function scrollContent(e) {
    const increment = e.deltaY;
    elemToScroll.scrollLeft += increment;
  }
}
