const CONSTS = {
  displayClass: "display",
  scrollPromptEl: "[data-scroll-prompt]",
  seenPrompt: "SEEN_PROMPT",
  timing: 3000,
  visibleClass: "visible",
};

export default function ScrollPrompt() {
  const touch = { start: 0, end: 0 };
  const prompt = document.querySelector(CONSTS.scrollPromptEl);
  if (!prompt) return;
  const hasSeenPrompt = window.localStorage.getItem(CONSTS.seenPrompt);
  if (hasSeenPrompt) return;
  const timeout = setTimeout(displayPrompt, CONSTS.timing);

  async function displayPrompt() {
    prompt.classList.add(CONSTS.displayClass);
    await new Promise((res) => setTimeout(res, 500));
    prompt.classList.add(CONSTS.visibleClass);
    window.localStorage.setItem(CONSTS.seenPrompt, true);
  }

  async function hidePrompt() {
    prompt.classList.remove(CONSTS.visibleClass);
    await new Promise((res) => setTimeout(res, 500));
    prompt.classList.remove(CONSTS.displayClass);
    window.localStorage.setItem(CONSTS.seenPrompt, true);
  }

  function onTouchEnd(e) {
    touch.end = e.changedTouches[0].screenX;
    onScroll();
  }

  function onTouchStart(e) {
    touch.start = e.changedTouches[0].screenX;
  }

  function onScroll() {
    const distance = Math.abs(touch.start - touch.end);
    if (distance > 10) {
      hidePrompt();
      clearTimeout(timeout);
    }
  }

  document.addEventListener("touchstart", onTouchStart);
  document.addEventListener("touchend", onTouchEnd);
}
