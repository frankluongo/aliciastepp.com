const TIMING = 4000;

export default async function HomeLogo() {
  const logoWrapper = document.querySelector("[data-homepage-logo]");
  const logo = logoWrapper.querySelector("svg");
  const headerLogo = document.querySelector("[data-header-logo-link] svg");

  function onAnimationEnd() {
    logo.classList.add("animate");
  }

  logo.style.setProperty("--x", `${headerLogo.getBoundingClientRect().x}px`);
  logo.style.setProperty("--y", `${headerLogo.getBoundingClientRect().y}px`);
  logo.style.setProperty(
    "--width",
    `${headerLogo.getBoundingClientRect().width}px`
  );
  await new Promise((res) => setTimeout(res, TIMING));
  onAnimationEnd();
}
