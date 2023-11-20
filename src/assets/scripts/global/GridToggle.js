export default function GridToggle(scroller, titleFns) {
  const state = { grid: true };
  const toggle = document.querySelector("[data-grid-button]");
  const wrapper = document.querySelector("[data-grid-wrapper]");
  if (!toggle) return null;

  function toggleHandler() {
    state.grid = !state.grid;
    if (state.grid) {
      toggleEvent({
        methods: ["stop"],
        display: "grid",
        titleEvt: "reset",
        btnText: "Fullscreen",
      });
    } else {
      toggleEvent({
        methods: ["init", "update"],
        display: "full",
        titleEvt: "init",
        btnText: "Grid",
      });
    }
  }

  function toggleEvent({ methods, display, titleEvt, btnText }) {
    toggle.innerText = `${btnText} view`;
    methods.forEach((method) => scroller[method]());
    document.documentElement.setAttribute("data-grid-status", display);
    wrapper.setAttribute("data-display", display);
    titleFns[titleEvt]();
    window.dispatchEvent(new Event("resize"));
  }

  toggle.addEventListener("click", toggleHandler);
}
