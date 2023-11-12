export default function Navigation() {
  const toggle = document.querySelector("[data-toggle]");
  const nav = document.querySelector("[data-nav]");
  const mql = window.matchMedia("(max-width: 1023px)");
  if (!nav || !toggle) return null;
  setNav(mql.matches);

  function onToggle() {
    const state = nav.getAttribute("aria-hidden") === "true";
    setNav(!state);
  }

  function onChange({ matches }) {
    setNav(matches);
  }

  function setNav(bool) {
    nav.setAttribute("aria-hidden", bool);
  }

  toggle.addEventListener("click", onToggle);
  mql.addEventListener("change", onChange);
}
