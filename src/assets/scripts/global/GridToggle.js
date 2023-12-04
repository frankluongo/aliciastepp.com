export default function GridToggle(scroller, titleFns) {
  const toggle = document.querySelector("[data-grid-button]");
  if (!toggle) return null;
  const wrapper = document.querySelector("[data-grid-wrapper]");
  const grid = wrapper.dataset.display === "grid";
  const state = { grid };

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
