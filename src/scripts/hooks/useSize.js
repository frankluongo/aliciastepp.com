export function useSize(element, id) {
  function setSize() {
    const dimensions = element?.getBoundingClientRect()?.toJSON();
    Object.keys(dimensions).forEach((key) => {
      document.documentElement.style.setProperty(
        `--${id}-${key}`,
        `${dimensions[key]}px`
      );
    });
  }

  const observer = new ResizeObserver(setSize);

  setSize();
  observer.observe(element, { box: "border-box" });
}
